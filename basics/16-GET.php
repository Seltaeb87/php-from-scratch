	<form action="16-GET.php" method="GET">
		Name: <br><input type="text" name ="name"><br>
		Age: <br><input type="text" name ="age"><br>
			<inpyt type="hidden" name ="submitted" value="true">
			<input type = "submit" value="Submit">

	</form>


<?php

// $_GET

	$sName = $_GET['name'];
	$iAge = $_GET['age'];

	// Check if name and age are set in the form
	if (isset($sName) && isset($iAge)) {
		if (!empty($sName) && !empty($iAge)) {    //Check if 'name' and 'age' formfields are not emptry
			echo 'I am ' . $sName . ' and I am ' . $iAge . ' years old.'; // If everything is correct, this will be the output
		}else{
			echo 'Fill in the form.'; // If a field is empty, show this output.
		}

	}



?>