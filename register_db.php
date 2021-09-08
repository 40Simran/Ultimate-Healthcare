<?php
if($_POST['submit']){
	
include('db.php');


function validate($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
$u=validate($_POST['name']);
$pass=validate($_POST['password']);
$num=validate($_POST['number']);
$dob=$_POST['dob'];
$gen=$_POST['sex'];
$email=$_POST['email'];

  


$query="insert into `register_patient`(`username`,`password`,`dob`,`sex`,`phone_no`,`email`)
values('$u','$pass','$dob','$gen','$num','$email')";
$data=mysqli_query($con,$query);


if($data){
	header('location:login.php?msg=data is upload');
	}
else{
	echo mysqli_error();
	}
}

else{
	header('location:register.php?msg=fill a form plz!');
	}

?>