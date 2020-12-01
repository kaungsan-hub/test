	<?php
		if(isset($_GET['submit'])){
			$color = $_GET['radio'];
			echo "U choose = ".$color;
		}
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="GET">
		<input type="radio" name="radio" value="red"> red <br>
		<input type="radio" name="radio" value="green"> green <br>
		<input type="radio" name="radio" value="blue"> blue <br>
		<button type="submit" name="submit"> OK </button>
	</form>
</body>
</html>