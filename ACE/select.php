<!DOCTYPE html>
<html>
<head>
	<title>MySQL</title>
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
echo "<td>Edit</td> <td>Delete</td>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
 	echo "<td>" . $row["sno"] . "</td>";
 	echo "<td>" . $row["sname"]. "</td>";
 	echo "<td>" . $row["age"]. "</td>";
 	echo "<td>" . $row["gender"]. "</td>";
 	echo "<td>" . $row["mark"]. "</td>";
 	$sno=$row["sno"];
 	echo "<td> <a href='edit.php?sno=$sno'>Edit</a></td>";
 	echo "<td> <a href='delete.php?sno=$sno'>Delete</a></td>";
 	echo "</tr>";

 	
 }echo "</table>";

?>

<hr>

<a href="insert.php">Add New Student</a>

</body>
</html>