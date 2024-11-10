<!DOCTYPE html>
<?php
session_start();
include 'check.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST['answer'];
    if ($answer === "true") {
        // Correct answer, move to winner page
        header("Location: winner.php");
        exit();
    } else {
        // Incorrect answer, go to loser page
        header("Location: loser.php");
        exit();
    }
}

// Initial setup if not yet answered
$score = 938500;
?>
<html>
<head>
    <title>Question</title>
    <link href="questions.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
    <img src="logo.png"><br/>
    <h2>$1,000,000 Question!</h2>
    <table>
        <tr style="height:100px">
            <td colspan=2 class="question">How old was Alan Turing when he died?</td>
        </tr>
        <tr>
            <td class="a">A. 41</td> <!--Correct-->
            <td class="b">B. 52</td> 
        </tr>
        <tr>
            <td class="c">C. 61</td> 
            <td class="d">D. 34</td> 
        </tr>
    </table>
    <form action="" method="post">
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
</body>
</html>
