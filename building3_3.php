<?php
include("building3_0.php");

$building = new Building('Lewis Hamilton');

//echo $building->owner;

$building->getOwner();
$building->setOwner(234234);
$building->getOwner();
?>