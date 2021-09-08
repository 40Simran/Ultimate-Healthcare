<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>profile</title>
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
<li><a href="profileinfo.php">VIEW PROFILE INFO</a></li>
<li><a href="changepass.php">CHANGE PASSWORD</a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<div class="container">
 <h3 align="center">Edit Information</h3>

<?php
$id= $_SESSION['id'];
$query="SELECT * FROM `hos_reg` WHERE `id`='$id'";
$data=mysqli_query($con,$query);
echo "<table  cellpadding='8'>";
while($row=mysqli_fetch_array($data))
{
	echo "<tr><td><label>USER NAME</label></td><td>".$row['username']."</td></tr>";
	echo "<tr><td><label>HOSPITAL NAME</label></td><td>".$row['hosname']."</td></tr>";
	echo "<tr><td><label>CONTACT</label></td><td>"."0".$row['number']."</td><td>
	<label><a href='edit.php' id='edit'>Edit</a></label></td></tr>";
	echo "<tr><td><label>EMAIL</label></td><td>".$row['email']."</td><td>
	<label><a href='edit.php' id='edit'>Edit</a></label></td></tr>";
	echo "<tr><td><label>TYPE</label></td><td> ".$row['type']."</td><td>
	<label><a href='edit.php' id='edit'>Edit</a></label></td></tr>";
	echo "<tr><td><label>CITY</label></td><td>".$row['city']."</td></tr>";
	echo "<tr><td><label>ADDRESS</label></td><td>".$row['address']."</td><td>
	<label><a href='edit.php' id='edit'>Edit</a></label></td></tr>";	
}
echo "</table>";
}
else
{
	header('location:hos_login.php?msg=Plz login first');
}
?>
</div>
<h3><a href='logout.php' id='logout'>Logout</a></h3>
</div>


</body>
</html>