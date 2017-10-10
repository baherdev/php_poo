<?php

abstract class Chalet{
	abstract function ski();
	public function mountain(){
		echo '<br>I\'m in the moutain';
	}
}

class exemple extends chalet{
	function ski(){
		echo '<br> I like skiing';
	}
}

$monchalet = new exemple();
$monchalet->ski();
$monchalet->mountain();

?>