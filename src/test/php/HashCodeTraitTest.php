<?php
/**
 * FlorianWolters\Component\Core\HashCodeTraitTest
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
 * Test class for {@see HashCodeTrait}.
 *
 * @since  Class available since Release 0.1.0
 * @covers FlorianWolters\Component\Core\HashCodeTrait
 */
class HashCodeTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The object under test.
     *
     * @var object
     */
    private $traitObject;

    /**
     * Sets up the fixture.
     *
     * This method is called before a test is executed.
     *
     * @return void
     */
    public function setUp()
    {
        $this->traitObject = $this->createObjectForTrait();
    }

    /**
     * *Creation Method* to create an object for the trait under test.
     *
     * @return object The newly created object.
     */
    private function createObjectForTrait()
    {
        $traitName = __NAMESPACE__ . '\HashCodeTrait';

        return $this->getObjectForTrait($traitName);
    }

    /**
     * @return void
     *
     * @coversDefaultClass hashCode
     * @test
     */
    public function testHashCodeFormat()
    {
        $expected = '/^([0-9a-z]){32}$/';
        $actual = $this->traitObject->hashCode();

        $this->assertRegExp($expected, $actual);
    }

    /**
     * @return void
     *
     * @coversDefaultClass hashCode
     * @test
     */
    public function testHashCodeIsSameForSameObject()
    {
        $expected = $this->traitObject->hashCode();
        $actual = $this->traitObject->hashCode();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @return void
     *
     * @coversDefaultClass hashCode
     * @test
     */
    public function testHashCodeIsDifferentForDifferentObject()
    {
        $expected = $this->traitObject->hashCode();
        $actual = $this->createObjectForTrait()->hashCode();

        $this->assertNotEquals($expected, $actual);
    }
}
