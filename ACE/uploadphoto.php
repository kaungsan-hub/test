<?php 
	$sno=$_GET["sno"];
	if(isset($_POST["submit"])){
		move_uploaded_file($_FILES["file"]["tmp_name"], "./photo/$sno.jpg");
		echo "Successfully upload <a href='select2.php'>OK</a><hr>";
	}

?>
<form action="" method="POST" enctype="multipart/form-data">
	Select a photo for sno <?=$sno?>:
	<input type="file" name="file" accept="image/jpeg, image/png"> <br>
	<input type="submit" name="submit" value="Upload">

</form>