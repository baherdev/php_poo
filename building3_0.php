<?php

class Building
{

	public $surface = '100m2';
	private $owner = 'Valentino Rossi';

	function __construct($owner){

		echo '<br> Construction function :';
		$this->owner = $owner; //Private proprety from inside the class//


	}

	public function getOwner(){
		echo '<br>-----------------------Public method----------------------';
		echo '<br>The owner of the building is : '.$this->owner.' private proprety';
	}

	public function setOwner($owner){
		echo '<br>-----------------------Public method----------------------';
		if (is_string($owner)){
			$this->owner = $owner;
		}
		else{
			echo '<br>This is not a string';
		} 
		
	}


}

?>