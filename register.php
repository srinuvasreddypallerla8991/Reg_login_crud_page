<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>user registration system using php and mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form action="register.php"method="post">
		<!--display validation  errors here-->
		<?php include('errors.php');?>
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname">
		</div>
		<div class="input-group">
			<label>Middle Name</label>
			<input type="text" name="middlename">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>Mobile</label>
			<input type="text" name="mobile">
		</div>
		<div class="input-group">
			<label>Gender</label>
			<select name="gender">
				<option value="">-------- </option>
				<option value="male">male</option>
				<option value="female">female</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password2">
		</div>
		<div class="input-group">
			<button type="submit"name="register"class="btn">Register</button>
			
		</div>
		
		<p>Already Member ?<a href="loginn.php">Sign In</p>
	</form>


</body>
</html>