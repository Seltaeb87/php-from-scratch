<?php

// Formatting Numbers

	$iNum = 25123567.1234567;

	/*
		number_format() function formats the number how you like it. I have 2 integers after the dot.
	 	In the first part I use comma's to separate the large number. In the second part after the dot, I would like to use a dot for cents.
	*/
	 	
	echo 'I don\'t have &euro;' . number_format($iNum, 2, ',', '.'); // Output = I don't have €25.123.567,12



?>