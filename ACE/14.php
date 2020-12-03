<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html form</title>
</head>
<body>
<?php
    $row ="";
    $col = "";
    $border = "";
    $content = "rand";

    if(isset($_GET["row"]) && isset ($_GET["col"])){
    $x = $_GET["row"];
    $y = $_GET["col"];
    $border = isset($_GET["border"]) ? $_GET["border"] : "";
    $content = $_GET["content"];
    }
    ?>

    <form action="" method= "get">

    <label for="row">Rows:</label>
    <input type="number" name="row" id="row" value="<?php echo $x; ?>">
    <br>
    <label for="col">Columns:</label>
    <input type="number" name="col" id="col" value="<?php echo $y; ?>">
    <br>
    <label for="border">Show Border:</label>
    <input type="checkbox" name="border" id="border" <?php echo $border=="on" ? "checked = 'checked'" : "" ?>> <br>
    <label for="content">Content:</label>
    <select name="content" id="content" >
        <option value="rand" <?php echo $content=="rand" ? "selected = 'selected'" : "" ?>>Random number</option>
        <option value="rowcol" <?php echo $content=="rowcol" ? "selected = 'selected'" : "" ?>>(Row, Column)</option>
        <option value="both" <?php echo $content=="both" ? "selected = 'selected'" : "" ?>>Both Random and(R,C)</option>
    </select>
    <br>
    <input type="submit" value="Draw Table" >
    </form>
    <?php

    if(isset($_GET["row"]) && isset ($_GET["col"])){
        $x = $_GET["row"];
        $y = $_GET["col"];
        $border=$border=="on"?1:0;
        
                echo "<table border = $border>";

        for ($i=1; $i<=$x;  $i++) { 


       echo"<tr>";
        for($j = 1; $j <= $x; $j++){
            if($content=="rand") echo "<td>".rand(1,100)."</td>";
            if($content=="rowcol") echo "<td> ($i, $j) </td>";
            if($content=="both") echo "<td> ($i, $j) </td>";

            }
        echo "</tr>";
        }
        echo "</table>";    }   ?>
    
</body>
</html>