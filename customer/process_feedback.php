<?php
require 'config.php';
$content=$_POST['content'];
if(!empty($content))
{
$pid=$_POST['pid'];            
$oid=$_POST['oid'];
$q="INSERT INTO `feedback`(`oid`, `pid`, `feedback`) VALUES ($oid,$pid,'$content')";
if(mysqli_query($conn,$q)==true)
{
    header('location:myorders.php');
    
}
else{
    echo $q."error";
}
}
else{
    header('location:myorders.php?value=1');
}
?>