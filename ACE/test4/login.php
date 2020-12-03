<?php 
    session_start();
	$uname = isset($_POST["uname"])?$_POST["uname"]:"";
	$pass = isset($_POST["pass"])?$_POST["pass"]:"";
	$msg ="";
	if(isset($_POST["uname"]) && isset($_POST["pass"])){
	if( checkuser($uname, $pass) ){
			$_SESSION["uname"] =$uname;

			setcookie("PHPSESSID", session_id(), time()+60*60*24);  
			setcookie("test", "value", time()+86400);

			header("location: home.php");
	}else{
			$msg="Invalid Username and/or Password";	
	}}

	function checkuser($uname,$pass){
	$connect = mysqli_connect("localhost", "root", "","ACE");
	$uname=mysqli_real_escape_string($connect, $uname);
	$pass=mysqli_real_escape_string($connect, $pass);
	//$pass=mg5($pass);
	
	$result = mysqli_query($connect, "SELECT * FROM `user` WHERE `username`='$uname' AND `password`='$pass'");
	$row = mysqli_fetch_array($result);
	if($row){
		return true;
	}return false;

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP SESSION</title>
	<style type="text/css"> 
		.err  {color:red;} 
	</style>
</head>
<body>	
	<h1>Login</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<td><label for="uname"><b>User name:</b></label></td>
				<td><input type="text" name="uname" id="uname" value="<?=$uname ?>"></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Password:</b></label></td>
				<td><input type="password" name="pass" id="pass"></td>
			</tr>
			<tr>
				<td colspan="2" class="err"><?=$msg ?></td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="Login"></td>
				<td></td>
			</tr>
		</table>
	</form>

</body>
</html>

