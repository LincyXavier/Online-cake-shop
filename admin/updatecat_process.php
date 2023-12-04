<?php
session_start();
require('config.php');


	if(!empty($_POST))
	{
			
			$catid=$_POST['catid'];
			$itname=$_POST['itname'];
			$img=$_POST['image1'];
			$query="UPDATE category SET catname='$itname' WHERE catid='$catid'";
						
					
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");			
			header("location:deletecategory.php");

	}


			if(!empty($_POST['image1']))
			{

				$query="UPDATE category SET catimg='$img'WHERE cat_id='$catid'";
				
				mysqli_query($conn,$query) or die($query."Can't Connect to Query...");	
				
			}
		
			
	
	
 ?>