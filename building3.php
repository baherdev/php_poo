<?php

class Building
{

	public $surface = '100m2';
	private $owner = 'Valentino Rossi';
	protected $buildingType;
	protected $roomNumber;

	function __construct($surface,$owner){

		echo '<br> Construction function :';
		$this->surface = $surface; //Public proprety from inside the class //
		$this->owner = $owner; //Private proprety from inside the class//
		$this->buildingSurface(); //Public method from inside the class//
		
		$this->owner();//Private method from inside the class//

		$this->buildingType = 'House'; // Protected protected from inside class
		$this->setBuildingType($buildingType);

	}

	public function buildingSurface(){
		echo '<br>------------------------Public method-----------------';
		echo '<br> The surface of the building is : '.$this->surface;
		echo '<br>The owner of the building is : '.$this->owner." private proprety";
		echo '<br>The Building type is : '.$this->buildingType." protected proprety";
		$this->owner();//Private method from inside the class//
	}

	function getOwner(){
		echo '<br>-----------------------Private method----------------------';
		echo '<br>The owner of the building is : '.$this->owner.' private proprety';
	}

	private function owner(){
		echo '<br>-----------------------Private method----------------------';
		echo '<br>The owner of the building is : '.$this->owner.' private proprety';
	}

	protected function setBuildingType($buildingType){
		$this->buildingType = $buildingType;
		echo '<br>------------------------Protected method-----------------';
		echo '<br>The Building type is : '.$this->buildingType." protected proprety";
	}

	protected function setRoomNumber($roomNumber){
		$this->roomNumber = $roomNumber;
		echo '<br>------------------------Protected method-----------------';
		echo '<br>The number of room is : '.$this->roomNumber." protected proprety";
	}
}

?>