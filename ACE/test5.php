<?php

require("test4.php");
require("test6.php");

$obj=new Four\Test();
$obj->data=123;
echo $obj->data;

Six\Test::$data = 456;
echo Six\Test::$data;

