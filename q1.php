<!DOCTYPE html>
<?php
    session_start();
	include 'check.php';
	$score = 1;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 500;
?>
<html>
<head>
	<title>Question</title>
	<link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
	<h2>$1,000 Question!</h2>
	<table>
		<tr style="height:100px">
			<td colspan=2 class="question">Who was the first President of the United States?</td>
		</tr>
		<tr>
			<td class="a">A. Thomas Jefferson</td>
			<td class="b">B. George Washington</td> <!-- Correct Answer -->
		</tr>
		<tr>
			<td class="c">C. Abraham Lincoln</td> 
			<td class="d">D. John Adams</td>
		</tr>
	</table>
	<form action="q1-submit.php" method="post">
		<p>Choose your answer:
			<select name="answer" size="1">
				<option value="none">--</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
			<input type="submit" value="Submit Answer" class="submit">
		</p>
	</form>
</body>
</html>
