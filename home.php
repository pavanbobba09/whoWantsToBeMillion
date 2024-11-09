<?php session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else {
	header('Location: login.php');
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1 class="header"><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
	<img src="logo.png"><br />
	<div>
		<h1 class="welcome">Welcome, <?php print $_SESSION["username"] ?>!</h1>

		<p class="rules"> <b>RULES:</b> <br> Answer 10 questions to become a MILLIONAIRE!<br />
			Any wrong answer, you lose the chance to become a millionaire!<br />
		</p>

		<div>
			<button onclick="document.location='questions.php'">Questions</button>
			<button onclick="document.location='leaderboard.php'">Leaderboard</button>
			<button onclick="document.location='logout.php'">Log Out</button>
		</div>
	</div>
</body>

