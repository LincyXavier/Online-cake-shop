<html>
<?php
require('adminmenu.php');
?>
<head>
<script type="text/javascript">
	
		function sureToApprove(itid)
		{
			if(confirm("Are you sure you want to discontinue this item?")){
				window.location.href ='delete_process.php?itid='+itid;
			}
		}
		
	</script>

<style>
table,th,td {
	border: 1px solid #fff;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 15%;
}
th,td {
	padding: 6 px;
	text-align: center;
	text-color: violet;
}
#fb tr:nth-child(even){background-color: #f2f2f2;}

#fb tr:hover {background-color: #ddd;}

th {
  background-color: black;
  color: white;
 }
 

</style>
</head>

<body bgcolor="grey" >
	<form >
		
			
		<br>
	                	
				     <table style="width:100%" id="fb">
						<caption align="center">
						 <b><h1><font color="white">CAKE DETAILS</font></h1>
					   </caption>

					
						<tr>

<th><b>CATEGORY ID</b></th>
<th><b>CATEGORY NAME</b></th>
<th><b>CAKE NAME</b></th>
<th><b>CAKE IMG</b></th>
<th><b>CAKE PRICE</b></th>
<!-- <th><b>SIZE</b></th> -->
<th><b>CAKE QUANTITY</b></th>
<th><b>CAKE AVAILABILITY</b></th>
<th><b>CAKE DESCRIPTION</b></th>



<th colspan="6"><b>Action</b></th>
			
</tr>						
    <?php
		include '../admin/config.php';
		
		
			
		$sql = "SELECT *,catname FROM cakes,category where cake.catid=category.catid and cake.available='yes'";
		$result =mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
	?>
						
<tr>						
	<td><?php echo $row['itid'] ?></td>
								<td><?php echo $row['catname'] ?></td>
								<td><?php echo $row['cakename'] ?></td>
								<td><?php echo $row['cakeimg'] ?></td>
								<td><?php echo $row['cakeprice'] ?></td>
								<td><?php echo $row['cakequantity'] ?></td>
								<td><?php echo $row['cakeavailability'] ?></td>
								<td><?php echo $row['cakedescription'] ?></td>




								<td><img src="../images/<?php echo $row['image'] ?>" width="100"></td>
								<td><a href="updateitem.php?itid=<?php echo $row['itid'];?>">Update</a></td>
								
								<td>
									<a href="javascript:sureToApprove(<?php echo $row['itid'];?>)" >Discontinue</a>

									</td>
							
							</tr>
							
								<?php
								
								}
								
								?>
											
							</table>
						
					
</body>
</html>




