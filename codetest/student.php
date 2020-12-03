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
		
		<script type="text/javascript">
			function conf(){
				confirm("Are you sure that you want to delete?");
				return false;
			}
		</script>
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
			<p>Welcome <?php echo $_SESSION["username"]; ?> <a href="#">Logout</a></p>
			<h2>Student Data</h2>
			<p><a href="addnewstudent.php" class="menubutton">Add New Student</a></p>

			<?php 
                   $connect = mysqli_connect("localhost", "root", "", "codetest");
                   $result =  mysqli_query($connect, "SELECT * FROM student");
                   echo "<table border='1'>";
                   echo"<tr>";
                   while ($f = mysqli_fetch_field($result)) {
                   	echo "<td>" . $f->name ."</td>";
                   }
                   echo "<td>Edit</td> <td>Delete</td>";
                   echo "</tr>";
                   
                   while ($row = mysqli_fetch_array($result)) {
                   	echo "<tr>";
                    	echo "<td>" . $row["sno"] . "</td>";
                    	echo "<td>" . $row["nric"]. "</td>";
                    	echo "<td>" . $row["firstname"]. "</td>";
                    	echo "<td>" . $row["lastname"]. "</td>";
                    	echo "<td>" . $row["gender"]. "</td>";
                    	echo "<td>" . $row["dateofbirth"]. "</td>";
                    	echo "<td>" . $row["email"]. "</td>";
                    	$sno=$row["sno"];
                    	echo "<td> <a href='updatestudent.php?sno=$sno'>Edit</a></td>";
                    	echo "<td> <a href='delete.php?sno=$sno'>Delete</a></td>";
                    	echo "</tr>";

 	
 						}echo "</table>";

			?>

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