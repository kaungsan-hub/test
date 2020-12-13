<?php
	$a=array();

	array_push($a, "one");
	array_push($a, "tow");
	array_push($a, "three");
	array_push($a, "four");

	echo count($a)."<br>";
	print_r($a)."<br><br>";

	array_pop($a);
	array_shift($a);

	echo count($a)."<br>";
	print_r($a)."<br>";

?>