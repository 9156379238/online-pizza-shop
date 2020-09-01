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
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	if(isset($_POST['update_user']))
		{
            $old_username= mysqli_real_escape_string($db, $_POST['old_username']);
			
			$new_username= mysqli_real_escape_string($db, $_POST['new_username']);
			
			
			//$result=mysqli_query($db,"SELECT password FROM users WHERE username='$username'");

			
				$sql=mysqli_query($db,"UPDATE users SET username='$new_username' WHERE username ='$old_username'");
				echo "<script>alert('Username changed'); window.location='homepage1.php'</script>";
		}

?>











