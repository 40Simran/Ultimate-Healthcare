<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post-pregnancy</title>
<link href="css/blog_style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
function myfnx(){
	var title=document.forms['pregnancy_form']['title'].value;
	var blog=document.forms['pregnancy_form']['blog'].value;
var blen=blog.length;

	if(title==null || title==""){
document.getElementById("user_error").innerHTML="please! enter the title name";
document.forms['pregnancy_form']['title'].focus();
return false;
}
if(blog==null || blog=="")
{
	alert("empty blog!!!");
	return false;
}
else if(blen<100)
{
	alert("blog is too short!!");
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
  <h1>Post pregnancy Blog</h1>
  <form action="pregnancy_db.php"method="post" name="pregnancy_form" enctype="multipart/form-data" onsubmit="return myfnx()">
  <div class="title"><input type="text" name="title" placeholder="Title Name"/><span id="user_error"></span></div>
  <div class="image"><input type="file" name="image"  /></div>
  <div class="blog"><textarea name="blog" scroll></textarea></div>
  <div class="publish_by"><input type="date" name="pub_date" />
  <input type="text" name="name" placeholder="publisher"/>
  </div>
  <div class="button"><input type="submit" name="submit" value="upload" /></div>
  </form></div>
  </center></div>


</body>
</html>