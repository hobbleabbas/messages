<?php

session_start();
if ($_SESSION['allowed'] == 'true') {
	$yo = 'hi';
} else {
	header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Messaging</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
	<h4>To Send A New Message, Fill Out The Form Below</h4>

	<form method = 'get' class = 'mb-3'>
		<label for = 'name' class = 'form-label'>Enter Your Name Below</label>
		<input id = 'name' name = 'name' required = "">
		<label for = 'tldr'>Give a TLDR</label>
		<input id = 'tldr' name="tldr" required = "">
		<label>Enter Your Message Below</label>
		<textarea name = 'details' required = ""></textarea>
		<button name = 'submit' type = 'submit' class = 'btn btn-primary'>Submit</button>
	</form>

	<?php
		if (isset($_GET['submit'])) {
			$tldr = $_GET['tldr'];
			$details = $_GET['details'];
			$name = $_GET['name'];

			echo 'Name is '.$name.'<br>';
			echo 'TLDR is '.$tldr.'<br>';
			echo 'Details are '.$details.'<br>';
		}
	?>
</body>
</html>
