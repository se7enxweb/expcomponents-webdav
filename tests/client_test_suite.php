<?php

require_once __DIR__ . '/client_test.php';

class ezcWebdavClientTestSuite extends \PHPUnit\Framework\TestSuite
{
    protected $testSets;

    protected $setup;

    public function __construct( $name, $dataFile, ezcWebdavClientTestSetup $setup = null )
    {
        $this->name = "Client: $name";
        $this->testSets = new ezcWebdavTestSetContainer(
            dirname( __FILE__ ) . '/' . $dataFile
        );
        $this->setup = (
            $setup === null ? new ezcWebdavClientTestContinuousSetup() : $setup
        );

        foreach ( $this->testSets as $testId => $testData )
        {
            $this->addTest(
                new ezcWebdavClientTest(
                    $testId,
                    $this->setup,
                    $testData
                )
            );
        }
    }
}

?>
