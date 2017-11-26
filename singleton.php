<?php

class Building{

	public static $instance;
	public static $building;

	public function __construct($batiment){

		if(!self::$instance){
			self::$instance = $this;
			self::$building = $batiment;
			echo self::$building.' is a new instance';
		}else{
			echo self::$building.' instance is already created, we can\'t add '.$batiment;
		}
	}
}


$batiment_0 = new Building('batiment_0');
echo '<br>';
$batiment_1 = new Building('batiment_1');
echo '<br>';
$batiment_2 = new Building('batiment_2');
echo '<br>';
$batiment_3 = new Building('batiment_3');
echo '<br>';
$batiment_4 = new Building('batiment_4');
?>