<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>
<form  method="GET">
	<label for="a">Number 1:</label>
	<input type="number" name="n" id="a"><br><br>
	<input type="submit" value="Draw"><br>
</form>
<?php
if(isset($_GET["n"])){
$n = $_GET["n"];
for($i=0; $i<$n; $i++){
	echo "<hr>";
}
}
?>
</body>
</html>