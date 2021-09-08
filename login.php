<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>patient</title>
<link href="login_style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php include('navigation_bar.php');?>

<div class="contact">

         <div class="row">
                    <h2>SignIn</h2></div>
                    <div class="row_tag">
                    <h3>Fill In the Form for information or a meeting!</h3>
            </div>
                 <div class="form_container">
                 <div class="form"> 
                 <h2>Login</h2>  
                 <form action="login_db.php" method="post" name="form" onsubmit="return myfnx()">
                      <div class="name"> <input type="text" name="username" placeholder="USERNAME" /></div><span id="user_error"></span>
                        <span id="email_error"></span>
                     <div class="password">
                        <input type="password" name="pass" placeholder="***********"/></div>
                       
                      <div class="button">
                        <input type="submit" name="submit" value="LOGIN" />
                   </div>
                    </form>
                    
                   <div class="link"><a href="forgot.php">Forgot Password?</a> <a href="patient_reg.php" style="float:right;margin-right:50px;">Sign Up</a></div>
                </div>
          
      
</div>


</body>
</html>