<?php

require_once dirname( __FILE__ ) . '/webdav_property_test.php';

class ezcWebdavSourcePropertyTest extends ezcWebdavWebdavPropertyTestCase
{
    public static function suite()
    {
		return new \PHPUnit\Framework\TestSuite( __CLASS__ );
    }

    protected function setUp(): void
    {
        $this->className = 'ezcWebdavSourceProperty';
        $this->propertyName = 'source';
        $this->defaultValues = array(
            'links' => array(),
        );
        $this->workingValues = array(
            'links' => array(
                array(),
                array(
                    new ezcWebdavSourcePropertyLink(),
                    new ezcWebdavSourcePropertyLink(),
                ),
            ),
        );
        $this->failingValues = array(
            'links' => array(
                23,
                23.34,
                'foobar',
                true,
                false,
                new stdClass(),
            ),
        );
    }
}

?>
