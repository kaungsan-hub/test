<?php 
	session_start();
	if (isset($_SESSION["username"]) == false){
		header("location: login.php");
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
			<?php
				if(isset($_POST["old"]) && isset($_POST["new"]) && isset($_POST["conf"])){
				$old=$_POST["old"];
				$new=$_POST["new"];
				$conf=$_POST["conf"];
				$connect = mysqli_connect("localhost", "root", "", "codetest");
				$username=$_SESSION["username"];
				$result =  mysqli_query($connect, "SELECT * FROM user where `username`='$username'");
				$chg=mysqli_fetch_array($result);
				$data=$chg['password'];
				if($data==$old){
				if($new==$conf){
				$update_pwd=mysqli_query($connect, "UPDATE user SET password='$new' where `username`='$username'");
				$change_pwd_error="Update Sucessfully !!!";
				}
				else{
				$change_pwd_error="Your new and Retype Password is not match !!!";
				}
				}
				else
				{
				$change_pwd_error="Your old password is wrong !!!";
				}				
				}
				?>


		<nav id="main-nav">
			<ul id="main-menu" class="sm sm-blue">
				<li><a href="home.php">Home</a></li>
				<li>
					<a href="#">Data</a>
					<ul>
						<li><a href="student.php">Student</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Settings</a>
					<ul>
						<li><a href="accounts.php">Admin Accounts</a></li>
						<li><a href="changepassword.php">Change Password</a></li>
						<li><a href="systemlog.php">System Log</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
				<li><a href="help.php">Help</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
		</nav>
		<div id="content">
			<h1>ACE Inspiration PHP10 Code Test</h1>
			<p>Welcome <?php echo $_SESSION["username"]; ?> <a href="#">Logout</a></p>
			<h2>Change Password</h2>
			<form action="" method="post">
					<table>
						<tr>
							<td>Old Password:</td>
							<td><input type="password" name="old" value="" /></td>
							<td></td>
						</tr>
						<tr>
							<td>New Password:</td>
							<td><input type="password" name="new" value=""  /></td>
							<td></td>
						</tr>
						<tr>
							<td>Confirm Password:</td>
							<td><input type="password" name="conf" value=""  /></td>
							<td></td>
						</tr>

						<tr>
							<td><input type="submit" name="submitcp" value="Change Password" /></td>
						</tr>
					</table>
					<?php echo $change_pwd_error; ?>
				</form>
		</div>
		<script type="text/javascript" src="./javascript/jquery/jquery.js"></script>
		<script type="text/javascript" src="./javascript/jquery.smartmenus.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#main-menu').smartmenus({
					subMenusSubOffsetX: 1,
					subMenusSubOffsetY: -8
				});
			});
		</script>
	</body>
</html>