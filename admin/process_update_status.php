<html>
<head>
<style>
	body{
		/*background-image: url("../images/de.jpg");*/
		background-image: url("bg5.jpg");
		background-size:cover;
		background-repeat: no-repeat;
		
	}
	.center_div{
		color: white;
	}
	table tr td{
		color: white;
	}
</style>	
</head>
<?php
require('adminmenu.php');
?>
<body>
	<center>
<div class="center_div">
<form  action="process_update_status.php" method="POST"  class="container">
<h1><br><br><br><br><br><font color="yellow">UPDATE ORDER</h1>
<br>
<table align="center" cellspacing="10" cellpadding="10">
<?php

 //session_start();

require('config.php');

	if(!empty($_GET['oid']))
	{
     $oid=$_GET['oid'];
     echo"<tr><td>ORDER ID:</td>
		       <td><input type='text' name='oid' size='40' disable value=".$oid."></td></tr>";
	 echo"<tr><td>STATUS:</td>
		      <td>
			   <select name='stat'>
			   <option value='Ordered'>Ordered</option>
               <option value='Packed'>Packed</option>
               <option value='Shipped'>Shipped</option>
               <option value='Delivered'>Delivered</option>
               </select>
		      </td></tr>";
	echo "<tr><td colspan=2 align=center>
						
					<input  type='submit'  value='SAVE CHANGES' ></td>

		</tr>";
	}

?>
</table>
</form>

</div>
</center>
</body>
</html>
<?php


	if (isset($_POST['oid']) and isset($_POST['stat']))
         {
		
			$delfd=$_POST['oid'];
			$stat=$_POST['stat'];
			$query="update ordermaster set status ='$stat' where oid='$delfd'";
			mysqli_query($conn,$query) or die("can't Execute...");
			echo'<font color="green">ORDER UPDATED SUCCESSFULLY</font>';
			echo '<a href="view_order.php">GO BACK</a>';

	} 	
			
?>