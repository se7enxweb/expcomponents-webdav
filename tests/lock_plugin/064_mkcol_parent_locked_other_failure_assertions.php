<?php

class ezcWebdavLockPluginClientTestAssertions064
{
    public function assertCollectionNotCreated( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertFalse(
            $backend->nodeExists( '/collection/newcollection' )
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions064();

?>
