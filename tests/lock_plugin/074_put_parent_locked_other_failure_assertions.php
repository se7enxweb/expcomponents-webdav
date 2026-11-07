<?php

class ezcWebdavLockPluginClientTestAssertions074
{
    public function assertCollectionNotCreated( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertFalse(
            $backend->nodeExists( '/collection/newresource' )
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions074();

?>
