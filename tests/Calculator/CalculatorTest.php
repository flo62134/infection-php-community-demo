<?php

declare(strict_types=1);

namespace test\Calculator;

use PHPUnit\Framework\TestCase;
use App\Calculator\Calculator;

class CalculatorTest extends TestCase
{
    private $source;

    public function setUp(): void 
    {
        $this->source = new Calculator();
    }

    // public function test_it_adds_2_numbers(): void
    // {
    //     $result = $this->source->add(1, 2);
    //     self::assertEquals((float) 3, $result);
    // }

    // public function testIsPositive(): void
    // {
    //     $result = $this->source->isNegative(3);
    //     self::assertFalse($result);
    // }

    // public function testIsNegative(): void
    // {
    //     $result = $this->source->isNegative(-2);
    //     self::assertTrue($result);
    // }

    // public function testZeroIsNegative(): void
    // {
    //     $result = $this->source->isNegative(0);
    //     self::assertFalse($result);
    // }
}