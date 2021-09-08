<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>services</title>
<link href="service_style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
function myfnx(){
	var type=document.forms['service_form']['type'].value;
	var city=document.forms['service_form']['city'].value;
var name=document.forms['service_form']['name'].value;
	if(type=="none"){
document.getElementById("user_error").innerHTML="please! select type of service";
document.forms['service_form']['city'].focus();
return false;
}
if(city==null || city=="")
{
	alert("enter District plz!!!");
	return false;
}
if(name==null || name=="")
{
	alert("enter Hospital name!");
	return false;
}
}
</script>
</head>

<body>
<?php
include("home.php");
?>
  <div id="templatemo_content" style="height: 500px;"><center>
  
  <div class="form">
  <h1>Add Service Hospital</h1>
  <form action="service_db.php"method="post" name="service_form"  onsubmit="return myfnx()">
  <div class="type">Select Type-
  <select name="type">
  <option value="none">--NONE--</option>
  <option value="dental">dental clinic</option>
  <option value="ent">ent treatment</option>
  <option value="eyes">eyes care</option>
  <option value="heart">heart surgery</option>
  <option value="skin">skin care</option>
  <option value="bone">bone specilist</option>
  </select><span id="user_error"></span></div>
  <div class="district">
  <input type="text" name="city" placeholder="Select District" />
  <input type="text" name="name" placeholder="Hospital Name" style="margin-left:20px;"/></div>
  <div class="address"><textarea name="address" placeholder="Address" cols="3" rows="3"/></textarea>
  </div>
  <div class="number"><input type="number" name="phone" placeholder="Contact No."/></div>
  <div class="map">
  <input type="text" name="map" placeholder="enter map source"></div>
  <div class="button"><input type="submit" name="submit" value="ADD" /></div>
  </form></div>
  </center></div>


</body>
</html>