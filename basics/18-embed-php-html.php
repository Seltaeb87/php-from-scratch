<?php

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		if (!empty($name)) {
			$sentence = $name .' '. 'woke up, and started this tutorial.';
		} else {
			echo 'Please enter your name.';
		}
	}

?>

<html>
<head>
</head>

<body>
	<form action = "18-embed-php-html.php" method="POST">
		Type your name: <br><input type="text" name="name" value="<?php echo $name; ?>"><br>
		<input type="submit" value="Submit">
	</form>

	<textarea rows="7" cols="25"><?php echo $sentence; ?></textarea>

</body>
</html>
