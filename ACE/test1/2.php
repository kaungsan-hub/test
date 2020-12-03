<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
</head>
<body>
	<h1>Draw Table</h1>
	<h2>Step 2 </h2>
	<form action="3.php" method="get">
		<label for="border">Border:</label>
		<select name="border" id="border">
			<option value="0">NO Border</option>
			<option value="1">Solid Border</option>
		</select>
			<input type="hidden" name="row" value="<?=$_GET["row"]?>">
			<input type="hidden" name="col" value="<?=$_GET["col"]?>">

		<input type="submit" name="Next">
	</form>
</body>
</html>