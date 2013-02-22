<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\HashCodeInterface;
use FlorianWolters\Component\Core\HashCodeTrait;

/**
 * Demonstrates the usage of the default hash code value implementation with the
 * trait {@see HashCodeTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-HashCode
 * @since     Class available since Release 0.2.0
 */
class HashCodeDefaultImpl implements HashCodeInterface
{
    /**
     * Imports the member method {@see HashCodeTrait::hashCode}.
     */
    use HashCodeTrait;
}
