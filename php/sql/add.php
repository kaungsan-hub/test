<!DOCTYPE html>
<html>
<head>
	<title>ksweb</title>
</head>
<body>
	<?php
		if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["password"])){
			$name=$_POST["name"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$password=md5($password);

			$connect =mysqli_connect("localhost","root","","php");
			$qry="SELECT * FROM human WHERE email='$email'";
			$ret=mysqli_query($connect, $qry);
			if (mysqli_num_rows($ret)>0) {
				echo "Email is already exist. Try again.";
			}else{
			$result=mysqli_query($connect, "INSERT INTO `human` (`name`,`email`,`password`)VALUES('$name','$email','$password')");
		}
				mysqli_close($connect);
		}
	?>
	<form action="add.php" method="POST" >
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" id="name"></td>
				<td><span id="errname"></span></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email"></td>
				<td><span id="erremail"></span></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password"></td>
				<td><span id="errpass"></span></td>
			</tr>
			<tr> <td><input type="submit" value="OK" /></td> </tr>
		</table>
	</form>
</body>
</html>