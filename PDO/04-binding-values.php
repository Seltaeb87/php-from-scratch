<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

require '01-connect.php';

	//!Not finished, will continu this later!
	$query = $db->prepare("SELECT title, artist, producer FROM records WHERE title LIKE :search");

	$query->bindValue(':search', '%Met%', PDO:PARAM_STR);

	$query->execute();

	$rows = $query->fetchAll(PDO::FETCH_ASSOC);
	print_r($rows, true);
	var_dump($rows);



?>