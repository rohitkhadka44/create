<?php
$host="loaclhost";
$user="root";
$pass="";
$db="rohit";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){echo "Unable to connect to Database";}
?>