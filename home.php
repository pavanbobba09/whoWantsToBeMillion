<?php 
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WHO WANTS TO BE A MILLIONAIRE?</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        .header {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }

        .welcome {
            font-size: 24px;
            color: #3498db;
            margin-top: 10px;
        }

        .rules {
            font-size: 16px;
            color: #555;
            margin: 20px 0;
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 5px solid #3498db;
            border-radius: 5px;
            text-align: left;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .button {
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="header"><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
        <img src="logo.png" alt="Game Logo">
        <h1 class="welcome">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>

        <div class="rules">
            <b>RULES:</b><br>
            Answer 10 questions to become a MILLIONAIRE!<br>
            Any wrong answer, and you lose the chance to become a millionaire!
        </div>

        <div class="button-container">
            <button onclick="document.location='questions.php'" class="button">Questions</button>
            <button onclick="document.location='leaderboard.php'" class="button">Leaderboard</button>
            <button onclick="document.location='logout.php'" class="button">Log Out</button>
        </div>
    </div>
</body>
</html>
