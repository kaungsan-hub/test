<?php
	function mycookie(){
		setcookie('72', 'kaung san', time()+3600, '/', '', 0);
	}


	function getcookie(){
	if(isset($_COOKIE['72'])){
	echo $_COOKIE['72'];
	}else{
		echo "No cookie.";
	}}


	function delcookie(){
		setcookie('72', 'kaung san', time()-3600, '/', '', 0);
	}


	//delcookie();
	getcookie();
	//mycookie();
?>