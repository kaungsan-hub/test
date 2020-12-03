<?php

class MyClass{
	public $data = "hello";

	function test(){
		echo " This is  test() method";
	}
}
$obj = new MyClass();
echo $obj->data;
$obj-> test();

$obj->data="New Value";
echo $obj->data;