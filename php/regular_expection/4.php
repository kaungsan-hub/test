<?php
	$var="Hello, Da Jia Hao, Wo Jiao Shui Ge!";
	$ary=preg_split("/[\s]/", $var,null);

	echo "<pre>" .print_r($ary,true). "</pre>";

?>