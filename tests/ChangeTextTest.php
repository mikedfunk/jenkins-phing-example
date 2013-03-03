<?php
namespace MikeFunk\Tests;

use MikeFunk\ChangeText;

/**
 * test ChangeText class
 *
 * @package ExampleProject
 * @author Mike Funk <mfunk@christianpublishing.com>
 * @copyright 2013 Xulon Press, Inc. All Rights Reserved.
 */

class ChangeTextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * phpunit setup
     */
    public function setUp()
    {
        $this->object = new ChangeText;
    }

    /**
     * @covers MikeFunk\ChangeText::change
     */
    public function testChange()
    {
        $before = 'test 123';
        $expected = 'test-123';
        $this->assertEquals($expected, $this->object->change($before));
    }

    /**
     * @expectedException MikeFunk\ChangeTextException
     */
    public function testChangeException()
    {
        $before = 'test 123!!';
        $expected = 'test-123!!';
        $this->assertEquals($expected, $this->object->change($before));
    }
}
