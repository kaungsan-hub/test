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

		$sno = $_GET["sno"];
     	$connect = mysqli_connect("localhost", "root", "", "codetest");
	    $result = mysqli_query($connect, "SELECT * FROM `student` WHERE `sno`='$sno'");
	    $row = mysqli_fetch_array($result);
	    $nric = $row["nric"];
	    $fname = $row["firstname"];
	    $lname = $row["lastname"];
	    $gender = $row["gender"];
	    $dob = $row["dateofbirth"];
	    $email = $row["email"];

		if(isset($_POST["nric"]) && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["gender"]) && isset($_POST["dob"]) && isset($_POST["email"])){

		$nric = $_POST["nric"];
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$gender = $_POST["gender"];
		$dob = $_POST["dob"];
		$email = $_POST["email"];

		$connect = mysqli_connect("localhost", "root", "", "codetest");
		$result = mysqli_query($connect, "UPDATE `student`
			SET `nric`='$nric',`firstname`='$fname',`lastname`='$lname',`gender`='$gender',`dateofbirth`='$dob',`email`='$email'
			WHERE `sno`='$sno'");
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
			<p>Welcome <?php echo $_SESSION["username"]; ?> <a href="logout.php">Logout</a></p>
			<h2>Update Student</h2>
			<form action="" method="post">
				<table>
					<tbody><tr>
						<td>ID:</td>
						<td><input type="text" readonly="readonly" name="sno" value="<?=$sno ?>" class="disabled"></td>
						<td></td>
					</tr>
					<tr>
						<td>NRIC/FIN:</td>
						<td><input type="text" name="nric" value="<?=$nric ?>" required="required" class="disabled"><span class="errmsg"></span></td>
						<td></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" required="required" value="<?=$fname ?>"><span class="errmsg"></span></td>
						<td></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" value="<?=$lname ?>"></td>
						<td></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td>
							<select name="gender">
								<option value="U"></option>
								<option value="M" <?=$gender=="M"?"selected='selected'": "" ?> >Male</option>
								<option value="F" <?=$gender=="F"?"selected='selected'": "" ?> >Female</option>
								<option value="U" <?=$gender=="U"?"selected='selected'": "" ?> >Unspecified</option>
							</select>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>Date of Birth:</td>
						<td><input type="date" name="dob" value="<?=$dob ?>"></td>
						<td></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" value="<?=$email ?>"></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit2" value="Save"><input type="reset" value="Clear"></td>
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