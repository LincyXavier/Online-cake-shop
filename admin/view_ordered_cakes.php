<html>
<head>
<style>
body{
	background-image: url("pqrs6.jpg");
	margin: 0;
			 margin-left: 100px;
			 /*margin-right: 90px;*/
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
    width: 50%;
}
th,td {
	width: auto;
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
?>
<body bgcolor="grey">
 <form method="POST" action="vieworder.php">
	 <center>
				 
	<table cellpadding="10"  id="fb" align="center">
	<caption align="center">
	<br><br><b><h1><font color="white">ORDERED PRODUCTS</font></h1>
	</caption>
	<tr>
   <br>
	<th><b>SL NUMBER</b></th>
	<th><b>ITEM ID</b></th>
	<th><b>ITEM NAME</b></th>
	<th><b>ITEM IMAGE</b></th>
	<th><b>PRICE</b></th>
	<th><b>QUANTITY</b></th>	
	</tr>
		<?php
			require('config.php');
			if(isset($_GET)) 
			{
				$oid=$_GET['oid'];
			$query="select * from cakes,orderdetails where orderdetails.oid ='$oid' and orderdetails.pid=cakes.cakeid";
			$result = mysqli_query($conn,$query);
			$i=1;
			while($row = $result->fetch_assoc())
			{
		?>
			<tr><td><?php echo $i ?></td>		
				<td><?php echo $row['cakeid'] ?></td>
				<td><?php echo $row['cakename'] ?></td>
				<td> <img src="../images/<?php echo $row['cakeimg'] ?>" width="150px" height="150px"> </td>
				<td><?php echo $row['cakeprice'] ?></td>
				<td><?php echo $row['quantity'] ?></td>
								
			</tr>
						<?php 
						$i++;
						}
						?>								
			<tr><td colspan=6><a href="view_order.php">GO BACK</a></td></tr>			

	</table>
<?php } ?>	
     </center>
	</form>
  
					
</body>
</html>