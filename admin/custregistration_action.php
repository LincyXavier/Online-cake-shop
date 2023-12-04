<?php
session_start();
require("config.php");
if(!empty($_POST))
 {
   $firstname=$_POST['fname'];
   $lastname=$_POST['lname'];

 $username=$_POST['username'];
 $password=$_POST['password'];
  $email=$_POST['email'];
 $phonenumber=$_POST['phno'];


$sql="insert into customer(fname,lname,username,password,email,phno) values('$firstname','$lastname','$username','$password','$email','$phonenumber')";
$result=mysqli_query($conn,$sql) or die("wrong query");
//$row=mysqli_fetch_assoc($result);

header("Location:custregistration.php?added=1");
}
	else
	{
		header("Location:custregistration.php?fail=1");
	}

// else
// {
// 	header("Location:customerlogin.php?missing=1");
// }
?>