<?php
use FlorianWolters\Component\Core\HashCodeInterface;
use FlorianWolters\Component\Core\HashCodeTrait;

/**
 * Demonstrates the usage of a custom hash code value implementation by
 * overriding the method {@link HashCodeTrait::hashCode} of the trait
 * {@link HashCodeTrait}.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-HashCode
 * @since     Class available since Release 0.1.0
 */
class HashCodeCustomImpl implements HashCodeInterface
{
    /**
     * Imports the member method {@link HashCodeTrait::hashCode}.
     */
    use HashCodeTrait;

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
