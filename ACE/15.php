<!DOCTYPE html>
<html>
<head>
	<title>HMTL</title>
</head>
<body>

<?php

//$a =" ";
//if(isset($_GET["apple"])) $a = $_GET["apple"];

$a = isset($_GET["apple"]) ? $_GET["apple"] : "";
$b = isset($_GET["banana"]) ? $_GET["banana"] : "";
$o = isset($_GET["orange"]) ? $_GET["orange"] : "";

?>

<form action="">
	<label for="apple">Apple</label>
	<input type="checkbox" name="apple" id="apple" <?php echo $a=="on"? "checked" : ""; ?> > |

	<label for="banana">Banana</label>
	<input type="checkbox" name="banana" id="banana" <?php echo $b=="on"? "checked" : ""; ?> > |

	<label for="orange">Orange</label>
	<input type="checkbox" name="orange" id="orange" <?php echo $o=="on"? "checked" : ""; ?> > |

	<input type="submit" value="Show Images">

<?php
echo $a=="on" ? "<img src='fruits/apple.jpg'>"  :  "";
echo $b=="on" ? "<img src='fruits/banana.jpg'>" :  "";
echo $o=="on" ? "<img src='fruits/orange.jpg'>" :  "";
?>

</form> 
</body>
</html>