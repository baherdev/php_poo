<?php
class Building
{
  var $color;
  var $floornbre;

  function __construct($buildingType){
    echo "<br>We are in a construction function";
    echo "<br>The building type is : ".$buildingType;
    echo "<br>2-Usage memory :".memory_get_usage();
  } 

  function __destruct(){
    echo "<br>We are in a destruction function";
    echo "<br>4-Usage memory :".memory_get_usage();
  }

  function buildingSurface($surface){
    echo '<br>La surface du batiment est de : '.$surface;
    echo "<br>3-Usage memory :".memory_get_usage();
  }
}

echo "<br>1- Usage memory :".memory_get_usage();
$building = new Building('Maison');
$building -> buildingSurface('150m2');

?>