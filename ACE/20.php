<?php 
$connect = mysqli_connect("localhost", "root", "", "ACE");
$result =  mysqli_query($connect, "SELECT * FROM student");
while ($f = mysqli_fetch_field($result)) {
	echo $f->name ."<br>";
}

while ($row = mysqli_fetch_array($result)) {
 	echo $row["sno"];
 	echo $row["sname"];
 	echo $row["age"];
 	echo $row["gender"];
 	echo $row["mark"];
 }

?>