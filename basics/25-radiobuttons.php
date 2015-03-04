<?php

	//Radio Buttons
	

?>

<form action="25-radiobuttons.php" method="post">
	<p>
		<input type="radio" name="language" value="PHP" /> PHP<br />
		<input type="radio" name="language" value="C" /> C<br />
		<input type="radio" name="language" value="BASIC" /> BASIC
	</p>
	<p><input type="submit" value="Submit" /></p>
</form>

<?php
	if (isset($_POST['language'])) {
		$language = $_POST['language'];
		echo 'You selected ' . $language;
	}


?>