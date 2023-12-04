<?php
require("config.php");
$username=$_POST['username'];
$password=$_POST['password'];
// echo $username,$password;


$sql="select * from login where adname='$username'";
$result=mysqli_query($conn,$sql) or die("wrong query");
$row=mysqli_fetch_assoc($result);

if (!empty($row)) {
	if ($password==$row['adpass']) {
		header('Location:adminhome.php?cust=1');
	}
	else
	{
		header('Location:adminlogin1.php?wrongpass=1');
	}
}
else
{
			header('Location:adminlogin1.php?wronguser=1');

}
?>