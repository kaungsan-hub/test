<?php
function get_inital($name){
	$i=substr($name, 0,1);
	$d=-1;
	do{
		$d=strpos($name, " ", $d+1);
		if($d != false)
			$i .=substr($name, $d+1, 1);
	}while ($d != false);
	return strtoupper($i);
}

$i = get_inital("kaung san");
echo $i;

//$name = $_GET["name"];
?>