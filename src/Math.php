<?php

declare(strict_types=1);

namespace App;

final class Math
{
    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public static function divide(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new \InvalidArgumentException('Division par 0 impossible');
        }
        return $a / $b;
    }
}
