<?php

require_once __DIR__ . "/bootstrap.php";
require_once __DIR__ . "/../src/MyName.php";

use Tester\Assert;



class MyNameTest extends Tester\TestCase
{
	private $object;



	public function setUp()
	{
		$this->object = new MyName();
	}



	public function testPublicProperty()
	{
		Assert::same(4, $this->object->propertyPublic);
	}



	public function testProtectedProperty()
	{
		Tester\Helpers::with($this->object, function() {
			Assert::same(5, $this->propertyProtected);
		});
	}



	public function testPrivateProperty()
	{
		Tester\Helpers::with($this->object, function() {
			Assert::same(6, $this->propertyPrivate);
		});
	}



	public function testPublicMethod()
	{
		Assert::same(1, $this->object->methodPublic());
	}



	public function testProtectedMethod()
	{
		Tester\Helpers::with($this->object, function() {
			Assert::same(2, $this->methodProtected());
		});
	}



	public function testPrivateMethod()
	{
		Tester\Helpers::with($this->object, function() {
			Assert::same(3, $this->methodPrivate());
		});
	}
}



$test = new MyNameTest();
$test->run();
