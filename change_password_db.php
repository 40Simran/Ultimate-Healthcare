<?php
session_start();
include('db.php');

$id= $_SESSION['id'];
$username = $_SESSION['username'];

        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $query1 ="SELECT `password` FROM `hos_reg` WHERE `username`='$username'";
		$data1=mysqli_query($con,$query1);
        if(!$password)
        {
?>
		    <script type="text/javascript">
            alert("You have entered wrong password");
            window.location="changepass.php";
             </script>
<?php
        }
        else if($newpassword==$confirmnewpassword)
        {
			$query="UPDATE `hos_reg` SET `password`='$newpassword' where `username`='$username'";
		$data=mysqli_query($con,$query);
        if($data)
        { 
?>
		    <script type="text/javascript">
            alert("Password changed successfully!! Login to continue...");
            window.location="hos_login.php";
             </script>
<?php
        }
		}
       else
        {
?>
		    <script type="text/javascript">
            alert("Passwords donot match");
            window.location="changepass.php";
             </script>
<?php

		}
?>