<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view blog</title>
<link href="nav_style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php include('nav_back.php');
?>

<div class="view_blog">
<div class="fitness_image"><div class="overlay"></div></div>

<?php
include("db.php");
echo "<h1>Recent Fitness blog</h1>";
$a="select *from `Fitness_blog` order by `sno` desc";
$b=mysqli_query($con,$a);

while($c=mysqli_fetch_array($b))
{
?>
<div class="blog_body">
<?php
echo "<div class='blog_left'>";
echo "<img src='admin/upload/".$c['image']."' height='200px' width='200px'/>"."<br><br>";
echo "<div style='margin-left:50px;font-size:18px'>"."Published by: ".$c['name']."<br>"."Date: ".$c['date']."</div>"."</div>";
echo "<div class='blog_right'>";
echo "<h2>".$c['title']."</h2>";
echo $c['blog']."</div>";
echo "</div>";
}

?>

</div>
</body>
</html>