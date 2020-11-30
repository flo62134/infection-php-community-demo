<?php

declare(strict_types=1);

namespace App\Calculator;

class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function isNegative(int $a): bool
    {
        return $a < 0;
    }
}