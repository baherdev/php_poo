<?php

trait Email {
	private $email;

	function setEmail($email){
		$this->email = $email;
		echo '<br> The email : '.$this->email;
	}
}

?>