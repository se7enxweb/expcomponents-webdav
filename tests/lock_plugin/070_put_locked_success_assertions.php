<?php

class ezcWebdavLockPluginClientTestAssertions070
{
    public function assertCollectionCreated( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/newresource' )
        );
    }

    public function assertCollectionLockedFromParent( ezcWebdavMemoryBackend $backend )
    {
        $parentProp = $backend->getProperty( '/collection', 'lockdiscovery' );
        $childProp  = $backend->getProperty( '/collection/newresource', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotEquals(
            $parentProp,
            $childProp,
            'New collection did not inherit parents lock correctly.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions070();

?>
