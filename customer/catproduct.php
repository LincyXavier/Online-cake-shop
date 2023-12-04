<html>
<head>
	<?php 
	require("usermenu.php");
	require("config.php");
     ?>
     <link rel="stylesheet" type="text/css" href="userhome.css">
</head>
<body>
     <br><br><center><table cellspacing="20">
      <?php
      if(!empty($_GET['catid']))
      {
      	$catid=$_GET['catid'];
      	$sql="select * from cakes where cakeavailability='yes' and catid='$catid'";
      	$result=mysqli_query($conn,$sql) or die("wrong query");
      	$count=0;
      	   while($row=mysqli_fetch_assoc($result))
               {
                    if($count==0)
                    {
                    echo '<tr>';
               }
                 
             ?>
                    <td valign="top" width="10%" align="center">

                    
                             
               
                    
                              <a href="details.php?cakeid=<?php echo $row['cakeid'] ?>">
                                                  <img src="../images/<?php echo $row['cakeimg'] ?>" id="c">
                                                  <br><?php echo $row['cakename']; ?>
                                                  <br>PRICE:<?php echo $row['cakeprice']; ?>
                                                
                                                 
                                             </a>
                    </td>
               
                         <?php     

                              $count++;                               
                                                                 
                              if($count==4)
                                   {
                                   echo '</tr>';
                                   $count=0;
                                   }
               }
      }
?>
 </center>
</body>
</html>