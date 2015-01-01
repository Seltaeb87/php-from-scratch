<?php
	//array = a list of items (keys and values).

//create an array where the key is the name and the value is the age(integer).
$aNames = array('Bastiaan'=>27, 'Gerrit'=>56, 'Benjamin'=>18);

//output all the array keys and values
print_r($aNames);

//Output only the Name and Age you specify. Specified the key 'Bastiaan'
print $aNames['Bastiaan'];

?>
