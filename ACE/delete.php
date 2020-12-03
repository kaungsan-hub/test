<?php
	$sno = $_GET["sno"];
	$connect = mysqli_connect("localhost", "root", "", "ACE");
	$result = mysqli_query($connect, "DELETE FROM `student` WHERE `sno`='$sno'");

	if	(file_exists("./photo/$sno.jpg")==true)	{
	unlink("./photo/$sno.jpg");
	}
	
	mysqli_close($connect);
	echo "Successfully Delet!<a href ='select2.php'>OK</a>";
?>