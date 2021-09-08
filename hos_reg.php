<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hospital Sign Up</title>
<link href="css/reg_style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
function myfnx(){
	var name=document.forms['reg_form']['user_name'].value;
	var hos_name=document.forms['reg_form']['hos_name'].value;
	var number=document.forms['reg_form']['number'].value;
	var pass=document.forms['reg_form']['password'].value;
	var type=document.forms['reg_form']['type'].value;
	var city=document.forms['reg_form']['city'].value;
	var emailID = document.forms['reg_form']['email'].value;
    var email= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var x=email.test(emailID);
var plen=pass.length;
var nlen=number.length;

if(name==null || name=="")
{
document.getElementById("user_error").innerHTML="please enter correct username";
document.forms['reg_form']['user_name'].focus();
return false;
}
if(hos_name==null || hos_name==""){
document.getElementById("hos_error").innerHTML="please! enter your hospital's name";
document.forms['reg_form']['hos_name'].focus();
return false;
}
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
if(number==null || number=="")
{
	alert("please enter phone number");
	return false;
}
else if(nlen>11 || nlen<9)
{
	alert("Enter valid phone number");
	return false;
}
if(type=="Type")
{
	alert("Please Select Type");
	return false;
}
if(city=="City")
{
	alert("Please Select City");
	return false;
}
if(emailID==null||emailID==""||!x)
{
document.getElementById("email_error").innerHTML="enter correct email";
document.forms['reg_form']['email'].focus();
return false;
}
return (true);


}
</script>


</head>

<body>
 <div class="register">

         <div class="row">
                    <h2>SignUp</h2></div>
                    <div class="row_tag">
                    <h3>Fill In the Form for Your Hospital Registration!</h3>
            </div>
                 <div class="form_container">
                 <div class="form"> 
                 <h2>Registration</h2>  
           <form action="hos_register_db.php" method="post" name="reg_form" enctype="multipart/form-data" onsubmit="return myfnx()">
           			<div class="username"> <input type="text" name="user_name" placeholder="Username" /></div><span id="user_error"></span>
                    <div class="hosname"> <input type="text" name="hos_name" placeholder="Hospital's Name" /></div><span id="hos_error"></span>
                      <div class="password">
                        <input type="password" name="password" placeholder="Password"/></div>
                  <div class="address"> <input type="text" name="address" placeholder="Hospital's Complete Address" /></div><span id="address_error"></span>
                  <div class="img">
                        <input type="file" name="img"/></div> 
                 <div class="type">       <select name="type"><option value="Type">Select Type</option>
                        <option value="Government">Government</option>
                        <option value="Private">Private</option></select></div>
                    <div class="city"> <select name="city"><option value="City">Select City</option>
                        <option value="Amritsar">Amritsar</option>
                        <option value="Chandigarh">Chandigarh</option>
                         <option value="Ludhiana">Ludhiana</option>
                          <option value="Mohali">Mohali</option>
                           <option value="Patiala">Patiala</option></select></div>
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
                <a href="hos_login.php">Already Registered? Login Here....</a> 
          </div>
     
</div>
      

</body>
</html>
