<?php
/**
 * FlorianWolters\Component\Core\HashCodeCustomImpl
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

/**
 * Demonstrates the usage of a custom hash code value implementation by
 * implementing the method {@see HashCodeInterface::hashCode}.
 *
 * @since Class available since Release 0.2.0
 */
class HashCodeCustomImpl implements HashCodeInterface
{
    /**
     * The value of this object.
     *
     * @var mixed
     */
    private $value;

    /**
     * Constructs a new object with the specified value.
     *
     * @param mixed $value The value.
     */
    public function __construct($value = null)
    {
        $this->value = $value;
    }

    /**
     * {@inheritdoc}
     */
    final public function hashCode()
    {
        return (string) $this->value;
    }
}
