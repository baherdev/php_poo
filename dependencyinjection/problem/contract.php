<?php
class Contract{
	
	public function signContract($owner){
		echo 'A new contract is signed';
		echo '<br>';
		$chalet = new Chalet();
		$chalet->build($owner);
	}
}
?>