<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
</head>
<body>
<h1>Draw Table</h1>
<h2>Result</h2>

    <?php
    $row =$_GET["row"];
    $col = $_GET["col"];
    $border = $_GET["border"];
    $content = $_GET["content"];
    echo"<table border='$border'>";
        for ($i=1; $i<=$row;  $i++) { 
     echo"<tr>";
        for($j = 1; $j <= $col; $j++){

            if($content=="rand") echo "<td>".rand(1,100)."</td>";
            if($content=="rowcol") echo "<td> ($i, $j) </td>";
            if($content=="both") echo "<td> ($i, $j) </td>";

            }
        echo "</tr>";
        }
        echo "</table>";  
         ?>

</body>
</html>