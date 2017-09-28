<?php

trait User{
	private $userName;
	function setUserName($userName){
		$this->userName = $userName;
		echo '<br> The user name of the costumer is : '.$this->userName;
	}
}
?>