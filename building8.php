<?php

class Errortest
{
	function checkError($error){

		if ($error == true) throw new Exception("This is an Exception");
	}
}

$error = new Errortest();

try{
	$error->checkError(true);
}catch (Exception $e){
	print_r($e->getMessage());
}finally{
	echo "<br>End Exception";
}
?>