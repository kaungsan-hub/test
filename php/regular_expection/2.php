<?php
$var= "kaungsan@gmail.com";
//$ans= preg_match("/[0-9]/",$var);
//$ans= preg_match("/[A-Z]|[a-z]/",$var);
//$ans= preg_match("/y+/",$var);
$ans=preg_match("/[a-z]+@[a-z]+\.[a-z]{3}$/", $var);

echo $ans ? "Exist" : "Not exist";
?>