<?php

	/*
	$names = array('Bastiaan', 'Gerrit', 'Jeroen');
	echo implode(', ', $names);
	*/
	

	//collect and process data
	$name = 'Bastiaan';
	$email = 'bas@bas.com';
	$message = 'Really great website, love it!';
	$telephone = '0123456789';

	//create an array
	$data = array(
			'name' 		=> $names,
			'email'		=> $email,
			'message' 	=> $message,
			'telephone' => $telephone 
		);

	//Create a string from $data and connect the string elements via 'implode()'
	$fields_sql = '`' . implode('`, ` ', array_keys($data)) . '`';
	$values_sql = '\'' . implode('\', \'', $data) . '\'';

	//SQL with the right information from $fields_sql and $values_sql. Makes it much easier to add information.
	$sql = "INSERT INTO 'table' ($fields_sql) 
	VALUES ($values_sql)";

	echo $sql;

?>