<?php
include("building3.php");

$building = new Building('200m2');
//Public from the oustisde of the class//
echo "<br> The initialised building surface value from constructor is :".$building->surface;

$building->surface = '50m2';
$building->buildingSurface();

$building = new Building('3000m2');
$building->buildingSurface();
?>