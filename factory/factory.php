<?php

//Product
abstract class Construction{
	private $size;

	public abstract function whatIsThat(); 
}

//Concrete product
class HouseSuisse extends Construction{

	public function whatIsThat(){
		return 'This is a house in Switzerland';
	}
}

class ChaletSuisse extends Construction{

	public function whatIsThat(){
		return 'This is a chalet in Switzerland';
	}
}

class BuildingSuisse extends Construction{

	public function whatIsThat(){
		echo 'This is a building in Switzerland';
	}
}

class HouseFrance extends Construction{

	public function whatIsThat(){
		return 'This is a house in France';
	}
}

class ChaletFrance extends Construction{

	public function whatIsThat(){
		return 'This is a chalet in France';
	}
}

class BuildingFrance extends Construction{

	public function whatIsThat(){
		echo 'This is a building in France';
	}
}

//Client
abstract class  ConstructionClient
{
	public function build($type){
		$theBuilding = $this->buildConstruction($type);
		echo $theBuilding->whatIsThat(); 
	}

	public abstract function buildConstruction($type);
}

//Factory
class ConstructionSwitzerland extends ConstructionClient{

	public function buildConstruction($type){

		switch($type)
		{
			case'house': return new houseSuisse();break;
			case'chalet': return new chaletSuisse();break;
			case'building': return new buildingSuisse();break;
		}
	}
}

class ConstructionFrance extends ConstructionClient{

	public function buildConstruction($type){

		switch($type)
		{
			case'house': return new houseFrance();break;
			case'chalet': return new chaletFrance();break;
			case'building': return new buildingFrance();break;
		}
	}
}
?>
