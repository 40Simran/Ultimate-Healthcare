<?php
session_start();
include 'lib.php';

$id= $_SESSION['id'];
$username = $_SESSION['username'];

       $contact = $_POST['number'];
       $email = $_POST['email'];
       $type = $_POST['type'];
       $address = $_POST['address'];
	   
	   
$query="UPDATE `hos_reg` SET `number`='$contact',`email`='$email',`type`='$type',`address`='$address' WHERE `id`='$id'";
$data=mysqli_query($con,$query);
		
if($data)
        { 
		?>
		    <script type="text/javascript">
            alert("Information Changed Successfully!!!");
            window.location="profileinfo.php";
             </script>
         <?php

		
		 }
?>