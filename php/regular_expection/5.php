<?php
	$str="KS.";
	$ans=preg_match("/[^a-z]+\.[a-z]*/", $str);
	echo $ans ? "True" : "False";

?>