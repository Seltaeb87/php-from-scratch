<?php
	//Splitting a string by spaces(Whitespace)
	//Problem are all the spaces
	$string = trim('Blue         car    sales');
	$keywords = preg_split('/[\s]+/', $string); //Spaces are removed by preg_split()

	print_r($keywords);



?>