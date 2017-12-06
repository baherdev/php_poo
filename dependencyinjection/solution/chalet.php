<?php

class Chalet implements Building{

	private $owner;

	public function __construct($theOwner){
		$this->owner = $theOwner;
	}

	public function build(){

		echo 'The owner of the Chalet is : '.$this->owner;
	}
}
?>