<?php 
	session_start();
	if (isset($_SESSION["username"]) == false){
		header("location: login.php");
	}
?>

<?php 
session_start();
session_destroy();
header("location: login.php")
?>