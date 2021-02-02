<?php
// $ary=[
//     ["one"=>1, "two"=>2, "three"=>3],
//     ["one"=>1, "two"=>2, "three"=>3],
//     ["one"=>1, "two"=>2, "three"=>
//     ["one"=>1, "two"=>2, "three"=>3],
//     ["one"=>1, "two"=>2, "three"=>3],
//     ["one"=>1, "two"=>2, "three"=>3]
//     ]
// ];
// $encode=json_encode($ary);
// echo $encode;

$f="json_array.json";
$handler=fopen($f,"r");
$json=fread($handler,filesize($f));
$ary=json_decode($json,true);
// print_r($ary);

foreach($ary as $value){
   foreach($value as $key => $val){
       if(!is_array($val)){
        echo $key."___".$val."<br>";}
        else {foreach($val as $k => $d){
        echo $k."___".$d."<br>";
       }
   }
}
echo "<hr>";
}
?>