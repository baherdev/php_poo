<?php
include('factory_problem.php');

$house_1 = new House();
$house_1->whatIsThat();  
echo '<br>';
$chalet_1 = new Chalet();
$chalet_1->whatIsThat();  
echo '<br>';
$building_1 = new Building();
$building_1->whatIsThat();  
?>