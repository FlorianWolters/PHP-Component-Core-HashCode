<?php
namespace FlorianWolters\Component\Core;

/**
 * The interface {@see HashCodeInterface} indicates that an implementing class
 * provides a hash code value for objects.
 *
 * @author    Florian Wolters <wolters.fl@gmail.com>
 * @copyright 2012-2013 Florian Wolters
 * @license   http://gnu.org/licenses/lgpl.txt LGPL-3.0+
 * @link      http://github.com/FlorianWolters/PHP-Component-Core-HashCode
 * @since     Interface available since Release 0.1.0
 */
interface HashCodeInterface
{
    /**
     * Returns a hash code value for this object.
     *
     * @return string The hash code value.
     */
    public function hashCode();
}
