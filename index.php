<?php
	session_start();
	$token = 12345;

	if(isset($_GET['submit'])) {
		$userToken = $_GET['token'];

		if($userToken == $token) {
			$_SESSION['allowed'] = 'true';
			header("Location: ../messages.php");
		} else {
			echo 'Your Token Is Incorrect!';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ironwood Comms System</title>
</head>
<body>
	<p>This is the Ironwood Communications System.</p>
	<form method = 'get'>
		<label>Please enter today's token to begin</label>
		<input name = 'token'>
		<button name = 'submit' type = 'submit'>Start</button>
	</form>
</body>
</html>