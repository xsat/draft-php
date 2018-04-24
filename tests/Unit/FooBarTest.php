<?php

namespace Test\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class FooBarTest
 *
 * @package Test\Unit
 */
class FooBarTest extends TestCase
{
    public function testFoo(): void
    {
        $this->assertTrue(true);
    }

    public function testBar(): void
    {
        $this->assertFalse(false);
    }
}
