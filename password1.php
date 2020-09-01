<?php 
	session_start();

//mysql_connect("localhost","root", "") or die(mysql_error());
//mysql_select_db("registration") or die(mysql_error());
$db = mysqli_connect('localhost', 'root', '', 'registration');


		



if($_POST)
{
    $pass     = $_POST['password_1'];
    $npass    = $_POST['npass'];
    $cpass    = $_POST['cpass'];
    $user     = $_SESSION['username']; 

    if($npass==$cpass)
    {
       $result=mysqli_query($db,"SELECT *from users where username='" .$_SESSION["username"] ."'");
       $row = mysqli_fetch_array($result);
    
    
      if($pass==$row["password"])
       {
        $update = mysqli_query($db,"UPDATE users SET password ='".$npass."' WHERE username='".$user."'");
        echo "<script>alert('password changed'); window.location='homepage1.php'</script>";
       }
      else
       {
         echo "<script>alert('incorrect OldPassword'); window.location='changepassword.php'</script>";
       } 
    }
    else
    {
          echo "<script>alert('new password & conform password doesnt match.'); window.location='changepassword.php'</script>";
    }
}  

   ?>