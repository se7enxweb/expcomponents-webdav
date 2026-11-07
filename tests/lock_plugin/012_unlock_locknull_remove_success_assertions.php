<?php

class ezcWebdavLockPluginClientTestAssertions012
{
    public function assertLockNullResourceNotRemoved( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/resource.html' ),
            'Lock null resource /collection/resource.html not gone.'
        );
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection' ),
            'Collection /collection is gone.'
        );
    }

    public function assertLockDiscoveryPropertyNowhere( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertInstanceOf(
            'ezcWebdavLockDiscoveryProperty',
            $prop,
            'Property has incorrect type.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            0,
            count( $prop->activeLock ),
            'Active lock element not removed correctly from root.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions012();

?>
