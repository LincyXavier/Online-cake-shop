<?php

 session_start();

require('config.php');

	if(!empty($_GET['cakeid']))
         {
		
			$cakeid=$_GET['cakeid'];
			
			
			$sql="UPDATE cakes SET cakeavailability='no' WHERE cakeid='$cakeid'";

			mysqli_query($conn,$sql) or die("can't Execute...");

			header("location:deletecakes.php");
	} 	
			
?>	
		