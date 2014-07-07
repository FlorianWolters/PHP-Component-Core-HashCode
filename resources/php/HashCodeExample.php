<?php
/**
 * FlorianWolters\Component\Core\HashCodeExample
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-HashCode
 */

namespace FlorianWolters\Example;

use FlorianWolters\Component\Core\HashCodeInterface;
use FlorianWolters\Example\HashCodeCustomImpl;
use FlorianWolters\Example\HashCodeDefaultImpl;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * The class {@see HashCodeExample} implements a simple command line application
 * to demonstrate the component **FlorianWolters\Component\Core\HashCode**.
 *
 * @since Class available since Release 0.2.0
 */
final class HashCodeExample
{
    /**
     * Runs the {@see HashCodeExample}.
     *
     * @param integer $argc The number of arguments.
     * @param array   $argv The arguments.
     *
     * @return integer Always `0`.
     */
    public static function main($argc, array $argv = array())
    {
        $self = new self;
        $self->demonstrateDefaultImplementation();
        $self->demonstrateCustomImplementation();

        return 0;
    }

    /**
     * @return void
     */
    private function demonstrateDefaultImplementation()
    {
        $firstObj = new HashCodeDefaultImpl;
        $secondObj = new HashCodeDefaultImpl;
        $thirdObj = new HashCodeDefaultImpl;

        $this->writeLine('Default implementation:');
        $this->output($firstObj, $secondObj, $thirdObj);
    }

    /**
     * @return void
     */
    private function demonstrateCustomImplementation()
    {
        $firstObj = new HashCodeCustomImpl('foo');
        $secondObj = new HashCodeCustomImpl('bar');
        $thirdObj = new HashCodeCustomImpl('foo');

        $this->writeLine('Custom implementation:');
        $this->output($firstObj, $secondObj, $thirdObj);
    }

    /**
     * @return void
     */
    private function output(
        HashCodeInterface $firstObj,
        HashCodeInterface $secondObj,
        HashCodeInterface $thirdObj
    ) {
        $this->writeLine();
        $this->writeLine('$firstObj->hashCode() = ' . $firstObj->hashCode());
        $this->writeLine('$secondObj->hashCode() = ' . $secondObj->hashCode());
        $this->writeLine('$thirdObj->hashCode() = ' . $thirdObj->hashCode());
        $this->writeLine();
    }

    /**
     * @return void
     */
    private function writeLine($text = '')
    {
        echo $text . \PHP_EOL;
    }
}

exit(HashCodeExample::main($argc, $argv));
