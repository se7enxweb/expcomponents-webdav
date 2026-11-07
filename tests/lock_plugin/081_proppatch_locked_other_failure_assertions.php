<?php

class ezcWebdavLockPluginClientTestAssertions081
{
    public function assertTargetStillExisst( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/resource.html' )
        );
    }

    public function assertTargetStillLocked( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection/resource.html', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property removed from target.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Target parent active lock gone.'
        );
    }

    public function assertTargetPropertyNotSet( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection/resource.html', 'authors', 'http://www.w3.com/standards/z39.50/' );

        \PHPUnit\Framework\Assert::assertNull(
            $prop,
            'Desired property not set.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions081();

?>
