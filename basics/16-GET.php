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

	if (isset($sName) && isset($iAge)) {
		if (!empty($sName) && !empty($iAge)) {
			echo 'I am ' . $sName . ' and I am ' . $iAge . ' years old.';	
		}else{
			echo 'Fill in the form.';
		}

	}



?>