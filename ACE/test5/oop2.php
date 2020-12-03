<?php

class Counter{
	private $data;

	function __construct(){
		$this->data = 0;
		echo "This is constructor<br>";
	}

	public function increase (){
		$this-> data++;
	}

	public function getdata(){
		return $this->data;
	}
}

$c = new Counter();
$c->increase();
echo $c->getdata();