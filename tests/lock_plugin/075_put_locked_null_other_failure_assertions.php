<?php

class ezcWebdavLockPluginClientTestAssertions075
{
    public function assertLockNullStillExists( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/newresource' )
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions075();

?>
