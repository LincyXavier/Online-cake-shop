<html>
<head>
	<style>
		 body{

				background-image:url("bg5.jpg");
				 margin: 0;
			 /*margin-left: 50px;*/
              padding: 0;
              /*background-repeat: no-repeat;*/
              background-size:100% 100% ;
              height: 100vh;
              overflow: hidden;
              box-sizing: border-box;
              color: black;
              font-family: 'Times New Roman';
			}
	</style>	
</head>
<?php
require('adminmenu.php');
?>
<body>
<div class="bg-img">

<div class="center_div">
<form  action="updatecat_process.php" method="POST"  class="container">
<h1><center><br><br><br><u><font color="black">UPDATE CATEGORY</u></center></h1>
<br>
	<table align="center" cellspacing="10" cellpadding="10">
        <?php	
			session_start();						
            require('config.php');									
			if(!empty($_GET['catid']))
	        {
			  	$itid=$_GET['catid'];
			 	$query="select * from category where catid='$itid'";
				$res=mysqli_query($conn,$query);
				$row=mysqli_fetch_assoc($res);
				
				?>
			
				<tr><td>CATEGORY NAME :</td>
				<input type="hidden" name='catid' value=<?php echo $itid; ?>>
		 		<td><input type='text' size='50' maxlength='50' name='itname' required onkeyup='this.value=this.value.toUpperCase()' value="<?php echo $row['catname'] ?>"<br><br>
			 <?php		
					echo"<tr><td>CATEGORY IMAGE:</td>
		            <td><img src='../images/". $row['catimg']."'  width='100'></td>
		            <td>NEW IMAGE:</td>
		            <td><input type='file' name='image1' ></td>
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