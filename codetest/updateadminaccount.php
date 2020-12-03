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
		$msg = "";

		$uno = $_GET["uno"];
     	$connect = mysqli_connect("localhost", "root", "", "codetest");
	    $result = mysqli_query($connect, "SELECT * FROM `user` WHERE `uno`='$uno'");
	    $row = mysqli_fetch_array($result);
	    $uname = $row["username"];
	    $password = $row["password"];
	    $role = $row["role"];
	    $email = $row["email"];
	    $active = $row["active"];

		if(isset($_POST["uname"]) && isset($_POST["password"]) && isset($_POST["role"]) && isset($_POST["email"]) && isset($_POST["active"])){

		$uname = $_POST["uname"];
		$password = $_POST["password"];
		$role = $_POST["role"];
		$email = $_POST["email"];
		$active = $_POST["active"];

		$connect = mysqli_connect("localhost", "root", "", "codetest");
		$result = mysqli_query($connect, "UPDATE `user`
			SET `username`='$uname',`password`='$password',`role`='$role',`email`='$email',`active`='$active' 
			WHERE `uno`='$uno'");
		mysqli_close($connect);
		$msg= "Successful Update! ";

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
			<h2>Add Admin Account</h2>
			<form action="" method="post">
				<table>
					<tr>
						<td>ID:</td>
						<td><input type="text" readonly="readonly" name="uno" value="<?=$uno ?>" title="You cannot edit ID" class="disabled" /></td>
						<td></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="uname" value="<?=$uname ?>" required="required" title="You cannot edit Username" class="disabled" /></td>
						<td></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>
							<input type="password" name="password" value="<?=$password ?>" onchange="changeflag()" />
							<input type="hidden" id="changed" name="changed" value="0" />
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Role:</td>
						<td>
							<select name="role">
								<option value="admin" selected="selected">Admin</option>
							</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" value="<?=$email ?>" /></td>
						<td></td>
					</tr>
					<tr>
						<td>Active Status:</td>
						<td>
							<select name="active">
								<option value="1" selected='selected'>Enabled</option>
								<option value="0" >Disabled</option>
							</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit2" value="Save" /><input type="reset" value="Clear" /></td>
						<td></td>
					</tr>

				</table>
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