<?php
	//Switch Statements

	$sName = 'Jaap';

//if $sName is Bastiaan, Gerrit or Benjamin, show a welcome message. If it's not one of these names, show the 'default' message.
	switch ($sName) {
		case 'Bastiaan':
			echo "Hello Bastiaan";
		break;

		case 'Gerrit':
			echo "Hello Gerrit";
		break;

		case 'Benjamin':
			echo "Hello Benjamin";
		break;
		
		default:
			echo 'You\'re not Bastiaan, Gerrit or Benjamin! Go Away!';
		break;
	}






?>
