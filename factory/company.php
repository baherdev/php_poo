<?php
include('factory.php');

$constructionInFrance = new constructionFrance();
$constructionInFrance->build('chalet');
echo '<br>';
$constructionInSuisse = new constructionSwitzerland();
$constructionInSuisse->build('house');

?>