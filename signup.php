<!DOCTYPE html>
<html>
<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<section>
		<h1 class="header"><i>WHO WANTS TO BE A MILLIONAIRE?</i></h1>
		<img src="logo.png"><br/>

		
		<div>
			<form action="signup-submit.php" method="post" class="inputForm">
				<h1 class="login">Register</h1>
				<table>
					<tr>
						<td class="label">Username</td>
						<td><input type="text" name="username" required="" class="input"></td>
					</tr>
					<tr>
						<td class="label">Password</td>
						<td><input type="password" name="password1" required="" class="input"></td>
					</tr>
					<tr>
						<td class="label">Confirm Password</td>
						<td><input type="password" name="password2" required="" class="input"></td>
					</tr>
				</table>
				<br>
					
				<button>Submit</button>
				<br><br>
			</form>
			<a href="login.php" class="registerLink">Already Registered? Login here</a>
		</div>
	</section>
	
</body>
</html>