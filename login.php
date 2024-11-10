<?php
	session_start();
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		header('Location: home.php');
		exit();
	}
	else{
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<section>
		<h1 class="header"><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
		<img src="logo.png" ><br/>
	
		<div>
			<form action="login-submit.php" method="post" class='inputForm'>
                <h1 class="login">Login</h1>
				<label for="username">Username &nbsp</label>
				<input type="text" name="username" required=""><br><br>
		
				<label for="password">Password &nbsp</label>
				<input type="password" name="password" required=""><br><br>
		
				<button>Submit</button><br><br>
			</form>
            <a href="signup.php" class="registerLink">Register here</a>
		</div>
        
	</section>
	
</body>
</html>