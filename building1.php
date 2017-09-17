<?php
class Building
{
	var $color;
	var $floornbre;

	function buildingSurface($surface){
		echo 'La surface du batiment est de : '.$surface;
	}
}

$building = new Building();
$building -> buildingSurface('150m2');

?>