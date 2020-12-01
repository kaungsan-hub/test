<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
	if(isset($_POST['ok'])){
 // print_r($_FILES['files']);
		foreach ($_FILES['files']['tmp_name'] as $key=>$value) {
			echo $_FILES['files']['name'][$key]."<br>";
			echo $_FILES['files']['tmp_name'][$key]."<br>";
			echo $_FILES['files']['size'][$key]."<br>";
			move_uploaded_file($_FILES['files']['tmp_name'][$key], 'photo/'.$_FILES['files']['name'][$key]);
		}
}
?>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<h1><i>Upload a photo.</i></h1>
		<input type="file" name="files[]" multiple>
		<button type="submit" name="ok">OK</button>
	</form>
</body>
</html>

<!-- Can't use GET method in file upload -->