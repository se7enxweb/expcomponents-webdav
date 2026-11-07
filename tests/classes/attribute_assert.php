<?php
/**
 * assertAttributeEquals() and assertAttributeSame() as PHPUnit 3 to 8 had them
 * (PHPUnit 9 removed them): read a property, also a protected or private one,
 * of an object or class by reflection and compare it with the same assertion.
 *
 * @package Webdav
 * @subpackage Tests
 * @access private
 */
class ezcWebdavTestAttributeAssert
{
    public static function readAttribute( $classOrObject, $attributeName )
    {
        $class = new ReflectionClass( $classOrObject );
        while ( !$class->hasProperty( $attributeName ) && ( $parent = $class->getParentClass() ) )
        {
            $class = $parent;
        }
        $property = $class->getProperty( $attributeName );
        $property->setAccessible( true );
        return is_object( $classOrObject ) ? $property->getValue( $classOrObject ) : $property->getValue();
    }

    public static function assertAttributeEquals( $expected, $attributeName, $classOrObject, $message = '' )
    {
        \PHPUnit\Framework\Assert::assertEquals( $expected, self::readAttribute( $classOrObject, $attributeName ), $message );
    }

    public static function assertAttributeSame( $expected, $attributeName, $classOrObject, $message = '' )
    {
        \PHPUnit\Framework\Assert::assertSame( $expected, self::readAttribute( $classOrObject, $attributeName ), $message );
    }
}
?>
