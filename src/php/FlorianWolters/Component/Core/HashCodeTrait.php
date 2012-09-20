<?php
namespace FlorianWolters\Component\Core;

/**
 * The trait {@link HashCodeTrait} provides a hash code value for objects.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-HashCode
 * @since     Trait available since Release 0.1.0
 */
trait HashCodeTrait
{
    /**
     * Returns a hash code value for this object.
     *
     * The {@link hashCode} method implements the *Equality Method*
     * implementation pattern.
     *
     * @return string The hash code value.
     */
    public function hashCode()
    {
        return \spl_object_hash($this);
    }
}
