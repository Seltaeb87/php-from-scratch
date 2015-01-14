<?php

//Functions with undefined paramaters

	// Create function
	function add(){

		$total = 0;
		/* 
		    func_get_args is an array with the arguments which you set.
		    The arguments are set where you call the function.
		    Loop through func_get_args(function_get_arguments). 
		*/
		foreach (func_get_args() as $arg) {
			$total += (int)$arg; // Same as $total + $total + $arg;
		}

		return $total . '<br>';

	}

	echo add(5, 10, 1, 1000, 234, 123, 45); // Calling the function "add". This is the place where arguments are set.


	// Create function with one paramater($initial)
	function append($initial){
		$result = func_get_arg(0); // Set result initially on 0.
		foreach (func_get_args() as $key => $value){
			if ($key >= 1) {
				$result .= ' ' . $value; // Add the rest of the paramaters to $result(which has 0(Bastiaan)) it it's equal or greater than 1.
			}
		}
		return $result;
	}

	echo append('Bastiaan', 'Gerrit', 'Benjamin'); // Bastiaan = 0, Gerrit = 1 and so on.

?>
