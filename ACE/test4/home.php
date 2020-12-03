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
	<style type="text/css">
			.box{
				border: 1px solid #000000;
				padding: 14px;
			}
			
			.s{
				font-size: 10px;
				color: #666666;
			}
	</style>
</head>
<body>
	<h1>HOME PAGE</h1>
	<?php include("menu.inc.php") ?>
	<hr>
	<?php
		if( isset($_POST["status"]) ){
				$post = $_POST["status"];
				$con = mysqli_connect("localhost", "root", "", "ACE");
				$result = mysqli_query($con, "INSERT INTO `post` (`post`, `created_at`) VALUES('$post', now())");
				mysqli_close($con);
			}
	?>
	<div>
		<form action="" method="post">
				<input type="text" name="status" style="width: 400px;" 
				placeholder="What's on your mind, <?=$_SESSION["uname"] ?>?" />
				<input type="submit" value="Post" />
			</form>
	</div>
	<div style="padding: 12px;">
			<?php
				$con = mysqli_connect("localhost", "root", "", "ACE");
				$result = mysqli_query($con, "SELECT * FROM `post` ORDER BY `created_at` DESC");
				while( $row = mysqli_fetch_row($result) ){
					echo "<div class='box'>";
					echo "	<div class='s'>" . $row[2] . "</div>";
					echo "	<div>" . $row[1] . "</div>";
					echo "</div>";
				}
				mysqli_close($con);
			?>
		</div>
	</div>
</body>
</html>