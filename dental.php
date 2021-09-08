<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dental care</title>
<link href="nav_style.css" type="text/css" rel="stylesheet" />
<link href="services_style.css" type="text/css" rel="stylesheet" />

</head>

<body>
<?php include('nav_back.php');
?>

<div class="view_blog">
<div class="dental_image"><div class="overlay"></div></div>
<div class="heading"><h1>Dental Clinic in Punjab </h1></div>
<div class="dental">
<?php

include("db.php");

$a="select * from `services` where `service_type`='dental' ";
$b=mysqli_query($con,$a);

while($c=mysqli_fetch_array($b))
{
	?>
    <div class="hospital">
 <?php
	echo "<h2 style='text-transform:uppercase;'>".$c['district']."</h2>";
	echo "<p>".$c['name']."</p>";
	echo "<p>".$c['address']."</p>";
	echo "<p>Ph: ".$c['contact']."</p>";
	
	?>
    <div class="button"><?php 
	echo "<a href='map_view.php?sno=".$c['sno']."'>Directions</a>";
	?></div>
    </div>
	<?php
}
?>


</div>
</div>
</body>
</html>