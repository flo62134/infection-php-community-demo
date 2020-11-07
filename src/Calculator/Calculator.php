<?php

declare(strict_types=1);

namespace App\Calculator;

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function isNegative(float $a): bool
    {
        return $a < 0;
    }
}