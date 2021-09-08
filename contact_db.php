<?php
if($_POST['submit']){
	
include('db.php');


function validate($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
$f=validate($_POST['name']);
$num=validate($_POST['number']);
$email=$_POST['email']; 
$msg=$_POST['message'];
  


$query="insert into `contact`(`full_name`,`phone_no`,`email`,`message`)
values('$f','$num','$email','$msg')";
$data=mysqli_query($con,$query);







if($data){
	header('location:index.php?msg=request is send');
	}
else{
	echo mysqli_error();
	}
}

else{
	header('location:index.php?msg=fill a form plz!');
	}

?>