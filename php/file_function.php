<?php
	function creatfile($filename){
		$h=fopen($filename, 'w');
		fclose($h);
	}

	function writefile($filename, $data){
		$h=fopen($filename, 'w');
		fwrite($h, $data);
		fclose($h);
	}

	function appendfile($filename, $data){
		$h=fopen($filename, 'a');
		fwrite($h, $data);
		fclose($h);
	}

	function rfile($filename){
		$h=fopen($filename, 'r');
		$size=filesize($filename);
		$data = fread($h, $size);
		fclose($h);
		return $data;
	}

	echo rfile('mine.txt');
	//appendfile('mine.txt', 'moring every one pr i have good luck.');
	//writefile('mine.txt', 'moring every one pr');
	//creatfile('mine.txt');
?>