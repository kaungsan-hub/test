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
			<p>Welcome <?php echo $_SESSION["username"]; ?> <a href="logout.php">Logout</a></p>

		<?php
		$msg = "";
		if(isset($_POST["uname"]) && isset($_POST["password"]) && isset($_POST["role"]) && isset($_POST["email"])){

		$uname = $_POST["uname"];
		$password = $_POST["password"];
		$role = $_POST["role"];
		$email = $_POST["email"];

		$connect = mysqli_connect("localhost", "root", "", "codetest");
		$result = mysqli_query($connect, "INSERT INTO `user`(`username`,`email`,`password`,`role`,`create_date`,`change_date`,`active`)
			VALUES ( '$uname', '$email', '$password', '$role', now(), now(), '1')");
		mysqli_close($connect);
		$msg= "Successful saved!";

		}
	?>

			<h2>Add Admin Account</h2>
			<form action="" method="post">
				<table>
					<tbody><tr>
						<td>ID:</td>
						<td><input type="text" disabled="disabled" name="id" value="New ID"></td>
						<td></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" required="required"><span class="errmsg"></span></td>
						<td></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" required="required"><span class="errmsg"></span></td>
						<td></td>
					</tr>
					<tr>
						<td>Role:</td>
						<td>
							<select name="role">
								<option value="admin">Admin</option>
							</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Save"><input type="reset" value="Clear"></td>
						<td></td>
					</tr>

				</tbody></table>
				<?php echo $msg; ?>
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