<?php
if ( ! @include __DIR__ . '/../vendor/autoload.php' )
{
    die(<<<'EOT'
You must set up the project dependencies, run the following commands:
wget http://getcomposer.org/composer.phar
php composer.phar install --dev

You can then run tests by calling:

phpunit
EOT
       );
}

// Test helpers the test files use without including them
require_once __DIR__ . '/classes/attribute_assert.php';
require_once __DIR__ . '/classes/xml_structure_assert.php';
// The replay test case the client test suites instantiate with recorded data;
// loaded here so PHPUnit does not take it for a test class of each client file.
require_once __DIR__ . '/client_test.php';
