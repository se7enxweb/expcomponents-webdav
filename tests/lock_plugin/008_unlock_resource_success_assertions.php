<?php

class ezcWebdavLockPluginClientTestAssertions008
{
    public function assertLockDiscoveryPropertyNowhere( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNull(
            $prop
        );

        $prop = $backend->getProperty( '/collection/resource.html', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertInstanceOf(
            'ezcWebdavLockDiscoveryProperty',
            $prop,
            'Property has incorrect type.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            0,
            count( $prop->activeLock ),
            'Active lock element not removed correctly.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions008();

?>
