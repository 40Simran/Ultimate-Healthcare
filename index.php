 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hospital</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/header_script.js"></script>
<script type="text/javascript" src="jquery/slider_script.js"></script>

</head>

<body>

<!--navigation bar-->
<div class="navigation_bar">
	<div class="nav_container">
    	<div class="header">
        <div class="logo"><img src="images/logo.jpg" height="50px" width="200px" /></div>
        <div class="nav">
     <ul>
  <li id="home">Home</li>
  <li id="hospital">Hospital</li>
   <li id="services">Services</li>
  <li id="blog">Blog</li>
  <li id="blood">Blood Donation</li>
  <li id="contact">Contact us</li>
</ul></div>
        <div class="search"><input type="text" placeholder="search...." /></div>
    	</div>
    </div>
</div>

<!--slider-->
<div class="play"></div>
<div class="slider">
<img src="images/slider1-img.jpg" />
<img src="images/slider3-img.jpg" />
<img src="images/slider4-img.jpg" />
<img src="images/slider5-img.jpg" />
<img src="images/weight_banner.jpg"/>
</div>

<!--content div-->

<div class="content_container">
	<div class="content">
<div class="cont1">
<div class="cont1_inner">
<h5>Top District Private Hospital </h5>
<h3><a href="prihosp.php">Hospital Contact</a></h3>
<div class="login"><p>Hospital registration & response to Patient </p>
<span><a href="hos_login.php">Login</a></span>
</div>
</div>

</div>
<div class="cont2">
<div class="cont2_inner">
<h5>Top Government Hospital </h5>
<h3><a href="govhosp.php">Hospital Contact</a></h3>
<div class="login"><p>Hospital registration & response to Patient </p>
<span><a href="hos_login.php">Login</a></span>
</div>
</div>
</div>
<div class="cont3">
<div class="cont3_inner">
<h5>Help & Donate</h5>
<h3>BLOOD DONATION</h3>
</div>
	</div>
</div>

</div>

<!--servicess-->

<div class="services">
<div class="heading"><h4>Website Services</h4>
<h2>get well soon</h2>
</div>

<div class="services_row">
<ul class="services_list">
          <li><a href="dental.php"><div class="dental">Dental Care</div></a> </li>
          <li><a href="ent-treatment.php"><div class="ear">ENT Treatment</div></a></li>
          <li><a href="eyes-care.php"><div class="eyes">Eyes Care</div></a></li>
          <li><a href="heart-surgery.php"><div class="heart">HEART SURGERY</div></a></li>
          <li><a href="skin-care.php"><div class="skin">Skin care</div></a></li>
          <li><a href="bone-care.php"><div class="bones">Bone care</div></a></li>
      </ul>
</div>
</div>

<!--experienced doctor-->



<!--blog-->

<div class="blog">
<div class="blog_heading">
<h2>Special Diet Plans!</h2>
<p>When it comes to special dieting, we offer specific plans</p>
</div>
<div class="blog_type">
	<div class="a"><div class="img_a"></div>
    <div class="center_a"><h2>WEIGHT LOSS</h2><p>7 DAYS DIET PLAN</p></div>
    <div class="center_a1"><a href="upload/men.pdf" download>Download Men Diet Plan</a><br />
    <a href="upload/women.pdf" download>Download Female Diet Plan</a><br />
    <div class="button"><a href="weight-loss-blog.php" style="text-decoration:none;color:#FFF">View Blog</a></div></div>
    </div>
	<div class="b"><div class="img_b"></div>
   <div class="center_b"><h2>POST PREGNANCY</h2><p>SIX MONTHS DIET & EXERCISE PLAN</p></div>
   <div class="center_a1"><a href="upload/pregnancy_tips.pdf" download>Download Healthy Pregnancy Tips</a><br />
    <a href="">For Exercise view blog>></a><br />
    <div class="button"><a href="pregnancy-blog.php" style="text-decoration:none;color:#FFF">View Blog</a></div></div> </div>
	<div class="c"><div class="img_c"></div>
    <div class="center_c"><h2>FITNESS</h2><p>HEALTHY FOOD PLAN & EXERCISE</p></div>
    <div class="center_a1"><a href="upload/eating.pdf" download>Download Healthy Food Plan</a><br />
    <a href="upload/easy_yoga_book.pdf" download>Download Yoga Book(Slim4Life)</a><br />
    <div class="button"><a href="fitness-blog.php" style="text-decoration:none;color:#FFF">View Blog</a></div></div></div>
</div>
</div>


<!--blood donation-->

<div class="blood">
</div>

<!--contact us-->

<script type="text/javascript">
function myfnx(){
	var e=document.forms['contact_form']['email'].value;
var atpo=e.search("@");
var dotpo=e.lastIndexOf(".");
	var name=document.forms['contact_form']['name'].value;
	var number=document.forms['contact_form']['number'].value;
var plen=number.length;

	if(name==null || name==""){
document.getElementById("user_error").innerHTML="please! enter a full name";
document.forms['contact_form']['name'].focus();
return false;
}

if(number==null || number=="")
{
	alert("please! enter a phone number");
	return false;
}
else if(plen<10)
{
	alert("Enter valid phone number");
	return false;
}

if(e==null || e==""){
	document.getElementById("email_error").innerHTML="For response! Fill email";
	document.forms['contact_form']['email'].focus();
	return false;

	}
else if(atpo<1 || dotpo-atpo<2 || dotpo+2>=e.length){
	document.getElementById("email_error").innerHTML="fill valid email";
	document.forms['contact_form']['email'].focus();
	return false;
	}

}
</script>

<div class="contact">
         <div class="row">
                    <h2>Contact Us</h2></div>
                    <div class="row_tag">
                    <h3>For any query contact us!</h3>
            </div>
                 <div class="form_container">
                 <div class="form">  
                 <form action="contact_db.php" method="post" name="contact_form" onsubmit="return myfnx()">
                      <div class="name"> <input type="text" name="name" placeholder="Full Name" /></div><span id="user_error"></span>
                                     <div class="number">
                   <input type="number" name="number" placeholder="Phone Number" /></div>
                    <div class="email">
                        <input type="email" name="email" placeholder="E-Mail" /></div>
                        <span id="email_error"></span>
                     <div class="msg">
                        <textarea placeholder="Message" name="message"></textarea></div>
                      <div class="button">
                        <input type="submit" name="submit" value="QUERY!!" />
                   </div>
                    </form>
                </div>
          
      <div class="address">
      
      
      </div>
</div>
<?php
include('footer.php');

?>

</body>
</html>

</body>
</html>