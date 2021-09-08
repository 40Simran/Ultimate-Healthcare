<?php

session_start();
if($_POST['submit']){
include('db.php');

$id= $_SESSION['id'];


if($_SESSION['id']){

$image=$_FILES['image']['name'];
if($image==null || $image=="")
{
?>
<script type="text/javascript">
            alert("Image is not selected!!");
            window.location="profile.php";
             </script>
<?php
}
else{
$query="UPDATE `hos_reg` SET `image` = '$image' WHERE `id` ='$id'";
$data=mysqli_query($con,$query);
$data1=move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$image);
if($data1)
{
	?>
	        <script type="text/javascript">
            alert("Update Successful!!");
            window.location="profile.php";
             </script>
             <?php
}
}
}
}
?>
