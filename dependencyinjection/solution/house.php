<?php

class House implements Building{

	private $owner;

	public function __construct($theOwner){
		$this->owner = $theOwner;
	}

	public function build(){

		echo 'The owner of the House is : '.$this->owner;
	}
}
?>