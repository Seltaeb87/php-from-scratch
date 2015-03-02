<?php

$levels = array(
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

echo '<pre>', print_r($levels, true), '</pre>';

//It will give you information about variable $levels
//var_dump($levels);

?>