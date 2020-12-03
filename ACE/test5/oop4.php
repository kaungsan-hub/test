<?php

class MyClass{
	public static $data = "hello";

	public static function test(){
		echo "This is test method()<br>";

	}
}

//	MyClass::$data="new value";
	echo MyClass::$data."<br>";
	MyClass::test();