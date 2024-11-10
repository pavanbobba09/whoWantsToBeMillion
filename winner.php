<?php
session_start();
include 'check.php';
$score = 10;
$amount = 1000000;
$username = $_SESSION["username"];
$password = $_SESSION["password"];
$_SESSION["score"] = $score;
$_SESSION["amount"] = 1000000;
$lines = file('user_data.txt');
$result = '';

foreach($lines as $line) {
    $data = explode(',', $line);
    if($data[0] == $username) {
        $result .= $username . "," . $password . "," . $score . "," . $amount . "\n";
    } else {
        $result .= $line;
    }
}

file_put_contents('user_data.txt', $result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>WINNER</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #ff9800, #ff5722);
            color: #fff;
            overflow: hidden;
        }
        .winnerDiv {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 90%;
            animation: scaleIn 1s ease-in-out;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px #ffeb3b;
        }
        h2 {
            font-size: 1.8rem;
            margin: 10px 0;
            color: #ffeb3b;
            text-shadow: 1px 1px #000;
        }
        .leaderboard {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            font-size: 1.2rem;
            color: #fff;
            background-color: #4caf50;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .leaderboard:hover {
            background-color: #388e3c;
        }
        @keyframes scaleIn {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        /* Confetti animation */
        .confetti {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 1000;
        }
        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ffeb3b;
            animation: fall 2.5s linear infinite;
        }
        @keyframes fall {
            0% { transform: translateY(0) rotate(0); }
            100% { transform: translateY(100vh) rotate(360deg); }
        }
    </style>
</head>

<body>
    <div class="confetti">
        <?php for($i = 0; $i < 100; $i++): ?>
            <div class="confetti-piece" style="left: <?= rand(0, 100) ?>%; animation-delay: <?= rand(0, 2000) / 1000 ?>s;"></div>
        <?php endfor; ?>
    </div>

    <div class="winnerDiv">
        <h1><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
        <img src="logo.png" alt="Millionaire Logo" style="max-width: 100%; height: auto;"><br/>
        <h2>Congratulations, <?= htmlspecialchars($_SESSION["username"]) ?>!</h2>
        <h2>YOU WON $1,000,000!</h2>
        <h2>YOU'RE A MILLIONAIRE!</h2>
        <a href="leaderboard.php" class="leaderboard">Go to the Leaderboard</a>
    </div>
</body>
</html>
