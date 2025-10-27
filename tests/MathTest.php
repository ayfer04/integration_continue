<?php

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    public function testAdd()
    {
        $this->assertEquals(5, Math::add(2,3));
        $this->assertEquals(-1, Math::add(2,-3));
    }

    public function testSubtract()
    {
        $this->assertEquals(1, Math::subtract(3,2));
        $this->assertEquals(5, Math::subtract(2,-3));
    }

    public function testMultiply()
    {
        $this->assertEquals(6, Math::multiply(3,2));
        $this->assertEquals(-6, Math::multiply(3,-2));
    }

    public function testDivide()
    {
        $this->assertEquals(2, Math::divide(6,3));
        $this->assertEquals(-2, Math::divide(6,-3));
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        Math::divide(5,0);
    }
}