<?php
/**
 * Regression tests for PHP 8 behaviour: count() of null in the lock plugin's
 * PROPFIND handler, escaping of property values and the output result struct.
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Webdav
 * @subpackage Tests
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/**
 * @package Webdav
 * @subpackage Tests
 */
class ezcWebdavPhp8RegressionTest extends PHPUnit\Framework\TestCase
{
    /**
     * A PROPFIND (allprop) whose responses carry only a 200 propstat: the
     * handler has no 404 storage to count and must not call count( null ),
     * a TypeError since PHP 8.0.
     */
    public function testLockPropFindHandlerWithoutNotFoundStorage()
    {
        $request = new ezcWebdavPropFindRequest( '/collection' );
        $request->allProp = true;

        $storage = new ezcWebdavBasicPropertyStorage();
        $storage->attach( new ezcWebdavDisplayNameProperty( 'collection' ) );
        $propFindResponse = new ezcWebdavPropFindResponse(
            new ezcWebdavCollection( '/collection' ),
            new ezcWebdavPropStatResponse( $storage )
        );
        $response = new ezcWebdavMultistatusResponse( $propFindResponse );

        $handler = new ezcWebdavLockPropFindRequestResponseHandler(
            new ezcWebdavLockTools( new ezcWebdavLockPluginOptions() )
        );
        $this->assertNull( $handler->receivedRequest( $request ) );
        $handler->generatedResponse( $response );

        $this->assertCount( 1, $propFindResponse->responses );
        $this->assertTrue( $storage->contains( 'lockdiscovery' ) );
        $this->assertTrue( $storage->contains( 'supportedlock' ) );
        $this->assertTrue( $storage->contains( 'displayname' ) );
    }

    /**
     * A lock discovery the backend found (the locks it stored) is kept in an
     * allprop response, not replaced by an empty one.
     */
    public function testLockPropFindHandlerKeepsBackendLockDiscovery()
    {
        $request = new ezcWebdavPropFindRequest( '/resource' );
        $request->allProp = true;

        $activeLock = new ezcWebdavLockDiscoveryPropertyActiveLock(
            ezcWebdavLockRequest::TYPE_WRITE,
            ezcWebdavLockRequest::SCOPE_EXCLUSIVE,
            ezcWebdavRequest::DEPTH_ZERO,
            new ezcWebdavPotentialUriContent( 'owner' ),
            600,
            new ezcWebdavPotentialUriContent( 'opaquelocktoken:1234', true )
        );
        $storage = new ezcWebdavBasicPropertyStorage();
        $storage->attach( new ezcWebdavLockDiscoveryProperty( new ArrayObject( array( $activeLock ) ) ) );
        $response = new ezcWebdavMultistatusResponse(
            new ezcWebdavPropFindResponse(
                new ezcWebdavResource( '/resource' ),
                new ezcWebdavPropStatResponse( $storage )
            )
        );

        $handler = new ezcWebdavLockPropFindRequestResponseHandler(
            new ezcWebdavLockTools( new ezcWebdavLockPluginOptions() )
        );
        $handler->receivedRequest( $request );
        $handler->generatedResponse( $response );

        $this->assertCount( 1, $storage->get( 'lockdiscovery' )->activeLock );
        $this->assertTrue( $storage->contains( 'supportedlock' ) );
    }

    /**
     * The lock refresh observer declares the properties it sets: no dynamic
     * property (deprecated since PHP 8.2) is created.
     */
    public function testLockRefreshRequestGeneratorHasNoDynamicProperties()
    {
        $request = new ezcWebdavLockRequest( '/resource' );
        $request->setHeader( 'Depth', ezcWebdavRequest::DEPTH_ZERO );
        $request->validateHeaders();

        $deprecations = array();
        set_error_handler( function ( $errno, $errstr ) use ( &$deprecations )
        {
            $deprecations[] = $errstr;
            return true;
        }, E_DEPRECATED | E_USER_DEPRECATED );
        try
        {
            new ezcWebdavLockRefreshRequestGenerator( $request, 600 );
        }
        finally
        {
            restore_error_handler();
        }
        $this->assertSame( array(), $deprecations );
    }

    /**
     * A PROPFIND whose responses carry a 200 and an empty 404 propstat: the
     * empty 404 propstat is still removed.
     */
    public function testLockPropFindHandlerRemovesEmptyNotFoundStorage()
    {
        $request = new ezcWebdavPropFindRequest( '/resource' );
        $request->prop = new ezcWebdavBasicPropertyStorage();
        $request->prop->attach( new ezcWebdavLockDiscoveryProperty() );

        $found = new ezcWebdavBasicPropertyStorage();
        $notFound = new ezcWebdavBasicPropertyStorage();
        $notFound->attach( new ezcWebdavLockDiscoveryProperty() );
        $propFindResponse = new ezcWebdavPropFindResponse(
            new ezcWebdavResource( '/resource' ),
            new ezcWebdavPropStatResponse( $found ),
            new ezcWebdavPropStatResponse( $notFound, ezcWebdavResponse::STATUS_404 )
        );
        $response = new ezcWebdavMultistatusResponse( $propFindResponse );

        $handler = new ezcWebdavLockPropFindRequestResponseHandler(
            new ezcWebdavLockTools( new ezcWebdavLockPluginOptions() )
        );
        $handler->receivedRequest( $request );
        $handler->generatedResponse( $response );

        $this->assertCount( 1, $propFindResponse->responses );
        $this->assertTrue( $found->contains( 'lockdiscovery' ) );
    }

    /**
     * A display name with "&" and "<" is written as text, not read as markup.
     */
    public function testPropertyValueIsEscaped()
    {
        $dom = new DOMDocument( '1.0', 'utf-8' );
        $parent = $dom->createElementNS( 'DAV:', 'D:prop' );
        $dom->appendChild( $parent );

        $storage = new ezcWebdavBasicPropertyStorage();
        $storage->attach( new ezcWebdavDisplayNameProperty( 'Fit & Healthy <site>' ) );

        $handler = new ezcWebdavPropertyHandler( new ezcWebdavXmlTool() );
        $handler->serializeProperties( $storage, $parent );

        $this->assertSame( 'Fit & Healthy <site>', $parent->firstChild->textContent );
        $this->assertStringContainsString( 'Fit &amp; Healthy &lt;site&gt;', $dom->saveXML() );
    }

    /**
     * The constructor of the output result sets its declared headers property.
     */
    public function testOutputResultHeaders()
    {
        $result = new ezcWebdavOutputResult( '200', array( 'Content-Type' => 'text/plain' ), 'body' );
        $this->assertSame( array( 'Content-Type' => 'text/plain' ), $result->headers );
        $this->assertFalse( property_exists( $result, 'header' ) );
    }
}
?>
