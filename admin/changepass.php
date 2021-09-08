<?php
include("home.php");
$user=$_SESSION['id'];
if(isset($_POST['change']))
{
$password=$_POST['newpass'];
include("db.php");
$query="update `admin` set `password`='".$password."' where username='".$user."'";
mysqli_query($con,$query);
?>
<script type="text/javascript">
alert("Your password has bees successfully changed");
window.location="home.php";
</script>
<?php
}

?>
<center>
<h1>Change Password</h1>
<br/>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
<table>
<tr>
<td> Old Password </td>
<td> : </td>
<td> <input type="password" name="oldpass" id="oldpass" /> </td>
</tr>
<td> New Password </td>
<td> : </td>
<td> <input type="password" name="newpass" id="newpass" /> </td>
</tr>
<td>Confirm Password </td>
<td> : </td>
<td> <input type="password" name="confpass" id="confpass" /> </td>
</tr>
<td> <input type="submit" name="change" id="change" value="change" /> </td>
</tr>
</table>
</form>
</center>
