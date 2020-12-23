<?php
    $connect=mysqli_connect("localhost","root","","php");
    $sql="CREATE TABLE human(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(20) NOT NULL, 
    email VARCHAR(20) NOT NULL, 
    password VARCHAR(50) NOT NULL
    );";

    $result=mysqli_query($connect,$sql);
    echo $result ? "Table create successful" : "Table create fail";

?>

