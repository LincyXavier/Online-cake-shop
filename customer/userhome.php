
<!DOCTYPE html>
<html>
    <?php
	require("usermenu.php");  
	
	?>
	<br>
<head>
	<title>Home</title>
</head>
<link rel="stylesheet" type="text/css" href="userhome.css">
<body>

<div>
<br><br><br><br>
<div class="bar"><h3>Categories:</h3></div>

	<table align="center" border="5">
			
       <?php
        require("config.php");
	
		$sql="SELECT * FROM `category` WHERE available='yes'";								
		$result=mysqli_query($conn,$sql) or die("Wrong Query...");
	
		$count=0;
			
		while($row=mysqli_fetch_assoc($result))
			{
				if($count==0)
				{
				echo '<tr>';
             	}
                 
	        ?>
				<td valign="top" width="10%" align="center">
				
						<a href="catproduct.php?catid=<?php echo $row['catid'] ?>">
										<img src="../images/<?php echo $row['catimg'] ?>" id="c">
										<br><?php echo $row['catname']; ?></a>
				</td>
			
					<?php	

						$count++;							
													
						if($count==4)
							{
							echo '</tr>';
							$count=0;
							}
			}
			
		
											
	echo "</table><br><center>";

				
   											
    ?>
    </center>

</div>

<div class="pro">

         <?php
            require('config.php');
            $sql="SELECT * FROM `category` WHERE available='yes'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
                 {
                 	$cats=$row['catid'];
                 	?>
                <div id="<?php echo $row['catname'] ?>">
                	<br><br><br><br>        
<?php
         }
          ?>

</div>
</body>
</html>