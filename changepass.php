<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>change password</title>
<link href="css/profileinfo.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
function myfnx(){
	var pass=document.forms['form']['newpassword'].value;
	var plen=pass.length;
  
if(pass==null || pass=="" )
{
	alert("please! enter password");
	return false;
}
else if(plen<4)
{
	alert("password length should be minimum 5 characters!!");
	return false;
}
}
</script>

</head>

<body>
<div class="main">
<?php
session_start();
include('db.php');
if($_SESSION['id']){
	echo "<h2 align='center' id='welcome'>Welcome  ".$_SESSION['username']."</h2>";}
?>
<div class="nav">
<ul>
<li><a href="profile.php">PROFILE</a></li>
<li><a href="inbox.php">INBOX</a></li>
<li><a href="profileinfo.php">EDIT PROFILE</a></li>
<li><a href="changepass.php">CHANGE PASSWORD</a></li>
<lsi><a href="logout.php">LOGOUT</a></li>
</ul>
</div>
<div class="container">
 <h3 align="center">Change Password</h3>
   <form method="POST" action="change_password_db.php" enctype="multipart/form-data" name="form" onsubmit="return myfnx()">
    <table>
    <tr>
    <td>ENTER YOUR EXISTING PASSWORD:</td>
    <td><input type="password"  name="password"></td>
    </tr>
  <tr>
    <td>ENTER YOUR NEW PASSWORD:</td>
    <td><input type="password"  name="newpassword"></td>
    </tr>
    <tr>
   <td>RE-ENTER YOUR NEW PASSWORD:</td>
   <td><input type="password"  name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update" id="next">
    </form>
   </div>
<h3><a href='logout.php' id='logout'>Logout</a></h3>
</div>

</body><!---->
</html>