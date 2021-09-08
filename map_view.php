<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Directions</title>
</head>

<body>
<?php

include("db.php");
$sno=$_GET['sno'];
$a="select * from `services` where `sno`='$sno'";
$b=mysqli_query($con,$a);

while($c=mysqli_fetch_array($b))
{
	
	
	echo $c['location'];
	
	
}
?>

</body>
</html>