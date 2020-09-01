<?php 
	session_start();

	// variable declaration
	$password_1 = "";
	$new_password    = "";
	$password_2="";
	$chg_pwd="";
	$chg_mysql_pwd1="";
	$data_pwd="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root','', 'registration');

	if(isset($_POST['update_pass']))
		{
			
			$username= mysqli_real_escape_string($db, $_POST['username']);
			$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
			$new_password = mysqli_real_escape_string($db, $_POST['new_password']);
			$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
			$new_encrypt_password=md5($new_password);
			$new_encrypt_confirm_password=md5($password_2);
			$old_encrypt_password =md5($password_1);
			 
			
			//$result=mysqli_query($db,"SELECT password FROM users WHERE username='$username'");

			if (empty($username)) {echo nl2br("username required\n");}
			if (empty($password_1)) {echo nl2br( "old password is required\n");}
			if (empty($new_password)){echo "new password required";}
			if (empty($password_2)){echo "confirm username required";}

			


			
			

		$query = "SELECT * FROM users WHERE username='$username' AND password='$old_encrypt_password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				if($new_encrypt_password == $new_encrypt_confirm_password){
				$update = "UPDATE users SET password = '$new_encrypt_password' WHERE username = '$username'";
				mysqli_query($db, $update);
				header('location: homepage1.php');
				}
				else{
					echo nl2br("newPassword & confirmPassword doesn't match\n");
				}
			}else {
				array_push($errors, "Wrong username/password combination");
				echo nl2br ("Username & OldPassword doesn't matched\n");
			}

			
			
	  
			
		}
	

	
	

