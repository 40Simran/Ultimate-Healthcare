<?php
if($_POST['submit']){
	
include('db.php');


function validate($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
function blog($d){
	$d=mysql_real_escape_string($d);
	return $d;}
	
$city=validate($_POST['city']);
$name=blog($_POST['name']);
$type=$_POST['type']; 
$add=blog($_POST['address']);
$phn=$_POST['phone'];
$map=$_POST['map'];
  
$q="select * from `services` where `name` and `district`='$name','$city'";						
$data=mysqli_query($con,$q);
$row=mysqli_num_rows($data);
if($row>0){
	?>
    <script type="text/javascript">
	alert("Hospital is already exist");
	window.location="services.php";
	</script>
    
    
    <?php
    }
else{

$query="insert into `services` (`service_type`,`district`,`name`,
`address`,`contact`,`location`)
values('$type','$city','$name','$add','$phn','$map')";
$data=mysqli_query($con,$query);



if($data){
	header('location:services.php?msg=hospital is uploaded');
	}
else{
	echo mysqli_error($con);
	}
}
}
else{
	header('location:services.php?msg=first fill the service form!');
	}

?>