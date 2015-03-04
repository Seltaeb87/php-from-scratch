<?php
	
	//Again, not sure if this bad practice
	session_start();
	//$_SESSION['name']="Bastiaan";

	echo $_SESSION['name'];

	//Unset a session
	//unset($_SESSION['name']);

	//or
	session_destroy();

?>