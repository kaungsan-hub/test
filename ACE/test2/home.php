<?php 
	session_start();
	if (isset($_SESSION["uname"]) == false){
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP SESSION</title>
	<?php include("style.inc.php") ?>
</head>
<body>
	<h1>HOME PAGE</h1>
	<?php include("menu.inc.php") ?>
</body>
</html>