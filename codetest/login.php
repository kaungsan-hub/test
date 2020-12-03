<?php 
    session_start();
	$username = isset($_POST["username"])?$_POST["username"]:"";
	$password = isset($_POST["password"])?$_POST["password"]:"";
	$msg ="";
	if(isset($_POST["username"]) && isset($_POST["password"])){
	if( checkuser($username, $password) ){
			$_SESSION["username"] =$username;
			header("location: home.php");
			setcookie("PHPSESSID", session_id(), time()+86400);  


	}else{
			$msg="Invalid Username and/or Password";	
	}}

	function checkuser($username,$password){
	$connect = mysqli_connect("localhost", "root", "","codetest");
	$username=mysqli_real_escape_string($connect, $username);
	$password=mysqli_real_escape_string($connect, $password);

	
	$result = mysqli_query($connect, "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");
	$row = mysqli_fetch_array($result);
	if($row){
		return true;
	}return false;

	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ACE Inspiration PHP10 Code Test</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="./css/sm-core-css.css" rel="stylesheet" type="text/css" />
		<link href="./css/sm-blue.css" rel="stylesheet" type="text/css" />
		<link href="./css/demo.css" rel="stylesheet" type="text/css" />
		<link href="./css/main.css" rel="stylesheet" type="text/css" />

	</head>
	<body>
		<div id="content">
			<h1>ACE Inspiration PHP10 Code Test</h1>
			<form action="" method="post" >
				<table>
					<th>
						<td colspan="3">Admin Login</td>
					</th>
					<tr>
						<td>User name: </td>
						<td><input type="text" name="username" maxlength="50" /></td>
						<td></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" maxlength="50" /></td>
						<td></td>
					</tr>
					<tr>
						<td><input type="hidden" name="csrftoken" value="b9465d1a2c370ded1783ed646640d9bf" /></td>
						<td></td>
						<td></td>
					</tr>				
					<tr>
						<td colspan="3"><span class="errmsg" id="errmsg"></span></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" value="Login" /></td>
					</tr>
					<tr>
						<td colspan="3"><a href="forgetpassword.php">Forget passwod?</a></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>