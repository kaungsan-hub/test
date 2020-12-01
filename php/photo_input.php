<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
	if(isset($_POST['ok'])){
		echo $_FILES['file']['tmp_name']."<br>";	
		echo $a = $_FILES['file']['name']."<br>";
		echo $_FILES['file']['size']."<br>";
		echo $_FILES['file']['type']."<br>";

		move_uploaded_file($_FILES['file']['tmp_name'],'photo/'.$_FILES['file']['name']);
	
	}
?>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<h1><i>Upload a photo.</i></h1>
		<input type="file" name="file" >
		<button type="submit" name="ok">OK</button>
	</form>
</body>
</html>

<!-- Can't use GET method in file upload -->