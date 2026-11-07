<?php

class ezcWebdavLockPluginClientTestAssertions041
{
    public function assertTargetGone( ezcWebdavMemoryBackend $backend )
    {
        \PHPUnit\Framework\Assert::assertFalse(
            $backend->nodeExists( '/collection' )
        );
    }
}

return new ezcWebdavLockPluginClientTestAssertions041();

?>
