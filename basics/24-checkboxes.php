<?php
/*
  Use get to see what happens via URL. Don't use $_GET in a real live situation.
  Use $_POST instead
*/
?>
<form action="24-checkboxes.php" method="get">
	<p><input type="checkbox" name="agree" /> I agree with the terms and conditions.</p>
	<p><input type="submit" value="register" /></p>
</form>

<?php

	if (isset($_GET['agree']) && $_GET['agree'] == 'on') {
		echo "Set and correct value";
	}else{
		echo "Please agree to the terms and conditions";
	}

?>