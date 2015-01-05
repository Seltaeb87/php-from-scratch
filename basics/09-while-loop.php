<?php
	//While loop

	$iNum = 25;
	
	/*
	  while $iNum is greater then or equal to 0 show the outcome(integer). Everytime it loops, do minus 1. 
	  So start with 10, then check if it's greater or equal to 0. If yes, proceed and do -1 ($iNum--). Store that value in $iNum and do it all over again. 
	  This will happen until it drops below 0 and the loop will stop.
	*/ 
	while($iNum >= 0){
		echo $iNum . '<br>';
		$iNum--;
	}




?>
