<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>home page</h2>
	</div>
	<div class="content">
		<?php if(isset($_SESSION['success'])):?>
			<div class="error success">
				<h3>
					<?php
					 echo $_SESSION['success'];
				    unset($_SESSION['success']);
				    ?>
					
				</h3>
			</div>
		<?php endif ?>
		<?php if(isset($_SESSION['firstname'])):?>
			<p>welcome <strong><?php echo $_SESSION['firstname'];?></strong></p>
			<p><a href="index.php?logout='1'"style="color:red";>logout</a></p>
		<?php endif ?>
	</div>


</body>
</html>