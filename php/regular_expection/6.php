<?php
$str="I will be study php at least 1:00 hr in everyday. But some day will be about 45:00 min.";
$ans=preg_match_all("/(\d+:+\d+)\s*(hr|min)/",$str,$matches,PREG_SET_ORDER);
echo "<pre>".print_r($matches,true)."</pre>";

echo "<hr>";

$ans=preg_match_all("/(\d+:+\d+)\s*(hr|min)/",$str,$matches,PREG_PATTERN_ORDER);
echo "<pre>".print_r($matches,true)."</pre>";
?>