<?php
/**
 * FlorianWolters\Component\Core\HashCodeDefaultImpl
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
use FlorianWolters\Component\Core\HashCodeTrait;

/**
 * Demonstrates the usage of the default hash code value implementation with the
 * trait {@see HashCodeTrait}.
 *
 * @since Class available since Release 0.2.0
 */
class HashCodeDefaultImpl implements HashCodeInterface
{
    /**
     * Imports the member method {@see HashCodeTrait::hashCode}.
     */
    use HashCodeTrait;
}
