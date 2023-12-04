<html>
<?php
require('adminmenu.php');
?>
<head>
<script type="text/javascript">
	
		function sureToApprove(cakeid)
		{
			if(confirm("Are you sure you want to discontinue this item?"))
			{
				window.location.href ='process_cakedelete.php?cakeid='+cakeid;
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
						 <br><br><br><br><br><b><h1><font color="white">CAKE DETAILS</font></h1>
					   </caption>

					
						<tr>

<th><b><font color="white">CATEGORY NAME</font></b></th>
<th><b><font color="white">CAKE ID</font></b></th>
<th><b><font color="white">CAKE NAME</font></b></th>
<th><b><font color="white">CAKE IMAGE</font></b></th>
<th><b><font color="white">CAKE PRICE</font></b></th>
<th><b><font color="white">CAKE QUANTITY</font></b></th>
<!-- <th><b><font color="blue">CAKE AVAILABILITY</font></b></th> -->
<th><b><font color="white">CAKE DESCRIPTION</font></b></th>



<th colspan="6"><b><font color="black">Action</font></b></th>
			
</tr>						
   <?php
		include '../admin/config.php';

		$sql="SELECT *,catname FROM cakes,category WHERE category.catid=cakes.catid AND cakeavailability='yes'";
		$result=mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_assoc($result))
		 {
			?>
			<tr>
				<td><?php echo $row['catname'];?></td>
				<td><?php echo $row['cakeid'];?></td>
				<td><?php echo $row['cakename'];?></td>
			
			  <td><img src="../images/<?php echo $row['cakeimg'] ?>" width="150" height="150"></td>
				<td><?php echo $row['cakeprice'];?></td>
				<td><?php echo $row['cakequantity'];?></td>
			
				<td><?php echo $row['cakedescription'];?></td>

					<td><a href="updatecakes.php?cakeid=<?php echo $row['cakeid'];?>">Update</a></td>
								
								<td>
									<a href="javascript:sureToApprove(<?php echo $row['cakeid'];?>)" >Discontinue</a>

									</td>

			
			</tr>
			<?php 
		}
		
		?>
		
	
											
							</table>
						
					
</body>
</html>
