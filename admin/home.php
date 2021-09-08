<?php
session_start();
?>
<html>
<head>
<title>Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> 
<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>

<body>
<div id="header">
	<div class="inHeader"><div style="float: left;font-size: 20px;color: #00CC00;">HOSPITAL <span>WEBSITE</span></div>
		<div class="mosAdmin">
		Hello, Website Administrator<br>
		<a href="logout.php">Logout</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="home.php">Dashboard</a></li>
        <li><a href="services.php">Services</a></li>
         <li><a href="fitness_blog.php">fitness blog</a></li>
        <li><a href="weight_loss.php">Weight-loss </a></li>
        <li><a href="pregnancy_blog.php">pregnancy</a></li>
        <li><a href="contactuser.php">Contact</a></li>
		<li><a href="changepass.php">Settings</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3>Dashboard</h3>
	<div class="quoteOfDay">
	<b>Quote of the day :</b><br>
	<i style="color: #5b5b5b;">"................."</i>
	</div>
		
		
		
	</div>
<div class="clear"></div>

</div>
</body>
</html>