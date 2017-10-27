<?php

//Product
abstract class Construction{
	private $size;

	public abstract function whatIsThat(); 
}

//Concrete product
class House extends Construction{

	public function whatIsThat(){
		return 'This is a house';
	}
}

class Chalet extends Construction{

	public function whatIsThat(){
		return 'This is a chalet';
	}
}

class Building extends Construction{

	public function whatIsThat(){
		return 'This is a building';
	}
}
?>
