<?php 
	session_start();
	if (isset($_SESSION["username"]) == false){
		header("location: login.php");
	}
?>

<?php
	$sno = $_GET["sno"];
	$connect = mysqli_connect("localhost", "root", "", "codetest");
	$result = mysqli_query($connect, "DELETE FROM `student` WHERE `sno`='$sno'");

	
	mysqli_close($connect);
	echo "Successfully Delet!<a href ='home.php'>OK</a>";
?>