<?php 
$str = "Programming";
$x = strlen($str);
echo $x;

echo "<br/>";
$x = strtoupper($str);
echo $x;

echo "<br/>";
$x = strtolower($str);
echo "($x)";

echo "<br/>";
$x = trim($str);//disable space
echo $x;

echo "<br/>";
$x = strrev($str);	//change word
echo "($x)";

echo "<br/>";
$x = strpos($str, "g");	//find word
echo $x;

echo "<br/>";
$lastIndex = strlen($str)-3;
$x = substr($str, $lastIndex,3); //cut the strings
echo $x;

echo "<br/>";
$x = str_replace("r", "?", $str);
echo "($x)";

define("TEST", "This is testing");  // like variable but can't change value / constant value
echo TEST;
?>
