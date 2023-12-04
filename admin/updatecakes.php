<html>
<style type="text/css">
	body{

		background-image: url("anj8.jpg");
		/*background-image: url("pqrs6.jpg");*/
		 margin: 0;
			 margin-left: 90px;
			 /*margin-right: 190px;*/
              padding: 0;
              background-repeat: no-repeat;
              background-size:100% 100% ;
              height: 100vh;
              overflow: hidden;
              box-sizing: border-box;
              color: black;
              font-family: 'Times New Roman';
		
		}
	
</style>
<head>
	
</head>
<?php
require('adminmenu.php');
?>
<body>
<div class="bg-img">

<div class="center_div">
<form  action="process_updatecakes.php" method="GET"  class="container">
<h1><center><br><br><br><u><font color="black">UPDATE CAKES</u></center></h1>
<br>
	<table align="center" cellspacing="10" cellpadding="10">
        <?php
			
			//session_start();						
			require('config.php');									
			if(!empty($_GET['cakeid']))
	        {
			  	$cakeid=$_GET['cakeid'];
			  	$_SESSION=array();
                $_SESSION['cakeid']=$cakeid;
                //echo $_SESSION['cakeid'];

			 	
			    $sql="select * from cakes where cakeid='$cakeid'";
                $result=mysqli_query($conn,$sql);
				$row=mysqli_fetch_assoc($result);
				$cat=$row['catid'];


				
				echo"<tr><td>CAKE NAME :</td>

				<td><input type='text' size='30' maxlength='30' name='cakename' required onkeyup='this.value=this.value.toUpperCase()' value=".$row['cakename']."></td></tr>";

				

				echo"<input type='hidden' name='cakeid' value=".$row['cakeid'].">";



					
				echo"<tr><td>CAKE PRICE:</td>
		            <td><input type='text' name='cakeprice' size='30' required value=".$row['cakeprice']."></td></tr>";
		          
					
					echo"<tr><td>CAKE QUANTITY:</td>
		            <td><input type='text' name='cakequantity' size='30' required value=".$row['cakequantity']."></td></tr>";

		            echo"<tr><td>CAKE DESCRIPTION:</td><br>
		            <td><input type='text' name='cakedescription' size='30' required value=".$row['cakedescription']."></td></tr>";
					
                    echo"<tr><td>CAKE IMAGE:</td>
		            <td><img src='../images/". $row['cakeimg']."'  width='100'></td>
		            <td>NEW IMAGE:</td>
		            <td><input type='file' name='cakeimg' ></td>
		            </tr>";
					echo "<tr><td colspan=2 align=center>
						
					<input  type='submit'  value='SAVE CHANGES' ></td>

					</tr>";
			}
		
		?>	
		
					</table>
</div>
</form>

</div>
</body>
</html>