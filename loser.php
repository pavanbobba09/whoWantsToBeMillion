<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game Over</title>
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
            max-width: 400px;
            width: 100%;
        }

        .header {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .message {
            font-size: 20px;
            color: #e74c3c;
            margin: 20px 0;
            font-weight: bold;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .button-container {
            margin-top: 20px;
        }

        .back-button {
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="header"><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
        <img src="logo.png" alt="Game Logo"><br/>
        <h2 class="message">You lost. Good luck next time!</h2>
        
        <div class="button-container">
            <a href="login.php" class="back-button">Click here to go back to the login page</a>
        </div>
    </div>
</body>
</html>
