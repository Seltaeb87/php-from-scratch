<?php

  //Anonymous functions using callbacks
  function  string($string, $callback){
  	$results = array(
  			'upper' => strtoupper($string),
  			'lower' => strtolower($string)
  		);

  	if (is_callable($callback)) {
  		call_user_func($callback, $results);
  	}
  } 


string('Bastiaan', function($name){
	echo $name['upper'];
});




?>