
<?php
	session_start();
	session_save_path("session");
	
	$error = $_SESSION["error"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<h1 class="header">ERROR</h1>
	<button><a href="login.php" class="Goback">Click here to go back to login page</a></button>
</body>
</html>