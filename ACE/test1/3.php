<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
</head>
<body>
	<h1>Draw Table</h1>
	<h2>Step 3 </h2>
	<form action="result.php" method="get">
		<label for="content">Content:</label>
		<select name="content" id="content">
			<option value="rand">Random Numbers</option>
			<option value="rowcol">(Row, Column)</option>
			<option value="both">Both Random</option>
		</select>
			<input type="hidden" name="row"    value="<?= $_GET["row"]?>">
			<input type="hidden" name="col"    value="<?= $_GET["col"]?>">
			<input type="hidden" name="border" value="<?= $_GET["border"]?>">
  

		<input type="submit" name="Next">
	</form>
</body>
</html>