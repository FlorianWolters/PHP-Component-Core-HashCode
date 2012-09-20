<?php
use FlorianWolters\Component\Core\HashCodeInterface;

require '../../vendor/autoload.php';
require 'HashCodeDefaultImpl.php';
require 'HashCodeCustomImpl.php';

exit(main());

function main()
{
    demonstrateDefaultImplementation();
    demonstrateCustomImplementation();
}

function demonstrateDefaultImplementation()
{
    $firstObj = new HashCodeDefaultImpl;
    $secondObj = new HashCodeDefaultImpl;
    $thirdObj = new HashCodeDefaultImpl;

    writeLine('Default implementation:');
    output($firstObj, $secondObj, $thirdObj);
}

function output(
    HashCodeInterface $firstObj,
    HashCodeInterface $secondObj,
    HashCodeInterface $thirdObj
) {
    writeLine();
    // Member method
    writeLine('$firstObj->hashCode() = ' . $firstObj->hashCode());
    writeLine('$secondObj->hashCode() = ' . $secondObj->hashCode());
    writeLine('$thirdObj->hashCode() = ' . $thirdObj->hashCode());
    writeLine();
}

function writeLine($text = '')
{
    echo $text . \PHP_EOL;
}

function demonstrateCustomImplementation()
{
    $firstObj = new HashCodeCustomImpl('foo');
    $secondObj = new HashCodeCustomImpl('bar');
    $thirdObj = new HashCodeCustomImpl('foo');

    writeLine('Custom implementation:');
    output($firstObj, $secondObj, $thirdObj);
}
