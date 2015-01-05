<?php

	//For loops

	/*
	  for $i is 0, $i is less or equal to 10, $i + 1. Loop until you reach the max of 10. Output the result everytime it loops.
	  So start at 0. Is it less then or equal to 10? 
     		Yes: Proceed wit a +1. Continues to do this until it reach the given max. In this case, 10.
     		No: Stop the loop.
    */ 

    echo 'Plus <br>';
	for ($iNum=0; $iNum <= 10 ; $iNum++) { 
		echo $iNum . '<br>';
	}


	echo 'Minus <br>';
	//p.s: Ofcourse this can also be with minus and so on.
		for ($iNum=10; $iNum >= 1 ; $iNum--) { 
		echo $iNum . '<br>';
	}


	echo 'Table of 2 <br>';
	//Table of 2
		for ($iNum=2; $iNum <= 20 ; $iNum = $iNum + 2) { 
		echo $iNum . '<br>';
	}

?>
