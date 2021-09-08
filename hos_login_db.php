<?php
session_start();
if($_POST['submit']){
	include('db.php');
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	
	$query="SELECT * FROM `hos_reg` WHERE `username`='$user' ";
	$data=mysqli_query($con,$query);
	$row=mysqli_fetch_array($data);
	$num_rows=mysqli_num_rows($data);
	
	if($num_rows>0){
		if($row['password']==$pass){
		  $msg= "Welcome  ".$user;
		  $_SESSION['id']=$row['id'];
		  $_SESSION['username']=$row['username'];
		  header('location:profile.php?'.$msg);
		}
		else
		{
?>
			<script type="text/javascript">
            alert("Invalid Username/Password");
             window.location="hos_login.php";
             </script>
<?php
		}
	}
	else
	{
?>
		   <script type="text/javascript">
            alert("Incorrect Username/Password");
             window.location="hos_login.php";
             </script>
<?php
	}
}
else
{
	echo "error";
}

?>
