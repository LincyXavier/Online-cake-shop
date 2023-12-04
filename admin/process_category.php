<?php
session_start();
require("config.php");
if(!empty($_POST))
{
	$categoryname=$_POST['catname'];
	$categoryimage=$_POST['catimg'];
	$sql="insert into category(catname,catimg) values('$categoryname','$categoryimage')";
	if (mysqli_query($conn,$sql)==true) {
		header("Location:admincategory.php?added=1");
	}
	else
	{
		header("Location:admincategory.php?fail=1");
	}
}
else
{
	header("Location:admincategory.php?missing=1");
}
?>