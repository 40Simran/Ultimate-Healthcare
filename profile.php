<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>your profile</title>
<link href="css/profileinfo.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<div class="main">
<?php
session_start();
include('db.php');
if($_SESSION['id']){
	echo "<h2 align='center' id='welcome'>Welcome  ".$_SESSION['username']."</h2>";
?>
<div class="nav">
<ul>
<li><a href="profile.php">PROFILE</a></li>
<li><a href="inbox.php">INBOX</a></li>
<li><a href="profileinfo.php">EDIT PROFILE</a></li>
<li><a href="changepass.php">CHANGE PASSWORD</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<div class="container">
 <h3 align="center">Your Profile</h3>
  <div class="images">
<?php
$id= $_SESSION['id'];
$query="SELECT * FROM `hos_reg` WHERE `id`='$id'";
$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);
echo "<img src='uploads/".$row['image']."'height='200px' width='200px' id='imgview'/>";
?>
</div>
<form action="profile_db.php" method="post" enctype="multipart/form-data" 
id="formimageedit" >
<input type="file" name="image" />
<input type="submit" name="submit" value="UPDATE" id="update"  />
</form>
<div class="info">
<p><?php echo $row['hosname'] ?></p>
<p><?php echo $row['address'] ?></p>
<p><?php echo $row['email'] ?></p>
<p><?php echo "0".$row['number'] ?></p>
</div>
<?php
}
else
{
	header('location:hos_login.php?msg=Plz login first');
}
?>   </div>
<h3><a href='logout.php' id='logout'>Logout</a></h3>
</div>

</body>
</html>