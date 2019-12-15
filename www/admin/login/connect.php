<?php
$hostname="localhost"; 
$username="reuma"; 
$password="tiz%F6bTUikbWQ";    
$database="reuma";  
$con=mysqli_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}
mysqli_select_db($database,$con);
?>
