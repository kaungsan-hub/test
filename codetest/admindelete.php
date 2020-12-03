<?php 
	session_start();
	if (isset($_SESSION["username"]) == false){
		header("location: login.php");
	}
?>

<?php
	$uno = $_GET["uno"];
	$connect = mysqli_connect("localhost", "root", "", "codetest");
	$result = mysqli_query($connect, "DELETE FROM `user` WHERE `uno`='$uno'");

	
	mysqli_close($connect);
	echo "Successfully Delet!<a href ='home.php'>OK</a>";
?>