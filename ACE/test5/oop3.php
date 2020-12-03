<?php

class Counter{
	protected $data;

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

class NewCounter extends Counter{
	public function decrease(){
		$this->data--;
	}
}

$c = new NewCounter();
$c->increase();
$c->increase();
$c->increase();
$c->decrease();
echo $c->getdata();