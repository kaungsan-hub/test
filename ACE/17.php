<?php
	$a = array("red", "green", "blue", "white", "yellow");
	for($i=0; $i<count($a); $i++){
		echo $a[$i] . "<br/>";
	}echo "<hr/>";

	foreach($a as $v){
		echo $v."<br/>";
	}echo "<hr/>";

	$colors=["r"=>"red", "g"=>"green", "b"=>"blue"];
	echo $colors["r"];
	foreach($colors as $c){
		echo $c."<br/>";}
		echo "<hr/>";

	foreach ($colors as $key => $value) {
		echo $key . $value . "<br/>";
		}	
?>