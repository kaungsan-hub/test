<!DOCTYPE html>
<html>
<head>
	<title>MySQL</title>
	<style type="text/css">
		.sm{
			width: 40px;
			height: 40px;
			border-radius: 5px;
		}
		.btn{
			display: block;
			background-color: #cccccc;
			border: solid 1px #000000;
			padding: 4px;
			text-decoration: none;
			border-radius: 12px;
			color: black;
		}
		.btn:hover{
				background-color: #efefef;
				border: solid 1px #666666;
		}
	</style>

	<script type="text/javascript">
		function del(sno){
			var c = confirm("Are U sure that U want to delete sno " + sno);
			if( c ){
				window.location.href="delete.php?sno="+sno;
			}
		}

	</script>
</head>
<body>
	<h1>Table</h1>

	<?php 
$connect = mysqli_connect("localhost", "root", "", "ACE");
$result =  mysqli_query($connect, "SELECT * FROM student");
echo "<table border='1'>";
echo"<tr>";
while ($f = mysqli_fetch_field($result)) {
	echo "<td>" . $f->name ."</td>";
}
echo "<td>Photo</td> <td>Edit</td> <td>Delete</td>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
 	echo "<td>" . $row["sno"] . "</td>";
 	echo "<td>" . $row["sname"]. "</td>";
 	echo "<td>" . $row["age"]. "</td>";
 	echo "<td>" . $row["gender"]. "</td>";
 	echo "<td>" . $row["mark"]. "</td>";
 	$sno=$row["sno"];
 	echo "<td><a href='uploadphoto.php?sno=$sno'><img src='./photo/$sno.jpg' alt='photo' class='sm'></a></td>";
 	
 	echo "<td> <a href='edit.php?sno=$sno' class='btn'>Edit</a></td>";
 	echo "<td> <a href='#' class='btn' onclick='del($sno)'>Delete</a></td>";
 	echo "</tr>";

 	
 }echo "</table>";

?><hr>

<a href="insert.php">Add New Student</a>

</body>
</html>