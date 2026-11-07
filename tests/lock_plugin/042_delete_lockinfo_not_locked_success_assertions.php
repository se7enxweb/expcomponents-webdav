<?php

class ezcWebdavLockPluginClientTestAssertions042
{
    public function assertTargetGone( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertFalse(
            $backend->nodeExists( '/collection/resource.html' )
        );
    }

    public function assertTargetParentStillLocked( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property removed from source.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Target parent active lock gone.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions042();

?>
