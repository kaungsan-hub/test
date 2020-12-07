<?php
	session_start();
	if(isset($_SESSION['name'])==false){
		header("Location:index.php");
	}

	include "links.php";

?>
<h2><i>Product page.</i></h2>