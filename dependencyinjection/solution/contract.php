<?php
class Contract{

	private $contract;

	public function __construct(Building $contractBuilding){

		$this->contract = $contractBuilding;
	}
	
	public function signContract(){
		echo 'A new contract is signed';
		echo '<br>';
		
		$this->contract->build();
		echo '<br>';
	}
}
?>