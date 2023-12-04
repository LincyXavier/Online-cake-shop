<?php
session_start();
require('config.php');

	if(!empty($_POST))
	{
			
			
			$catid=$_POST['cat'];
			$cakename=$_POST['cakename'];
			$cakeimg=$_POST['cakeimg'];
			$cakeprice=$_POST['cakeprice'];
			$cakequantity=$_POST['cakequantity'];
		    $cakedescription=$_POST['desc'];
			
		
			$sql="insert into cakes(catid,cakename,cakeimg,cakeprice,cakequantity,cakedescription)values ('$catid','$cakename','$cakeimg','$cakeprice','$cakequantity','$cakedescription')";
			echo $sql;
			
			mysqli_query($conn,$sql) or die($sql."Can't Connect to Query...");


			header("location:adminproduct.php?yes=1");	

			}


			else
			{
			header("location:adminproduct.php?no=1");	
			}
		
		
	
	
	
?>    