<?php
$var= "Brighter Myanmar";
// $ans= preg_match("/mar/",$var);
// $ans= preg_match("/^Bri/",$var);
$ans= preg_match("/mar$/",$var);

echo $ans ? "Exist" : "Not exist";
?>