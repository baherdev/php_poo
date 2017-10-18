<?php

class Commodity
{
	public $CommodityDistance;
	public static $CommodityProposition;
	public static $objectNumber = 0;

	function __construct(){
		self::$objectNumber++;
		$this->commoditiyDistance = '0 km';
		echo '<h1>New object created number : '.self::$objectNumber."</h1>";
	}

	//None static method with static and normal proprety
	public function commodityListNoneStatic(){
		echo '<h3>None Static method with static and normal proprety</h3>';
		echo '<br>The commodity distance is : '.$this->commoditiyDistance.' (normal proprety)';
		echo '<br>The commodity is : '.self::$CommodityProposition.' (static proprety)';
	}

	//Static method with static and normal proprety	
	public static function commodityListStatic(){
		echo '<h3>Static method with static and normal proprety</h3>';
		//echo '<br>The commodity distance is : '.$this->commoditiyDistance.' (normal proprety)';
		echo '<br>The commodity is : '.self::$CommodityProposition.' (static proprety)';
	}

}

$building = new Commodity();
Commodity::$CommodityProposition = 'skiing';
$building->commoditiyDistance = '10 km';
$building->commodityListNoneStatic();
$building1 = new Commodity();
$building1->commodityListNoneStatic();//Even I create a new object the value commodityProposition is the same but commoditiyDistance have been change to the initial value
$building2 = new Commodity();
$building2->commodityListStatic();
Commodity::commodityListStatic();


?>