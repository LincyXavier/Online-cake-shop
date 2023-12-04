<?php
session_start();
require('config.php');
$cakeid=$_GET['cakeid'];

	if(!empty($_GET))
	{
			
			
			$cakename=$_GET['cakename'];
			$cakeprice=$_GET['cakeprice'];
			$cakequantity=$_GET['cakequantity'];
			$cakeimg=$_GET['cakeimg'];
			$cakedescription=$_GET['cakedescription'];
			$sql="UPDATE cakes SET cakename='$cakename',cakeprice='$cakeprice',cakequantity='$cakequantity',cakedescription='$cakedescription'WHERE cakeid='$cakeid'";
			 // echo $sql;			
			mysqli_query($conn,$sql) or die($sql."Can't Connect to Query...");		
			header("location:deletecakes.php");

	}


			if(!empty($_GET['cakeimg']))
			{
				$sql="UPDATE cakes SET cakeimg='$cakeimg' WHERE cakeid='$cakeid'";
				
				mysqli_query($conn,$sql) or die($sql."Can't Connect to Query...");	
				header("location:deletecakes.php");
				
			}
		
			
	
	
	
?>    