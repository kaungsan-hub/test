<?php

require("test4.php");
require("test6.php");

use Four\Test as abc;
use Six\Test as TestSix;
use Six\AnotherTest as newtest;

$obj=new abc();
$obj->data=123;
echo $obj->data;

TestSix::$data=456;
echo TestSix::$data;

$obj=new newtest;
$obj->data=789;
echo $obj->data;

