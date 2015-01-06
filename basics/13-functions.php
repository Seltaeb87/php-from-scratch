<?php

	//Functions

	//Create Function
	function name(){

		echo 'Bastiaan <br>';
	}

	//Call the function
	name();


	//Create function 'add'. Give it to perimeters which I' ve set when I call the function.
	function add($iNum, $iNum2){

		$result = $iNum + $iNum2; //store the result of $iNum + $iNum2 in $result. 
		return $result;

	}

	//echo out $result in function 'add'.
	echo add(10, 20);


?>
