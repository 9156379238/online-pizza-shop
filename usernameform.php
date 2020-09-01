
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<div class="header">
		<h2>update username</h2>
	</div>
	
	<form method="post" action="changepassword.php">

		
		
		<div class="input-group">
			<label>old username</label>
			<input type="text" placeholder="old username" name="old_username" >
		</div>
		<div class="input-group">
			<label>new username</label>
			<input type="text" placeholder="New username" name="new_username">
		</div>
       
		<div class="input-group">
			<button type="submit" class="btn" name="update_user">Submit</button>
		</div>
		
	</form>


</body>
</html>