<?php
namespace FlorianWolters\Mock;

use FlorianWolters\Component\Core\HashCodeInterface;

/**
 * Demonstrates the usage of a custom hash code value implementation by
 * implementing the method {@see HashCodeInterface::hashCode}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-HashCode
 * @since     Class available since Release 0.2.0
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
     * Returns a hash code value for this object.
     *
     * {@inheritdoc}
     *
     * @return string The hash code value.
     */
    final public function hashCode()
    {
        return (string) $this->value;
    }
}
