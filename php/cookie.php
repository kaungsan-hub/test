<?php
	function mycookie(){
		setcookie('1', 'hello morning', time()+3600, '/', '', 0);
	}


	function getcookie(){
	if(isset($_COOKIE['1'])){
	echo $_COOKIE['1'];
	}else{
		echo "No cookie.";
	}}


	function delcookie(){
		setcookie('72', 'kaung san', time()-3600, '/', '', 0);
	}


	//delcookie();
	//getcookie();
	//mycookie();
?>