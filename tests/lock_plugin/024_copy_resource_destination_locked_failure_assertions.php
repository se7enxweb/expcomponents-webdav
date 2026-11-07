<?php

class ezcWebdavLockPluginClientTestAssertions024
{
    public function assertSourceStillExists( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/resource.html' )
        );
    }

    public function assertDestinationParentStillCorrect( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/other_collection', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property set on destination parent.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Active lock available not on destination parent.'
        );
    }

    public function assertDestinationNotExists( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertFalse(
            $backend->nodeExists( '/other_collection/moved_resource.html' ) 
        );
    }

}

return new ezcWebdavLockPluginClientTestAssertions024();

?>
