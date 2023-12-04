<?php
session_start();
require ("config.php");
	if (!empty($_POST)) {
	$unm=$_POST['username'];
	$q="select * from customer where username='$unm'";
	$res=mysqli_query($conn,$q) or die("wrong query");
	$row=mysqli_fetch_assoc($res);
	if(!empty($row))
	{
        if($_POST['password']==$row['password'])
		{
			if(!empty($_GET['pid']))
			{
				$pid=$_GET['pid'];

			}
				$_SESSION=array();
				$_SESSION['cid']=$row['cid'];
				$_SESSION['name']=$row['fname'];
				if($pid!=0)
				{
					header('location:userhome.php?pid='.$pid.'');
				}
				else{
					header('Location:userhome.php');

				}
			
		}
		else
		{
			header('Location:custlogin.php?wrongpass=1');
		}
	}
	else
	{
		header('Location:custlogin.php?wronguser=1');
	}
}
?>