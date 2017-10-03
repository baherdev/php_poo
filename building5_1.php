<?php
include('building5.php');

class Appartement implements characteristics
{
	public function kitchen(){
		echo '<br> There is a kitchen';
	}

	public function shower(){
		echo '<br> There is a shower';
	}

	public function firePlace(){}
	public function dishWasher(){}

}

$appartement = new Appartement();
$appartement->kitchen();
?>