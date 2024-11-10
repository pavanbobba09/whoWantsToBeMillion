<!DOCTYPE html>
<?php
session_start();
include 'check.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST['answer'];
    if ($answer === "true") {
        // Correct answer, move to the next question
        header("Location: q10.php");
        exit();
    } else {
        // Incorrect answer, go to loser page
        header("Location: loser.php");
        exit();
    }
}

// Initial setup if not yet answered
$score = 10;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 438500;
?>
<html>
<head>
    <title>Question</title>
    <link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
    <img src="logo.png"><br/>
    <h2>$500,000 Question!</h2>
    <table>
        <tr style="height:100px">
            <td colspan=2 class="question">Who is known as the "King of Pop"?</td>
        </tr>
        <tr>
            <td class="a">A. Prince</td>
            <td class="b">B. Michael Jackson</td> <!--Correct-->
        </tr>
        <tr>
            <td class="c">C. Elvis Presley</td>
            <td class="d">D. Madonna</td>
        </tr>
    </table>
    <form action="" method="post">
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
</body>
</html>