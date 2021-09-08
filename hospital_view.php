<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Information</title>
<link href="css/hos_view.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<div class="main">
<div class="container_map_formaddr">
<div class="map"></div>
<div class="container_form_addr">
<div class="left_form">
<h2>send your queries to us</h2>
<table width="100%" cellspacing="10px">
<form action="hos_view_db.php" method="post" name="myform" enctype="multipart/form-data" onsubmit="return myf()">
<tr><td><label id="left">First Name</label><label id="right1">Last Name</label></td></tr>
<tr><td><input type="text" name="firstname"  id="c"/>
<input type="text" name="lastname" id="d"/></td></tr>
<tr><td><label id="left">E-mail Address</label><label id="right2">Phone Number</label></td></tr>
<tr><td><input type="email" name="email"  id="e"/>
<input type="number" name="number" id="f"/></td></tr>
<tr><td><label id="left">message</label></td></tr>
<tr><td><input type="text" name="message" id="g"/></td></tr>
<tr><td><input type="submit" value="Submit" name="submit" id="button"/> </td></tr>
</form></table>
</div>
<div class="right_address">
<h2>ADDRESS</h2>
<div class="addr">
<?php
session_start();
include('lib.php');
$id=$_SESSION['id'];
$query="SELECT * FROM `hos_reg` where `id`='$id'";
$data=mysqli_query($con,$query);

echo "<table width='100%'>";
while($row=mysqli_fetch_array($data))
{
	echo "<tr><td>"."<img src='images/2.png' height='15px' width='20px'/>".$row['address']."</td></tr>";
	echo "<tr><td>"."<img src='images/email.jpg' height='15px' width='15px'/>".$row['email']."</td></tr>";
	echo "<tr><td>"."<img src='images/phone.jpg' height='15px' width='20px'/>"."0".$row['number']."</td></tr>";
}
echo "</table>";
?>

</div>
</div>
</div>
</div>
</div>
</body>
</html>