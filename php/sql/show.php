<?php 
$connect = mysqli_connect("localhost", "root", "", "php");
$result =  mysqli_query($connect, "SELECT * FROM human");
   while ($f = mysqli_fetch_field($result)) {
   	echo $f->name ."<br>"; 
   }
   echo "<hr>";
   
  while ($row= mysqli_fetch_array($result)) {
   	echo $row["id"]."<br>";
   	echo $row["name"]."<br>";
   	echo $row["email"]."<br>";
   	echo $row["password"]."<br>";
   }

   echo "<hr>";

//	$row= mysqli_fetch_array($result);
//	foreach ($row as $key=>$value) {
//		echo "$value";
//	}

   
// $ans=mysqli_query($connect,$result);
// $show=mysqli_num_rows($ans);
// echo $show;
?>	