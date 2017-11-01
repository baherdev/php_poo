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
		echo 'This is a building';
	}
}


//Client
class ConstructionClient
{
	public static function build($type){
		$theBuidling = new MyConstruction();
		$createdBuilding = $theBuidling->buildConstruction($type);
		echo $createdBuilding->whatIsThat();
	}
}

//Factory
class MyConstruction{

	public function buildConstruction($type){

		switch($type)
		{
			case'house': return new house();break;
			case'chalet': return new chalet();break;
			case'building': return new building();break;
		}
	}
}
?>
