<?php

class FooTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		
	}

	public function tearDown()
	{

	}

	public function testFoo()
	{
		$foo = false;
		$this->assertFalse($foo);
	} 
}
