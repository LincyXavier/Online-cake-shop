<html>
<head>
<style>
body{
	background-image: url("shippingpic.jpg");
	margin: 0;
			 margin-left: 100px;
			 margin-right: 90px;
              padding: 0;
              background-repeat: no-repeat;
              background-size:100% 100% ;
              height: 100vh;
              overflow: hidden;
              box-sizing: border-box;
              color: black;
              font-family: 'Times New Roman';

}
table,th,td {
border: 1px solid red;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 15%;
}
th,td {
	padding: 6 px;
	text-align: center;
	color: white;
}
th {

  background-color: black;
  color: white;
 }
 </style>
</head>
<?php
require('adminmenu.php');
echo '<br>';
echo '<br>';
?>
<body bgcolor="grey">
<form>
<table style="width:100%" id="fb">
<caption align="center">
<br><br><br><br><br><b><h1><u><font color="white">ORDER DETAILS</font></u></h1><br><br>
</caption>
<tr>

<th><b>SL NUMBER</b></th>
<th><b>ORDER ID</b></th>
<th><b>ORDER DATE</b></th>
<th><b>SHIPPING ADDRESS</b></th>	
<th><b>STATUS</b></th>
<th colspan=2><b>ACTION</b></th>
			
							
						</tr>
						<?php
						require('config.php');
						$query="select * from shipping sh,ordermaster od where od.status!='delivered' and od.oid=sh.oid" ;
						$result = mysqli_query($conn,$query);
						$i=1;
						while($row = $result->fetch_assoc())
						{
							?>
							<tr><td><?php echo $i ?></td>		
								<td><?php echo $row['oid'] ?></td>
								<td><?php echo $row['ordate'] ?></td>
								<td><?php echo $row['name'].",".$row['hname'] .",".$row['street'].",".$row['landmark'].",".$row['pincode']?></td>
								<td><?php echo $row['status'] ?></td>
								<td ><a href="view_ordered_cakes.php?oid=<?php echo $row['oid'];?>">View products</a></td>
								<td ><a href="process_update_status.php?oid=<?php echo $row['oid'];?>">Update Status</a></td>
							</tr>
						<?php 
						$i++;
						}
						?>		
						
										
</table>
	</form>
					</body> 
</html>