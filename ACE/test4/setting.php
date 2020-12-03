<?php 
	session_start();
	if (isset($_SESSION["uname"]) == false){
		header("location: login.php");
	}
	if(isset($_GET["b"])){
		setcookie("color", $_GET["b"], time()+60*60*24*30);
		$_COOKIE["color"] = $_GET["b"];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP SESSION</title>
	<?php include("style.inc.php") ?>
</head>
<body>	
	<h1>Settings</h1>
<?php include("menu.inc.php") ?>
	<hr>
	<form action="">
		Background Color:
		<select name="b">
		<option value="red" <?php echo $_COOKIE["color"]=="red"?"selected ='selected'":"white" ?>>RED</option>
		<option value="green" <?php echo $_COOKIE["color"]=="green"?"selected ='selected'":"white" ?>>GREEN</option>
		<option value="blue" <?php echo $_COOKIE["color"]=="blue"?"selected ='selected'":"white" ?>>BLUE</option>
		</select>
		<input type="submit" value="Save">
	</form>
</body>
</html>