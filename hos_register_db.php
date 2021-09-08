
<?php
if($_POST['submit']){

include('db.php');

function validate($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
if(empty($_POST['user_name'])|| empty($_POST['password'])){
		header('location:hos_reg.php?msg=Plz fill the form');
		
	}
else{

$username=validate($_POST['user_name']);
$hosname=$_POST['hos_name'];
$pass=validate($_POST['password']);
$address=$_POST['address'];
$image=$_FILES['img']['name'];
$type=$_POST['type'];
$city=$_POST['city'];
$contact=validate($_POST['number']);
$email=$_POST['email'];
$q="select * from `hos_reg` where `username`='$username'";						
$data=mysqli_query($con,$q);
$row=mysqli_num_rows($data);
if($row>0){
	?>
    <script type="text/javascript">
	alert("Username already exist");
		window.location="hos_reg.php";
	</script>
    
    
    <?php
    }

else{
move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$image);
$query=("INSERT INTO `hos_reg`
(`username`,`hosname`,`password`,`image`,`type`,`address`,`city`,`number`,`email`)VALUES('$username','$hosname','$pass','$image',
'$type','$address','$city','$contact','$email')");
$data=mysqli_query($con,$query);

if($data)
{
	header('location:hos_reg.php?msg=ThanQ for Registering');
}
else{
	echo mysqli_error();
	}
}
}
}
else{
	header('location:hos_reg.php?msg=fill a form plz!');
	}


?>
