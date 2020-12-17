<?php
	session_start();

	if(isset($_POST['submit'])){
		$u=$_POST['name'];
		$p=$_POST['pass'];

		if($u=="kaungsan" && $p=="12345"){
			$_SESSION['name']=$u;
			header("Location:product.php");
		}else{echo "Something wrong!!<br>";}
	}

	include "links.php";
?>

<form action="" method="POST">
	<input type="text" name="name" placeholder="Enter name"><br><br>
	<input type="password" name="pass" placeholder="Enter password"><br><br>

	<button type="submit" name="submit">Login</button><br><br>
</form>
