<?php
session_start();
require('config.php');

     if(!empty($_GET['catid']))
     {

     	$categoryid=$_GET['catid'];
	    $sql="update category set available='no' where catid='$categoryid'";
	   

	    mysqli_query($conn,$sql) or die("can't connect to query....");


	    	header("location:deletecategory.php");
	    }

?>