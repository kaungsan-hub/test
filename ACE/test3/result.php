<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
</head>
<body>
	<h1>Game</h1>
	<input type="hidden" name="name" value="<?=$_GET['name']?>">
	<input type="hidden" name="month" value="<?=$_GET['month']?>">
	<?php
		$name=$_GET["name"];
		$month=$_GET["month"];

		echo $month;
		
		$fname = substr($name, 0,1);
		if(strpos("abcdefABCDEF", $fname)!== false){
			echo " in club ";
		}
		if(strpos("ghijklGHIJKL", $fname)!== false){
			echo " in policestation ";
		}
		if(strpos("mnopqMNOPQ", $fname)!== false){
			echo " in toilet ";
		}
		if(strpos("rstuvRSTUV", $fname)!== false){
			echo " on the road ";
		}
		if(strpos("wxyzWXYZ", $fname)!== false){
			echo " in parliament ";
		}

	?>
</body>
</html>
