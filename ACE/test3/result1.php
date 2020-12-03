<?php

	$name=$_GET["name"];
	$month=$_GET["month"];
	if(strpos("abcABC", $name[0])!== false)echo "In ktv,";
	if(strpos("defDEF", $name[0])!== false)echo "In club,";
	if(strpos("ghiGHI", $name[0])!== false)echo "In hotel,";
	if(strpos("jklJKL", $name[0])!== false)echo "In bar,";
	if(strpos("mnoMNO", $name[0])!== false)echo "In home,";
	if(strpos("pqrPQR", $name[0])!== false)echo "In school,";
	if(strpos("stuSTU", $name[0])!== false)echo "In temple,";
	if(strpos("vwxVWX", $name[0])!== false)echo "In bagoda,";
	if(strpos("yzYZ", $name[0])!== false)echo "In cafe,";

	switch ($month) {
		case 'Dancing':echo" Dancing"; break;
		case 'Smoking':echo" Smoking"; break;
		case 'Playing card':echo" Playing card"; break;
		case 'Gaming':echo" Gaming"; break;
		case 'Selling condoms':echo" Selling condoms"; break;
		case 'Selling beer':echo" Selling beer"; break;
		case 'Divinationing':echo" Divinationing"; break;
		case 'Protesting':echo" Protesting"; break;
		case 'Selling underwear':echo" Selling underwear"; break;
		case 'Sleeping':echo" Sleeping"; break;
		case 'Meditate':echo" Meditate"; break;
		case 'Singing':echo" Singing"; break;
	}

?>