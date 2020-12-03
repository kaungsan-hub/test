<?php
	error_reporting(0);

	$connect = mysqli_connect("localhost", "ks", "123","ACE");
	if($connect){
	$result = mysqli_query($connect, "SELECT * FROM `user`");
	$row = mysqli_fetch_array($result);
	var_dump($row);
	mysqli_close($connect);
	}else{
		echo "Something went wrong!! Error :  " .mysqli_connect_error();
	}


	?>