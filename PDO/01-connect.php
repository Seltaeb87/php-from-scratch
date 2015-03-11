<?php
	//Connecting to a database with PDO
	$config['db'] = array(
		'host'		 => 'localhost',
		'username' => 'root',
		'password' => 'mysqlpass',
		'dbname'	 => 'albums'
	);

	//create new variable($db) with new PDO instance. Get the information from Array $config['db'].
	$db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=x' . $config['db']['dbname'], $config['db']['username'], $config['db']['passwprd']);

?>