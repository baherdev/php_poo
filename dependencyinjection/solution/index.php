<?php

include 'building.php';
include 'chalet.php';
include 'house.php';
include 'contract.php';


$owner = new Chalet('Sebastian Vettel');
$owner = new House('Louis Hamilton');
$contract = new Contract($owner);

$contract->signContract();

?>