<?php

class ezcWebdavLockPluginClientTestAssertions021
{
    public function assertSourceStillThere( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/resource.html' )
        );

        $prop = $backend->getProperty( '/collection/resource.html', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property removed from source.'
        );
        \PHPUnit\Framework\Assert::assertInstanceOf(
            'ezcWebdavLockDiscoveryProperty',
            $prop
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Active lock element removed from source.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            'opaquelocktoken:1234',
            $prop->activeLock[0]->token->__toString(),
            'Active lock token on destination parent incorrect.'
        );
    }

    public function assertDestinationParentStillCorrect( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/other_collection', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNull(
            $prop,
            'Lock discovery property set on destination parent.'
        );
    }

    public function assertDestinationCorrect( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/other_collection/moved_resource.html' ) 
        );

        $prop = $backend->getProperty( '/other_collection/moved_resource.html', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property not available on destination.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            0,
            count( $prop->activeLock ),
            'Active lock available on destination.'
        );
    }

}

return new ezcWebdavLockPluginClientTestAssertions021();

?>
