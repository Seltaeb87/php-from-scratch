<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

	require '01-connect.php';

	$query = $db->query("SELECT title, artist FROM records");

  $rows = $query->fetchAll(PDO::FETCH_ASSOC);
  print_r($rows);


?>