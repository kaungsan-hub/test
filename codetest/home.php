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
	</head>
	<body>
		<nav id="main-nav">
			<ul id="main-menu" class="sm sm-blue">
				<li><a href="#">Home</a></li>
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
			<h2>Home</h2>
			<p>asdf asdf asdf asdf 
			asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf 
			asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf 
			asdf asdf 
			</p>
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