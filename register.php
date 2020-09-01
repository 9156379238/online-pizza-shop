<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    
</head>
<body>

	<div class="header">
		<h2 >Register form</h2>
    </div>
	<form method="post" action="register.php">
	

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
			<span id="user" class="text-danger font-weight-bold"> </span>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
			<span id="email" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="input-group">
			<label>Phone no</label>
			<input type="tel" name="phoneno"  class="form-control" placeholder="Phoneno">

<span id="phoneno" class="text-danger font-weight-bold"> </span>
</div>
       
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="Password" name="password_1" class="form-control">
			<span id="password" class="text-danger font-weight-bold"> </span>
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" placeholder="Confirm Password" name="password_2" class="form-control">
		    <span id="conpass" class="text-danger font-weight-bold"> </span>
		</div>
		<div class="input-group">
			<button type="submit"  class="btn" name="reg_user" >Register</button>
        </div>
        
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

    </body>
</html>