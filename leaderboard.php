<?php
$users = file("user_data.txt");
$userLine = array();
$usernScore = array();
$leaderboardCount = 0;
$lengthOfLeaderboard = 5;

foreach ($users as $line) {
    $userLine[] = explode(",", $line);

    foreach ($userLine as $user) {
        $usernScore[$user[0]] = $user[2];
    }
}
arsort($usernScore, SORT_NATURAL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leaderboard</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="leaderboard.css" type="text/css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4b79a1, #283e51);
            color: #fff;
        }
        h1 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 20px;
            color: #ffeb3b;
        }
        #container {
            width: 60%;
            border-collapse: collapse;
            background-color: #2c3e50;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            overflow: hidden;
        }
        caption {
            font-size: 1.8rem;
            font-weight: bold;
            padding: 15px;
            color: #ffeb3b;
        }
        .head {
            background-color: #34495e;
            color: #ecf0f1;
            font-weight: bold;
            text-align: left;
        }
        .head th {
            padding: 12px 20px;
        }
        .row {
            transition: background-color 0.3s;
        }
        .row:hover {
            background-color: #3d566e;
        }
        .row td {
            padding: 10px 20px;
            text-align: left;
            border-bottom: 1px solid #455a64;
        }
        .utButtons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .utButtons button {
            background-color: #4caf50;
            color: #fff;
            font-size: 1rem;
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
        }
        .utButtons button:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div>
        <h1><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
        <img src="logo.png" alt="Millionaire Logo" style="display: block; margin: 0 auto 20px;">
        
        <table id="container">
            <caption>Leaderboard</caption>
            <tbody>
                <tr class="head">
                    <th>Rank</th>
                    <th>Participants</th>
                    <th>Scores</th>
                </tr>
                <?php
                foreach ($usernScore as $key => $value) {
                    $leaderboardCount++;
                    echo "
                    <tr class='row'>
                        <td class='name'>$leaderboardCount</td>
                        <td class='rank'>$key</td>
                        <td class='score'>$value</td>
                    </tr>";
                    if ($leaderboardCount == $lengthOfLeaderboard) {
                        break;
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="utButtons">
            <button onclick="document.location='home.php'">Go Back</button>
            <button onclick="document.location='logout.php'">Log Out</button>
        </div>
    </div>
</body>
</html>
