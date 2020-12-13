<?php
	$f = "test.json";
	$h = fopen($f, "r");
	$json = fread($h, filesize($f));
	//echo $json;
	$a=json_decode($json);

	foreach ($a as $key => $value) {
		foreach ($value as $k => $v) {
			//echo "Key is ".$key. " Value is ".$v."<br>";
			echo "Key is ".$k. " Value is ".$v."<br>";
		}
	}

?>