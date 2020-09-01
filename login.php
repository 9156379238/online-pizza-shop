<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<div class="header">
		<h2>Login form</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" placeholder="Username" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="Password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
			<button type="submit" class="btn" name="admin">Admin</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>