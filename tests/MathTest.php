<?php

declare(strict_types=1);

use App\Math;
use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    public function testAdd(): void
    {
        $this->assertEquals(5, Math::add(2, 3));
        $this->assertEquals(-1, Math::add(2, -3));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(1, Math::subtract(3, 2));
        $this->assertEquals(5, Math::subtract(2, -3));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(6, Math::multiply(3, 2));
        $this->assertEquals(-6, Math::multiply(3, -2));
    }

    public function testDivide(): void
    {
        $this->assertEquals(2, Math::divide(6, 3));
        $this->assertEquals(-2, Math::divide(6, -3));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Math::divide(5, 0);
    }
}
