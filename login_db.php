<?php
session_start();
if($_POST['submit']){
include('db.php');

$user=$_POST['username'];
$pass=$_POST['pass'];


$query="select * from `register_patient` where `username`='$user' || `email`='$user'";
$data=mysqli_query($con,$query);
$rows=mysqli_fetch_array($data);
$row=mysqli_num_rows($data);
if($row>0)
{
if($rows['password']==$pass){

echo "welcome".$user;
$_SESSION['sno']=$rows['sno'];
$_SESSION['username']=$rows['username'];
header('location:patient_profile.php');
}
else{
?>
<script type="text/javascript">
alert("Incorrect Username/Password");
window.location="login.php";
</script>

<?php
}
}
else{
	?>
<script type="text/javascript">
alert("Enter the Username and Password");
window.location="login.php";
</script>

<?php
}

}
else{
	echo mysqli_error()."error";
}

?>