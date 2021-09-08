<?php
session_start();
include('db.php');
$reciever=$_SESSION['username'];
$sender=$_POST['email'];
$message=$_POST['message'];
$query="INSERT INTO `messages`(`sender`,`reciever`,`message`) VALUES ('$sender','$reciever','$message')";
$data=mysqli_query($con,$query);
if($data)
{
	echo("sent");
}
?>
