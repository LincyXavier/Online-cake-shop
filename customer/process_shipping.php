<?php 
session_start();
require("config.php");
if(isset($_SESSION['cart']))
{

  $cid=$_SESSION['cid'];
    $d=date("y/m/d");
    $_SESSION['dte']=$d;
	$t=$_POST['total'];
    $query="insert into ordermaster(cid,ordate,status,amount) values($cid,'$d','ORDERED',$t)";	
	if(mysqli_query($conn,$query)==true)
	{
		$qq = "select max(oid) as oid from ordermaster where ordate='$d' and cid=$cid";									
		  $ress = mysqli_query($conn,$qq) or die("wrong  query..");
		  // echo $qq;
		  $roww = mysqli_fetch_assoc($ress);
		  $oid=$roww['oid'];
		  

	}



    foreach($_SESSION['cart'] as $id=>$x)
     {
    	$n=$x['cakeid'];
    	$q=$x['cakequantity'];
    	$r=$x['cakeprice'];
    	$reqdate=$_POST['rqdate'];
    	$sql1="insert into orderdetails (oid,pid,quantity,cakeprice,rqddate) values($oid,$n,$q,$r,'$reqdate')";
    	mysqli_query($conn,$sql1) or die($sql1."Can't Execute Quer");
    }
}
if(!empty($_POST))
{
	$name=$_POST['name'];
	$hname=$_POST['hname'];
	$street=$_POST['street'];
	$landmark=$_POST['landmark'];
	$pin=$_POST['pincode'];
	$ph=$_POST['phno'];
	$sql="INSERT INTO `shipping`( `cid`, `oid`, `name`, `hname`, `street`, `landmark`, `pincode`, `phno`) VALUES ('$cid','$oid','$name','$hname','$street','$landmark','$pin','$ph')";
	mysqli_query($conn,$sql) or die($sql."Can't Execute...");
			header("location:delivery_details.php");
			
}
?>