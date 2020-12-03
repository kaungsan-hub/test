<?php

class Counter{
	private $data;

	function __construct($d){
		$this->data = $d;
		echo "This is constructor<br>";
	}

	public function increase (){
		$this-> data++;
	}

	public function getdata(){
		return $this->data;
	}
}

$c = new Counter(10);
$c->increase();
echo $c->getdata();