<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
</head>
<body>
	<h1>Game</h1>
	<form action="result1.php" method="GET">
	    <label for="month">Select your month:</label>
	    <select name="month">
	    	<option value="Dancing" >January</option>
	    	<option value="Smoking" >February</option>
	    	<option value="Playing card" >March</option>
	    	<option value="Gaming" >April</option>
	    	<option value="Selling condoms" >May</option>
	    	<option value="Selling beer" >June</option>
	    	<option value="Divinationing" >July</option>
	    	<option value="Protesting" >August</option>
	    	<option value="Selling underwear" >September</option>
	    	<option value="Sleeping" >October</option>
	    	<option value="Meditate" >November</option>
	    	<option value="Singing" >December</option>
	    </select>

	    <input type="hidden" name="name" value="<?=$_GET["name"]?>" >

	    <input type="submit" value="Next!!">
	</form>
</body>
</html>