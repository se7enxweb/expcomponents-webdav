<?php

class ezcWebdavLockPluginClientTestAssertions065
{
    public function assertLockNullStillExists( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertTrue(
            $backend->nodeExists( '/collection/newcollection' )
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions065();

?>
