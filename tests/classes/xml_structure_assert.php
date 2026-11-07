<?php
/**
 * Compares two XML elements by what XML namespaces define as their meaning:
 * the namespace URI and local name of every element and attribute, attribute
 * values, the order of child elements and the text of elements (trimmed;
 * whitespace-only text between elements is indentation). Namespace prefixes
 * and where a namespace is declared do not matter.
 *
 * Under PHP 5, assertEquals() on two DOMElement objects compared objects
 * without visible properties and always passed; PHPUnit 9 compares the
 * serialized XML including prefixes and indentation.
 *
 * @package Webdav
 * @subpackage Tests
 * @access private
 */
class ezcWebdavTestXmlStructureAssert
{
    public static function assertSameStructure( DOMElement $expected, DOMElement $actual, $message = '' )
    {
        \PHPUnit\Framework\Assert::assertSame(
            self::describe( $expected ),
            self::describe( $actual ),
            $message
        );
    }

    /**
     * Returns a nested array describing $element as above.
     *
     * @param DOMElement $element
     * @return array
     */
    public static function describe( DOMElement $element )
    {
        $attributes = array();
        foreach ( $element->attributes as $attribute )
        {
            $attributes['{' . $attribute->namespaceURI . '}' . $attribute->localName] = $attribute->value;
        }
        ksort( $attributes );

        $children = array();
        $text     = '';
        foreach ( $element->childNodes as $child )
        {
            if ( $child instanceof DOMElement )
            {
                $children[] = self::describe( $child );
            }
            else if ( $child instanceof DOMText || $child instanceof DOMCdataSection )
            {
                $text .= $child->data;
            }
        }

        return array(
            'name'       => '{' . $element->namespaceURI . '}' . $element->localName,
            'attributes' => $attributes,
            'text'       => trim( $text ),
            'children'   => $children,
        );
    }
}
?>
