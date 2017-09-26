<?php
include("building3.php");
include("building4.php");

$maison = new Maison();
//$maison->setfloorNbre(2);
$maison->describreMyHouse();
//Call protected from outside : Not working
//$maison->setRoomNumber(10);

?>