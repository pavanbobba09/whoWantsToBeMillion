<?php
session_start();

// Check if the answer is correct
$correct_answer = "B";
$user_answer = $_POST["answer"] ?? "none";

// If the answer is correct, proceed to the next question
if ($user_answer === $correct_answer) {
    $_SESSION["score"] += 1;
    $_SESSION["amount"] = 1000;
    header("Location: q2.php");
    exit();
} else {
    // If the answer is incorrect, redirect to the loser page
    header("Location: loser.php");
    exit();
}
?>
