<?php 
$connect = mysqli_connect("localhost", "root", "", "ACE");
$result =  mysqli_query($connect, "SELECT * FROM student");
echo "<table border='1'>";
echo"<tr>";
while ($f = mysqli_fetch_field($result)) {
	echo "<td>" . $f->name ."</td>";
}
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
 	echo "<td>" . $row["sno"] . "</td>";
 	echo "<td>" . $row["sname"]. "</td>";
 	echo "<td>" . $row["age"]. "</td>";
 	echo "<td>" . $row["gender"]. "</td>";
 	echo "<td>" . $row["mark"]. "</td>";

 	echo "</tr>";

 	
 }echo "</table>";

?>