<?php

require_once 'PHPUnit/Autoload.php';

use \PHPUnit\Framework\TestCase;

/** @test */
class StackTest extends \PHPUnit\Framework\TestCase
{
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
