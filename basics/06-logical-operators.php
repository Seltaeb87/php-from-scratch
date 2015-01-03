<?php

	//Logical Operators: AND OR ! - && || ! (! means not)

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
		echo 'Hello ' . $sName . '<br>';
	}else{
		echo 'You\'re <b>not</b> Bastiaan or Bas.. <br>';
	}


	$sDog = 'John';

	// if $sDog is NOT equal to Billy is, execute the first step. If $sDog is Billy, go to the 'else' statement.
	if($sDog != 'Billy'){
		echo 'That\'s not your dogs name!';
	}else{
		echo 'Your dogs name is ' . $sDog;
	}


?>
