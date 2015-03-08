<?php

	
$age = '27';
$old_enough = false;

	//the if-statements
	if ($age >=27) {
		$old_enough = true;
	}

	$old_enough = ($age >=27)

		if ($old_enough === true) {
			echo 'Old enhough';
		}else{
			echo 'Too young';
		}

	//The ternary operators
	//if $age is greater than or equel to 27, then it's True. Otherwise it's false.
	$old_enough = ($age >=27) ? true : false;

	//if $old_enough is true. Output 'Old enough'. Otherwise you're 'Too young'.
	echo ($old_enough === true) ? 'Old enough' : 'Too young!';







?>