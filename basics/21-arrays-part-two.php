<?php

//Use $GLOBALS as an array. Not sure if this is bad practice..
$GLOBALS['levels'] = array(
	1 => array(
		'name' => 'Level 1',
		'desc' => 'This is the first level.'
		), 
	2 => array(
		'name' => 'Level 2',
		'desc' => 'You are half way!'
		), 
	3 => array(
		'name' => 'Level 3',
		'desc' => 'You\'ve reached the final level!'
		)
);

//Create function "level_data" with two(2) paramaters
function level_data($levels, $data){
	if (array_key_exists($levels, $GLOBALS['levels']) === true) { //Check if array exists
		return $GLOBALS['levels'][$levels][$data]; //Return the levels array with the two(2) params
	}else{
		return false;
	}
}

//Echo out function "level_data" with two(2) paramaters given.
echo level_data(2, 'desc'); //Echo: "You are half way!"

//echo '<pre>', print_r($GLOBALS['levels'], true), '</pre>';

//It will give you information about variable $levels
//var_dump($levels);

?>