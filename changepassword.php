<?php include('password1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<div class="header">
		<h2>Update password</h2>
	</div>
		

	<form method="post" action="password1.php">

		
		
		<div class="input-group">
			<label>old password</label>
			<input type="password" placeholder="Old Password" name="password_1" required >
			<span id="password_1" class="text-danger font-weight-bold"> </span>
		</div>
		<div class="input-group">
			<label>New Password</label>
			<input type="password" placeholder="New Password" name="npass" required >
			<span id="npass" class="text-danger font-weight-bold"> </span>
		</div>
        <div class="input-group">
			<label>Confirm Password</label>
			<input type="password" placeholder="Confirm Password" name="cpass" required >
			<span id="cpass" class="text-danger font-weight-bold"> </span>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="update_pass">Submit</button>
		</div>
		
	</form>





<!--
    <script type="text/javascript">
        function validation() {

           
            var pass = document.getElementById('password_1').value;
			var npass = document.getElementById('npass').value;
            var  cpass= document.getElementById('cpass').value;

         

			 if (password_1 == "") {
                document.getElementById('password_1').innerHTML = " ** Please fill the old password";

                return false;
            }
           
			if (npass == "") {
                document.getElementById('npass').innerHTML = " ** Please fill the confirmpassword field";
                return false;
            }

           



            if (cpass == "") {
                document.getElementById('cpass').innerHTML = " ** Please fill the confirmpassword field";
                return false;
            }
			if (npass != cpass) {
                document.getElementById('cpass').innerHTML = " ** Password does not match the confirm password";
                return false;
            }
		-->
</body>
</html>