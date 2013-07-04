<?php

class MyName
{
	private $propertyPrivate = 6;

	protected $propertyProtected = 5;

	public $propertyPublic = 4;



	private function methodPrivate()
	{
		return 3;
	}



	protected function methodProtected()
	{
		return 2;
	}



	public function methodPublic()
	{
		return 1;
	}
}
