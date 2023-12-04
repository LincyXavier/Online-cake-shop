<html>
<head>
	<style>
	body{
		background-image: url("demo1.jpg");
	}
						p{
			font-size :xx-large;
			text-transform: uppercase;

		}
		p select{
			height: 50px ;
		    padding: 10px;
		}
		p input{
			margin-top: 30px;
			height: 50px ;
		    padding: 10px;			
			font-size :20px;

		}
		table{
			margin-top: 50px;
			width: 50%;
		}
		table tr td,table th{
			width: fit-content;
			font-size: 25px;
		}
		td a{
			text-decoration: underline;
			color: blue;
		}
		.yr{
			margin-top: 50px;
			font-size: 30px;
			margin-bottom: -50px;
			margin-left: 90px;
		}
		.yr a{
			text-decoration: underline;
			color: blue;
		}
	</style>	
</head>
<?php
require('adminmenu.php');
?>	
<body bgcolor="grey">
		<center>
	<div class="search">
            <form  method="get" action="sales_report.php">

                <br><br><br><br><br><p>Select Year:
                  <select name="yr">
                     <?php
                                            
                         require('config.php');
                        $q="select distinct year(ordate) as yr from ordermaster where status='Delivered' ";	
                        $r=mysqli_query($conn,$q);	
                        while($row=mysqli_fetch_assoc($r))	
                            {	
                              
                            echo "<option value=".$row['yr'].">".$row['yr']."</option>";												
         
                            } 
                    ?>
        
                    </select>
                  <input type="submit" value="REPORT" class="submit" >
                </p>
	</form>
		<div class="yr">
	<?php
if(isset($_GET['yr']))
{
  echo	$yr=$_GET['yr'];
	
?>				 
	 
	 </div>
	<table cellpadding="10" align="center" border=1>
		<th>MONTH</th>
		<th>SALE(₹)</th>
			<?php

			$query="select monthname(ordate) as mname,sum(amount) as tsum from ordermaster where year(ordate)=$yr group by monthname(ordate) ";
			$result = mysqli_query($conn,$query);
			$i=1;
			while($row = $result->fetch_assoc())
			{
			
		?>
			<tr>		
			<td><?php echo $mon=$row['mname'];?></td>
		   	<td><?php echo " ₹" .$row['tsum']."/-";?></td>
		   	</tr>
					
		<?php 
			}
				
	echo '</table>';
	
}
?>
	</center>		
</body>
</html>