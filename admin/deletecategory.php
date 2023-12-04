<?php
require('adminmenu.php');
?>
<html>

<head>
<script type="text/javascript">
	
		function sureToApprove(catid)
		{
			if(confirm("Are you sure you want to discontinue this category?"))
			{
				window.location.href ='process_catdelete.php?catid='+catid;
			}
		}
		
	</script>

<style>

  h1{
 	top: 10%;
 	
 }
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
	<div class="table">
	<form >
		
			
		<br>
	                	
				     <table style="width:100%" id="fb">
						<caption align="center">
						 <br><br><br><br><br><b><h1><font color="white">CATEGORY DETAILS</font></h1>
					   </caption>

					
						<tr>

<th><b>CATEGORY ID</b></th>
<th><b>CATEGORY NAME</b></th>
<th><b>CATEGORY IMAGE</b></th>


<th colspan="6"><b>Action</b></th>
			
</tr>						
    <?php
		include '../admin/config.php';
		
		
			
		$sql = "SELECT * from category where available='yes'";
		$result =mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
	?>

						
<tr>						
	              <td><?php echo $row['catid'] ?></td>
								<td><?php echo $row['catname'] ?></td>
								
						 


								 <td><img src="../images/<?php echo $row['catimg'] ?>" width="100"></td>
								<td><a href="updatecat.php?catid=<?php echo $row['catid'];?>">Update</a></td>
								
								<td>
									<a href="javascript:sureToApprove(<?php echo $row['catid'];?>)" >Discontinue</a>

									</td>
							
							</tr>
							
								<?php
								
								}
								
								?>
											
							</table>
			</div>			
					
</body>
</html>




