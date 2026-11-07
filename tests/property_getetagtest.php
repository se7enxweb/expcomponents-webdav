<?php

require_once dirname( __FILE__ ) . '/webdav_property_test.php';

class ezcWebdavGetEtagPropertyTest extends ezcWebdavWebdavPropertyTestCase
{
    public static function suite()
    {
		return new \PHPUnit\Framework\TestSuite( __CLASS__ );
    }

    protected function setUp(): void
    {
        $this->className = 'ezcWebdavGetEtagProperty';
        $this->propertyName = 'getetag';
        $this->defaultValues = array(
            'etag'    => null,
        );
        $this->workingValues = array(
            'etag' => array(
                null,
                "foo bar",
                "",
            ),
        );
        $this->failingValues = array(
            'etag' => array(
                23,
                23.34,
                true,
                false,
                new stdClass(),
                array(),
            ),
        );
    }
}

?>
