	


	<form action="17-POST.php" method="POST">
		Please enter your password:<br>
		<input type="password" name="password"><br>
		<input type="submit" value="Submit">
	</form>



<?php
// $_POST

	$password = $_POST['password'];
	$wachtwoord = 'password';

	// Check if passwordfield is filled (isset) and check if it's not empty.
	if (isset($password) && !empty($password)) {
		if ($password == $wachtwoord ) { // If password is equal to wachtwoord, password is correct. If not, see 'else'.
			echo 'Correct password';
		}else{
			echo 'Wrong password';
		}
	}

?>
