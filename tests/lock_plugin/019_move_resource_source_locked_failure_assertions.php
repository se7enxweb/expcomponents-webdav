<?php

class ezcWebdavLockPluginClientTestAssertions019
{
    public function assertSourceStillExists( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/resource.html' )
        );
    }

    public function assertDestinationSourceStillCorrect( ezcWebdavMemoryBackend $backend )
    {
        $prop = $backend->getProperty( '/collection', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property set on source parent.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Active lock available not on source parent.'
        );

        $prop = $backend->getProperty( '/collection/resource.html', 'lockdiscovery' );

        \PHPUnit\Framework\Assert::assertNotNull(
            $prop,
            'Lock discovery property set on source.'
        );
        \PHPUnit\Framework\Assert::assertEquals(
            1,
            count( $prop->activeLock ),
            'Active lock available not on source.'
        );
    }

    public function assertDestinationNotExists( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertFalse(
            $backend->nodeExists( '/other_collection/moved_resource.html' ) 
        );
    }

}

return new ezcWebdavLockPluginClientTestAssertions019();

?>
