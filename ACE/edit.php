<!DOCTYPE html>
<html>
<head>
	<title>MySQL</title>
</head>
<body>
	<?php
		$msg = "";

		$sno = $_GET["sno"];
     	$connect = mysqli_connect("localhost", "root", "", "ACE");
	    $result = mysqli_query($connect, "SELECT * FROM `student` WHERE `sno`='$sno'");
	    $row = mysqli_fetch_array($result);
	    $sno = $row["sno"];
	    $sname = $row["sname"];
	    $age = $row["age"];
	    $gender = $row["gender"];
	    $mark = $row["mark"];

		if(isset($_POST["sno"]) && isset($_POST["sname"]) && isset($_POST["age"]) && isset($_POST["gender"]) && 
			isset($_POST["mark"])){

		$sno = $_POST["sno"];
		$sname = $_POST["sname"];
		$age = $_POST["age"];
		$gender = $_POST["gender"];
		$mark = $_POST["mark"];

		$connect = mysqli_connect("localhost", "root", "", "ACE");
		$result = mysqli_query($connect, "UPDATE `student`
			SET `sname`='$sname',`age`='$age',`gender`='$gender',`mark`='$mark'
			WHERE `sno`='$sno'");
		mysqli_close($connect);
		$msg= "Successful Update! <a href='select2.php'>OK</a>";

		}
	?>
	<h1>Edit Student</h1>
<form action="" method="POST"> 
	<table> 
		<tr> 
			<td>sno</td> 
			<td><input type="text" name="sno" id="sno" value="<?=$sno ?>" /></td> 
			<td></td> 
		</tr> 
		<tr> 
			<td>sname</td> 
			<td><input type="text" name="sname" id="sname" value="<?=$sname ?>" /></td> 
			<td></td> 
		</tr> 

		<tr> 
			<td>age</td> 
			<td><input type="text" name="age" id="age" value="<?=$age ?>"/></td> 
			<td></td> 
		</tr> 

		<tr> <td>gender</td> <td> 
			<select name="gender"> 
				<option value="M" <?=$gender=="M"?"selected='selected'": "" ?> >Male</option> 
				<option value="F" <?=$gender=="F"?"selected='selected'": "" ?> >Female</option> 
			</select> </td> <td></td> 
		</tr>

	<tr> <td>mark</td> <td><input type="text" name="mark" id="mark" value="<?=$mark ?>"/></td> <td></td> </tr> 

		<tr> <td colspan="3"><input type="submit" value="Update" /></td> </tr> 

	</table> 
	<?php echo $msg; ?>
</form> 
</body>
</html>