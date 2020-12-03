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
		
		<div id="content">
			<h1>ACE Inspiration PHP10 Code Test</h1>
			<p>Please contact your administrator</p>
		</div>

		<?php 
             $connect = mysqli_connect("localhost", "root", "", "codetest");
             $result =  mysqli_query($connect, "SELECT * FROM user");
             echo "<table border='1'>";
echo"<tr>";
while ($f = mysqli_fetch_field($result)) {
	echo "<td>" . $f->name ."</td>";
}
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
 	echo "</tr>";

 	
 }echo "</table>";
             ?>

		<script type="text/javascript" src="./javascript/jquery/jquery.js"></script>
		<script type="text/javascript" src="./javascript/jquery.smartmenus.js"></script>
	</body>
</html>