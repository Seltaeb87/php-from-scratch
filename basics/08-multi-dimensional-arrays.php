<?php
	//Multi-Dimensional arrays

	$aInfo = array(
				'Bastiaan'=>array('Age'=>27, 'Hair'=>'Blonde', 'Food'=>array('Pizza', 'Pasta')), //Three dimensional array
				'Gerrit'=>array('Age'=>21, 'Hair'=>'Brown'), //Two dimensional array
				'Benjamin'=>array('Age'=>78, 'Hair'=>'Grey')
			);

//Get info from Bastiaan, get the food array and select 'Pasta' with [1] ('pizza' = [0]).
print $aInfo['Bastiaan']['food']['1'];


?>
 