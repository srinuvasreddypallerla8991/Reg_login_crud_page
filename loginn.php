<?php include('server.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>user registration system using php and mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="header">
		<h2>login</h2>
	</div>
	<form action="loginn.php"method="post">
		<!--display validation  errors here-->
		<?php include('errors.php');?>
		
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit"name="login"class="btn">Login</button>
		</div>
		<p>Not Yet Member ?<a href="register.php">Sign Up</p>
	</form>


</body>
</html>