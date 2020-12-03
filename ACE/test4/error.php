<?php 
function meh($errno, $errormsg){
	echo "$errno - $errormsg <br>";
}
set_error_handler("meh");

$a = "hello";
echo $a;

$b = 1/0;
echo $b;

?>