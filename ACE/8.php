<?php
function get_vowels($name){
$v="";
for($i=0; $i<strlen($name); $i++){
	if(strpos("aeiouAEIOU", substr($name, $i, 1))!==false)
 	{
	$v .= substr($name, $i, 1);
	}
}
return $v;
}
$name = $_GET["name"];
$i=get_vowels($name);
echo $i;
?>