<?php
if( isset($_POST["submit"]) ){

	//var_dump($_FILES);

	echo $_FILES["file"]["name"] . "<br />";
	echo $_FILES["file"]["type"] . "<br />"; 
	echo $_FILES["file"]["tmp_name"] . "<br />"; 
	echo $_FILES["file"]["error"] . "<br />"; 
	echo $_FILES["file"]["size"] . "<br />"; 

	move_uploaded_file($_FILES["file"]["tmp_name"], "./photo/test5.png");

}
?>
<form action="" method="POST" enctype="multipart/form-data">
	Select file:
	<input type="file" name="file"> <br>
	<input type="submit" name="submit" value="Upload">

</form>


