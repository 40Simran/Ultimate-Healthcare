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
$title=validate($_POST['title']);
  $image=$_FILES['image']['name'];
$blog=blog($_POST['blog']);
$date=$_POST['pub_date']; 
$name=$_POST['name'];
  
$q="select * from `weight_loss_blog` where `title`='$title'";						
$data=mysqli_query($con,$q);
$row=mysqli_num_rows($data);
if($row>0){
	?>
    <script type="text/javascript">
	alert("Blog is already exist");
	window.location="weight_loss.php";
	</script>
    
    
    <?php
    }
else{
move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$image);

$query="insert into `weight_loss_blog` (`title`,`image`,`blog`,`date`,`name`)
values('$title','$image','$blog','$date','$name')";
$data=mysqli_query($con,$query);



if($data){
	header('location:weight_loss.php?msg=blog is uploaded');
	}
else{
	echo mysqli_error($con);
	}
}
}
else{
	header('location:weight_loss.php?msg=fill a form plz!');
	}

?>