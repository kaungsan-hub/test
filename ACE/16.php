<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
</head>
<body>
	<?php
	$t = isset($_GET["t"]) ? $_GET["t"] : "";
	?>
<form>
	<label for="t">TEXT :</label>
	<input type="text" name="t" id="t" value="<?=$t ?>">

	<input type="submit" value="Reverse">
</form>

<?php
//echo (strrev($t));
for($i=0; $i<strlen($t); $i++){
	echo chr(ord($t[$i])+1) ;

	//echo chr (ord($t[$i])-1);
}

?>


</body>
</html>