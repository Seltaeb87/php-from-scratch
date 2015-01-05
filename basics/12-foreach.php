<?php

	//Foreach loop
	
	//create array
	$aNames = array('Bastiaan'=>27, 'Gerrit'=>100, 'Benjamin'=>50);

	/*
		Assign the keys and values from the array to $key and $value.
		The keys are, in this case, the names. The values that belong to the keys are the integers, or the age in this case.
		echo out the $key (the names) and $value (the age).
	*/
		
	foreach ($sNames as $key => $value) {
		echo $key . ' is ' . $value . ' years old. <br>';
	}


?>