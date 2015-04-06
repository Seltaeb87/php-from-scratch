<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

	require '01-connect.php';

	//Create a variable with the syntax for selecting the title, artist and producer from the "albums" database
	$query = $db->query("SELECT title, artist, producer FROM records");

	//Fetch all from query (title, artist and producer) and echo out the 'title'.
  while ( $rows = $query->fetch(PDO::FETCH_ASSOC)) {
  		echo $rows['artist'] . '<br>';
  }

  echo '<p>Returned ' . $query->rowCount() . ' results</p>';

?>