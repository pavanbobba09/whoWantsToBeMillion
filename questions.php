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
			<td colspan=2 class="question">What is the chemical symbol for gold?</td>
		</tr>
		<tr>
			<td class="a">A. Au</td>
			<td class="b">B. Ag</td>
			<!--Correct-->
		</tr>
		<tr>
			<td class="c">C. Fe</td>
			<td class="d">D. Cu</td>
		</tr>
	</table>
	<form action="q1.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="false">--</option>
				<option value="true">A</option>
				<option value="false">B</option>
				<option value="false">C</option>
				<option value="false">D</option>
			</select>
			<input type="submit" value="Submit Answer" class="submit">
		</p>

	</form>
</body></html>