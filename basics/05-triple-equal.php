<?php
	
	//Triple equal ===
	//Tripe equal means it must be identical, also the same data-type (integer must be integer, string must be string. Example: string === string is true. Integer === string is false).
	
	$iNum = 10; //integer
	$sNum = '10'; //string

	//checks if $iNum and $sNum are the same, but also checks if they are of the same data-type. Which they are not: $iNum is an integer and $sNum is a string.
	//the output will be "Not Equal."
	if ($iNum === $sNum) {
	 	echo 'Equal';
	 } else{
	 	echo 'Not equal.';
	 }


?>