<?php
include("home.php");
?>
    
    <div id="templatemo_content" style="height: 500px;"><center><span style="font-size:15px;">
    <?php

include("db.php");
$a="select *from `contact`";
$b=mysqli_query($con,$a);

echo "<h1>Contact Users</h1>";
echo "<table cellspacing='5px' cellpadding='10px' border='2'>";
echo "<tr><td>Name</td><td>Phone No.</td><td>E-mail.</td><td>Message</td><td>Action</td></tr>";
while($c=mysqli_fetch_array($b))
{
echo "<tr><td>".$c[1]."</td><td>".$c[2]."</td><td>".$c[3]."</td><td>".$c['4']."</td><td><a href=deletecontact.php?sno=$c[0]><img src='images/delete.png' height='20px' width='20px'></a></td></tr>";
}
echo "</table>";

?>

	
</span> </center>       
        
    </div>

	