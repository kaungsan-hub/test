<!DOCTYPE html>
<html>
<head>
	<title>MySQL</title>

	<script type="text/javascript">
		function validate(){
			var v = true;
			$("err_sno").innerHTML="";
			$("err_sname").innerHTML="";
			$("err_age").innerHTML="";
			$("err_mark").innerHTML="";

			if ($("sno").value==""){
				$("err_sno").innerHTML="sno is required";
				v=false;
			}else if (isNaN($("sno").value)==true){
				$("err_sno").innerHTML="sno must be a number";
				v= false;
			}

			if ($("sname").value==""){
				$("err_sname").innerHTML="sname is required";
				v=false;
			}

			if ($("age").value==""){
				$("err_age").innerHTML="age is required";
				v=false;
			}else if (isNaN($("age").value)==true){
				$("err_age").innerHTML="age must be a number";
				v= false;
			}else if($("age").value<5 || $("age").value>80){
				$("err_age").innerHTML="age must be between 5 and 80";
				v= false;
			}

			if ($("mark").value==""){
				$("err_mark").innerHTML="mark is required";
				v=false;
			}else if (isNaN($("mark").value)==true){
				$("err_mark").innerHTML="mark must be a number";
				v= false;
			}else if($("mark").value<0 || $("mark").value>100){
				$("err_mark").innerHTML="mark must be between 0 and 100";
				v= false;
			}

			return v;
		}
		function $(id){
			return document.getElementById(id);
		}

	</script>

<style type="text/css">
	span{
		color: red;
	}
</style>

</head>
<body>
	<?php
		$msg = "";
		if(isset($_POST["sno"]) && isset($_POST["sname"]) && isset($_POST["age"]) && isset($_POST["gender"]) && 
			isset($_POST["mark"])){

		$sno = $_POST["sno"];
		$sname = $_POST["sname"];
		$age = $_POST["age"];
		$gender = $_POST["gender"];
		$mark = $_POST["mark"];

		$connect = mysqli_connect("localhost", "root", "", "ACE");
		$result = mysqli_query($connect, "INSERT INTO `student`(`sno`,`sname`,`age`,`gender`,`mark`)
			VALUES ( '$sno', '$sname', '$age', '$gender', '$mark')");
		mysqli_close($connect);
		$msg= "Successful saved! <a href='select2.php'>OK</a>";

		}
	?>
	<h1>Add New Student</h1>
<form action="" method="POST" onsubmit="return validate();"> 
	<table> 
		<tr> 
			<td>sno</td> 
			<td><input type="text" name="sno" id="sno" /></td> 
			<td><span id="err_sno"></span></td> 
		</tr> 
		<tr> 
			<td>sname</td> 
			<td><input type="text" name="sname" id="sname" maxlength="50" /></td> 
			<td><span id="err_sname"></span></td> 
		</tr> 

		<tr> 
			<td>age</td> 
			<td><input type="text" name="age" id="age" /></td> 
			<td><span id="err_age"></span></td> 
		</tr> 

		<tr> <td>gender</td> <td> 
			<select name="gender"> 
				<option value="M">Male</option> 
				<option value="F">Female</option> 
			</select> </td> <td></td> 
		</tr>

		<tr> 
			<td>mark</td> 
			<td><input type="text" name="mark" id="mark" /></td> 
			<td><span id="err_mark"></span></td> 
		</tr> 

		<tr> <td colspan="3"><input type="submit" value="Save" /></td> </tr> 

	</table> 
	<?php echo $msg; ?>
</form> 
</body>
</html>