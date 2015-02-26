<?php

	$sName = 'Gerrit';

		//If variable $sName is equal to name, echo "Hi, Bastiaan". If it's not equal(like the example), go to "else"
		if ($sName == 'Bastiaan') {
			echo 'Hi, ' . $sName;
		}else{
?>
		Not Bastiaan? Please type your name:<br />
			<form action="19-embed-php-html-part-two.php" method="POST">
				<input type="text" name="name"> <input type="submit" value="Submit">
		    </form>
<?php
	}
?>