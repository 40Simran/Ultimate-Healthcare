<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>patient</title>
<link href="reg_style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
function myfnx(){
	var e=document.forms['reg_form']['email'].value;
var atpo=e.search("@");
var dotpo=e.lastIndexOf(".");
	var name=document.forms['reg_form']['name'].value;
	var number=document.forms['reg_form']['number'].value;
	var pass=document.forms['reg_form']['password'].value;
var plen=pass.length;
var nlen=number.length;

	if(name==null || name==""){
document.getElementById("user_error").innerHTML="please! enter a full name";
document.forms['reg_form']['name'].focus();
return false;
}
if(pass==null || pass=="")
{
	alert("please! enter password");
	return false;
}
else if(plen<4)
{
	alert("password length is too weak!!");
	return false;
}
if(number==null || number=="")
{
	alert("please! enter a phone number");
	return false;
}
else if(nlen<10)
{
	alert("Enter valid phone number");
	return false;
}

if(e==null || e==""){
	document.getElementById("email_error").innerHTML="For response! Fill email";
	document.forms['reg_form']['email'].focus();
	return false;

	}
else if(atpo<1 || dotpo-atpo<2 || dotpo+2>=e.length){
	document.getElementById("email_error").innerHTML="fill valid email";
	document.forms['reg_form']['email'].focus();
	return false;
	}

}
</script>


</head>

<body>
<?php include('navigation_bar.php');?>
 <div class="register">

         <div class="row">
                    <h2>SignUp</h2></div>
                    <div class="row_tag">
                    <h3>Fill In the Form for information or a meeting!</h3>
            </div>
                 <div class="form_container">
                 <div class="form"> 
                 <h2>Registration</h2>  
           <form action="register_db.php" method="post" name="reg_form" onsubmit="return myfnx()">
           			<div class="name"> <input type="text" name="name" placeholder="Full Name or Username" /></div><span id="user_error"></span>
                      <div class="password">
                        <input type="password" name="password" placeholder="***********"/></div>
                 
                  <div class="dob">
                        <input type="text" name="dob" placeholder="Date of Birth" /></div> 
                 <div class="sex">       <select name="sex"><option value="Sex">Sex</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Child">Child</option></select></div>
                    <div class="number">
                   <input type="number" name="number" placeholder="Phone Number" /></div>
                    <div class="email">
                        <input type="email" name="email" placeholder="E-Mail" /></div>
                        <span id="email_error"></span>       
                      
                      <div class="button">
                        <input type="submit" name="submit" value="REGISTER" />
                   </div>
                    </form>
                </div>
          </div>
      
</div>
      

</body>
</html>
