<?php 
    session_start();

	if(isset($_GET['cakeid']) and isset($_GET['catid']))
	{

		require('config.php');
		$query="select * from cakes where cakeid=".$_GET['cakeid'] ;
		$result = mysqli_query($conn,$query);
		while($row = $result->fetch_assoc())
			{

		//add item
		$_SESSION['cart'][] = array("cakeid"=>$_GET['cakeid'],"catid"=>$_GET['catid'],"cakename"=>$row['cakename'],
			"cakeprice"=>$row['cakeprice'],"cakequantity"=>"1");
		header("location: viewcart.php");
			}
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$cakeid = $_GET['id'];	
		unset($_SESSION['cart'][$cakeid]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $cakeid=>$val)
		{
			$_SESSION['cart'][$cakeid]['cakequantity']=$val;
			header("location: viewcart.php");
		}
	}


?>