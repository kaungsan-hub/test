<!DOCTYPE html>
<html>
<head>
	<title>KS web</title>
</head>

<?php
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$connect=mysqli_connect("localhost","root","","php");
		$query="SELECT * FROM `human` WHERE `id`='$id'";
		$conf=mysqli_query($connect, $query);
		if(mysqli_num_rows($conf)>0){
			$result="DELETE FROM `human` WHERE `id`='$id'";
			mysqli_query($connect, $result);
			echo mysqli_num_rows($conf);
		}else{
		echo "ID is not correct.";
		echo mysqli_num_rows($conf);
	}}
?>

<body>
	<form action="" method="POST">
	<label><b>Enter ID :  </b></label>
	<input type="number" name="id"><br>
	<button type="submit" name="submit">OK</button>
</form>
</body>
</html>