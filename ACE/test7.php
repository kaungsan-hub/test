<?php

require("test4.php");

use Four\Test;

$obj=new Test();
$obj->data=123;
echo $obj->data;
