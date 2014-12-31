<?php

	//Logical Operators: AND OR ! - && || !

	$iNum = 27;

	//if $iNum is between 1 AND 100 show output that it is between 1 and 100. If not output the 'else' line.
	if ($iNum >= 1 && $iNum <= 100) {
		Echo 'The number is between 1 and 100. <br>';
	}else{
		echo 'The number is <b>not</b> between 1 and 100!<br>';
	}

	$sName = 'Gerrit';

	//if $sName is Bastiaan OR Bas, show the welcome message.
	if ($sName == 'Bastiaan' || $sName == 'Bas') {
		echo 'Hello ' . $sName;
	}else{
		echo 'You\'re <b>not</b> Bastiaan or Bas..';
	}


?>
