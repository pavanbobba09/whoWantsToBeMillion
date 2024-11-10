<!DOCTYPE html>
<?php
session_start();
$score = 0;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 0;
?>
<html>

<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br />
	<h2>$500 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">What is the largest planet in our solar system?</td>
		</tr>
		<tr>
			<td class="a">A. Earth</td>
			<td class="b">B. Jupiter</td>
		</tr>
		<tr>
			<td class="c">C. Mars</td>
			<td class="d">D. Saturn</td>
		</tr>
	</table>
	<form action="q1.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="false">--</option>
				<option value="false">A</option>
				<option value="true">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class="submit">
		</p>

	</form>
</body></html>