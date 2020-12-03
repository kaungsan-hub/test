<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html form</title>
</head>
<body>
<?php

    if(isset($_GET["row"]) && isset ($_GET["col"])){
    $x = $_GET["row"];
    $y = $_GET["col"];
    }
    ?>

    <form action="" method= "get">

    <label for="row">Rows:</label>
    <input type="number" name="row" id="row" value="<?php echo $x; ?>">
    <br>
    <label for="col">Columns:</label>
    <input type="number" name="col" id="col" value="<?php echo $y; ?>">
    <br>
    
    <input type="submit" value="Draw Table" >
    </form>
    <?php

    if(isset($_GET["row"]) && isset ($_GET["col"])){
        $x = $_GET["row"];
        $y = $_GET["col"];
        echo "<table border = 1>";
        for($i = 1; $i <= $x; $i++){
        echo "<tr>";
            for($j= 1; $j <= $y; $j++){
            // echo "<td> ". rand(1,100)." </td>";
            // echo "<td> $i, $j</td>";
            echo "<td><small> $i, $j</small> <br> ".rand(1,100)."</td>";
            }
        echo "</tr>";
        }
        echo "</table>";    
}
    
    ?>
</body>
</html>