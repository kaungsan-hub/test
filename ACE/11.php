<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>
<form  method="GET">
	<label for="a">Number 1:</label>
	<input type="number" name="a" id="a"><br><br>
	<label for="b">Number 2:</label>
	<input type="number" name="b" id="b"><br><br>
	<input type="submit" value="Add"><br>
</form>
<?php
if(isset($_GET["a"]) && isset($_GET["b"])){
$a = $_GET["a"];
$b = $_GET["b"];
$c = intval($a)+intval($b);
echo "$a plus $b is $c";
}
?>
</body>
</html>