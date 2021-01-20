<?php
// positive look ahead
$var= "ABCDEF";
$ans= preg_match('/A(?=[a-z]|[A-Z])/',$var);
echo $ans ? "true" : "false";
echo "<hr>";

// positive look behind
$ans= preg_match("/(?<=\w)E/", $var);
echo $ans ? "true" : "false";
echo "<hr>";

//negative look ahead
$ans= preg_match("/E(?!F)/", $var);
echo $ans ? "true" : "false";
echo "<hr>";

//negative look behind
$ans= preg_match('/(?<!B)C/',$var);
echo $ans ? "true" : "false";
echo "<hr>";

$str="SOME&5619&strong&&password";
$result=preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*([^\w]))/", $str);
echo $result ? "next page" : "back page";

?>