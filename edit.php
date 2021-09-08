<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit info</title>
<link href="css/profileinfo.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
function myfnx(){

}
</script>

</head>

<body>
<div class="main">
<?php
session_start();
include('lib.php');
if($_SESSION['id']){
	echo "<h2 align='center' id='welcome'>Welcome  ".$_SESSION['username']."</h2>";}
$id= $_SESSION['id'];	
$query="SELECT * FROM `hos_reg` WHERE `id`='$id'";
$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);

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
 <h3 align="center">Edit Information</h3>
   <form method="POST" action="edit_db.php" enctype="multipart/form-data" name="form" onsubmit="return myfnx()">
    <table>
    <tr>
    <td>EDIT CONTACT NUMBER:</td>
    <td><input type="number"  name="number" value="<?php echo '0'.$row['number'] ?>"></td>
    </tr>
  <tr>
    <td>EDIT YOUR EMAIL ADDRESS:</td>
    <td><input type="email"  name="email" value="<?php echo $row['email'] ?>"></td>
    </tr>
    <tr>
   <td>EDIT HOSPITAL TYPE:</td>
   <td><select  name="type" >
   <option  value="<?php echo $row['type'] ?>"><?php echo $row['type'] ?></option>
   <option value="Private">Private</option>
   <option value="Government">Government</option>
   </select></td>
    </tr>
     <td>EDIT HOSPITAL ADDRESS:</td>
   <td><input type="text"  name="address"  value="<?php echo $row['address'] ?>"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update" id="next">
    </form>
   </div>
<h3><a href='logout.php' id='logout'>Logout</a></h3>
</div>

</body>
</html>