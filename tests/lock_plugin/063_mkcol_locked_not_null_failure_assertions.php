<?php

class ezcWebdavLockPluginClientTestAssertions063
{
    public function assertCollectionCreated( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/newcollection' )
        );
    }

    public function assertCollectionLockedFromParent( ezcWebdavMemoryBackend $backend )
    {
        $parentProp = $backend->getProperty( '/collection', 'lockdiscovery' );
        $childProp  = $backend->getProperty( '/collection/newcollection', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotEquals(
            $parentProp,
            $childProp,
            'New collection did inherit parents lock.'
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions063();

?>
