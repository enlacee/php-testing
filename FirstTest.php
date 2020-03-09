<?php

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{

	public function testAddition()
	{
		$this->assertSame(2, 1 + 1);
	}

	public function testSubtraction()
	{
		$this->assertEquals(0.17, (1- 0.83));
	}

	public function testMultiplication()
	{
		$this->assertEquals("10", 2 * 5);
	}

	public function testDivision()
	{
		$this->assertTrue(2 == (10 / 5));
	}

	public function testCadenaIsSame()
	{
		$this->assertEquals('hola', 'hola');

	}

    /**
     * @depends testAddition
     */
    public function testEmpty()
    {
        // $stack = [];
        // $this->assertEmpty($stack);

        // return $stack;
    }
}

// bash
// phpunit --verbose FirstTest