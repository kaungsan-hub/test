<?php
 
 $connect = mysqli_connect("localhost", "root", "", "ACE");
 $result = mysqli_query ($connect,"SELECT * FROM student");

 while ($row = mysqli_fetch_array($result)) {
 	echo $row[0];
 	echo $row[1];
 	echo $row[2];
 	echo $row[3];
 	echo $row[4];
 }

?>