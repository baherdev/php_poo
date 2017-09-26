<?php
include("building4_2.php");
include("building4_3.php");

class Maison extends building
{
	public $floorNbre;

	use User;
	use Email;
	
	public function __construct()
	{
		
	}

	public function setBuildingType($buildingType){
		$this->buildingType = $buildingType;
		echo '<br>This is setBuildingType overrided method';
	}
	public function setfloorNbre($floorNbre){
		$this->floorNbre = $floorNbre;
		echo "<br>The number of floor is ".$this->floorNbre;
	}

	public function describreMyHouse(){
		$this->setBuildingType('Maison');
		$this->surface = '800m2';
		$this->buildingSurface();
		$this->setfloorNbre(2);
		$this->setRoomNumber(5);
	}
}

?>