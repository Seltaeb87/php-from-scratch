<?php

//I have my doubts about this, feeling this is BAD practice. Please do not use this in live environments.

$exp = time()+86400;
$expUnset = time()-86400;

	//setcookie("name", "Bastiaan", $exp);

	//Unset the cookie
	setcookie("name","", $expUnset);


	if(isset($_COOKIE["name"])){

		echo "Cookie is set";
	}else{
		echo "Cookie is not set";
	}

?>