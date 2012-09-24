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
     *  The general contract of {@link hashCode} is:
     *  * Whenever it is invoked on the same object more than once during an
     *    execution of a PHP application, the {@link hashCode} method must
     *    consistently return the same string. This string need not remain
     *    consistent from one execution of an application to another execution
     *    of the same application.
     *
     * As much as is reasonably practical, the {@link hashCode} method defined
     * by trait {@link HashCodeTrait} does return distinct strings for distinct
     * objects.
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
