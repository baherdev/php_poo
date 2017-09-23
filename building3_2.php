<?php
include("building3.php");

$building = new Building('200m2','Lewis Hamilton');
$building->buildingSurface();

//Protected form outside the class//
//$building->buildingType();
//$building->buildingType = 'Appartment';
//Private form outside the class//
//$building->owner();
?>