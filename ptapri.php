<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patiala Private Hospitals</title>
<link href="css/amrgovstyle.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<div class="hospital">
<div class="hosheader"><h1 id="hos">HOSPITALS</h1><br/>
<p id="govhos">Top Private Hospitals in Patiala.</p></div>
<a href="govhosp.php"><input type="button" value="BACK"/></a>

<?php
session_start();
include('db.php');
$query="SELECT * FROM `hos_reg` where `city`='Patiala' && `type`='Private'";
$data=mysqli_query($con,$query);

while($row=mysqli_fetch_array($data))
{
?>
 <div class="hospital_list">
 <?php
	echo "<img src='uploads/".$row['image']."'height='100px' width='100px'/>";
	echo "<h4>"."<a href='hospital_view.php'>".$row['hosname']."</a>"."</h4>";
	echo "<h4>".$row['address']."</h4>";
	echo "<h4>"."0".$row['number']."</h4>";
?>
</div>
<?php 
} ?>


</div>
</body>
</html>