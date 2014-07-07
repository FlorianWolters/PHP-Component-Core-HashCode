<?php
/**
 * FlorianWolters\Component\Core\HashCodeTrait
 *
 * PHP Version 5.4
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2014 Florian Wolters (http://blog.florianwolters.de)
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-HashCode
 */

namespace FlorianWolters\Component\Core;

/**
 * The trait {@see HashCodeTrait} provides a hash code value for objects.
 *
 * Always implement the interface {@see HashCodeInterface} if using the trait
 * {@see HashCodeTrait}, since that allows {@link
 * http://php.net/language.oop5.typehinting Type Hinting}.
 *
 * @since Trait available since Release 0.1.0
 */
trait HashCodeTrait
{
    /**
     * Returns a hash code value for this object.
     *
     * The general contract of {@see hashCode} is:
     *
     * Whenever it is invoked on the same object more than once during an
     * execution of a PHP application, the {@see hashCode} method must
     * consistently return the same string. This string need not remain
     * consistent from one execution of an application to another execution of
     * the same application.
     *
     * As much as is reasonably practical, the {@see hashCode} method defined by
     * trait {@see HashCodeTrait} does return distinct strings for distinct
     * objects.
     *
     * The {@see hashCode} method implements the *Equality Method*
     * implementation pattern.
     *
     * @return string The hash code value.
     */
    public function hashCode()
    {
        return \spl_object_hash($this);
    }
}
