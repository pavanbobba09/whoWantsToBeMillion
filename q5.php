<!DOCTYPE html>
<?php
session_start();
include 'check.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST['answer'];
    if ($answer === "true") {
        // Correct answer, move to the next question
        header("Location: q6.php");
        exit();
    } else {
        // Incorrect answer, go to loser page
        header("Location: loser.php");
        exit();
    }
}

// Initial setup if not yet answered
$score = 5;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 18500;
?>
<html>
<head>
    <title>Question</title>
    <link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
    <img src="logo.png"><br/>
    <h2>$20,000 Question!</h2>
    <table>
        <tr style="height:100px">
            <td colspan=2 class="question">Which film won the Academy Award for Best Picture in 2020?</td>
        </tr>
        <tr>
            <td class="a">A. La La Land</td>
            <td class="b">B. 1917</td>
        </tr>
        <tr>
            <td class="c">C. Parasite</td> <!--Correct-->
            <td class="d">D. The Shape Of Water</td>
        </tr>
    </table>
    <form action="" method="post">
        <p>Choose your answer:
            <select name="answer" size="1">
                <option value="false">--</option>
                <option value="false">A</option>
                <option value="false">B</option>
                <option value="true">C</option>
                <option value="false">D</option>
            </select>
            <input type="submit" value="Submit Answer" class="submit">
        </p>
    </form>
</body>
</html>
