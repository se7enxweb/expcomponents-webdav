<?php

class ezcWebdavLockPluginClientTestAssertions002
{
    function assertLockDiscoveryPropertyCorrect( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection', 'lockdiscovery' );
        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property not set.'
        );
        \PHPUnit\Framework\Assert::assertInstanceOf(
            'ezcWebdavLockDiscoveryProperty',
            $prop,
            'Lock discovery property has incorrect type.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Number of activeLock elements incorrect.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            new ezcWebdavPotentialUriContent(
                'http://example.com/some/user',
                true
            ),
            $prop->activeLock[0]->owner,
            'Lock owner not correct.'
        );

        $prop = $backend->getProperty( '/collection/resource.html', 'lockdiscovery' );
        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property not set.'
        );
        \PHPUnit\Framework\Assert::assertInstanceOf(
            'ezcWebdavLockDiscoveryProperty',
            $prop,
            'Lock discovery property has incorrect type.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Number of activeLock elements incorrect.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            new ezcWebdavPotentialUriContent(
                'http://example.com/some/user',
                true
            ),
            $prop->activeLock[0]->owner,
            'Lock owner not correct.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions002();

?>
