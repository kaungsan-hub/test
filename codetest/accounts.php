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
			<h2>Admin Accounts</h2>
			<p><a href="addadminaccount.php" class="menubutton">Add New Account</a></p>
			<?php 
                   $connect = mysqli_connect("localhost", "root", "", "codetest");
                   $result =  mysqli_query($connect, "SELECT * FROM user");
                   echo "<table border='1'>";
                   echo"<tr>";
                   while ($f = mysqli_fetch_field($result)) {
                   	echo "<td>" . $f->name ."</td>";
                   }
                   echo "<td>Edit</td> <td>Delete</td>";
                   echo "</tr>";
                   
                   while ($row = mysqli_fetch_array($result)) {
                   	echo "<tr>";
                    	echo "<td>" . $row["uno"] . "</td>";
                    	echo "<td>" . $row["username"]. "</td>";
                    	echo "<td>" . $row["email"]. "</td>";
                    	echo "<td>" . $row["password"]. "</td>";
                    	echo "<td>" . $row["role"]. "</td>";
                    	echo "<td>" . $row["create_date"]. "</td>";
                    	echo "<td>" . $row["change_date"]. "</td>";
                    	echo "<td>" . $row["active"]. "</td>";
                    	$uno=$row["uno"];
                    	echo "<td> <a href='updateadminaccount.php?uno=$uno'>Edit</a></td>";
                    	echo "<td> <a href='admindelete.php?uno=$uno'>Delete</a></td>";
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