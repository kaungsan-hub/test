<?php

 $pone=0;
 $ptwo=0;
 $s=0;

 for ($i=0; $i < 100; $i++) { 
 	$p1=rand(0,6);
 	$p2=rand(0,6);
 	
 	 if($p1>$p2){
 	$pone++;
 }elseif ($p1==$p2) {
 	$s++;
 }else{
 	$ptwo++;
 }
 }
 echo "Player 1 win ".$p1." times<br>";
 echo "Player 2 win ".$p2." times<br>";
 echo "Same ".$s." times<br>";  
?>