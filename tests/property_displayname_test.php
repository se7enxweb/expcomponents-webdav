<?php

require_once dirname( __FILE__ ) . '/webdav_property_test.php';

class ezcWebdavDisplayNamePropertyTest extends ezcWebdavWebdavPropertyTestCase
{
    public static function suite()
    {
		return new \PHPUnit\Framework\TestSuite( __CLASS__ );
    }

    protected function setUp(): void
    {
        $this->className = 'ezcWebdavDisplayNameProperty';
        $this->propertyName = 'displayname';
        $this->defaultValues = array(
            'displayName' => null,
        );
        $this->workingValues = array(
            'displayName' => array(
                null,
                '',
                'Foo Bar Baz',
            ),
        );
        $this->failingValues = array(
            'displayName' => array(
                23,
                23.34,
                true,
                false,
                array( 23, 42 ),
                new stdClass(),
            ),
        );
    }
}

?>
