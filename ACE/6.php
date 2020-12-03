<?php
function display(){
	echo "Hello! <br/>";
}
function show_hr($n, $c="green"){
	for ($i=1; $i<=$n; $i++)
echo "<hr color='$c'/>";
}
function show_letter(){
	$n=1;
	$c="*";
	if(func_num_args()>0) $n=func_get_arg(0);
	if(func_num_args()>1) $c=func_get_arg(1);
	for($i=1; $i<=$n; $i++)
		echo $c;
}
function myfunc(){
	return 100;
}
function sum($a, $b){
	$c =$a + $b;
	return $c;
}
	display();
	show_hr(4);
	show_hr(5, "blue");
	show_hr(3, "red");
	show_letter();
	show_letter(10, "#");
	show_letter(5, "?");
	$x=myfunc();
	echo $x . "<br/>";
	$x=sum(10, 20);
	echo $x. "<br/>";
?>

