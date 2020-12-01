<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

	<?php
		if(isset($_POST['sub'])){
			if(isset($_POST['color'])){
				foreach ($_POST['color'] as $a) {
					echo $a."<br>";
				}
			}
		}
	?>

<body>
	<form action="" method="POST">
		<input type="checkbox" name="color[]" value="red"> red <br>
		<input type="checkbox" name="color[]" value="green"> green <br>
		<input type="checkbox" name="color[]" value="blue"> blue <br>
		<input type="checkbox" name="color[]" value="whites"> white <br>
		<input type="submit" name="sub" value="OK">
	</form>
</body>
</html>