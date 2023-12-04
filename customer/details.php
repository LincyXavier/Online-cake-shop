<html>
    <?php
     require("usermenu.php"); 
     require("config.php"); 
     
     ?>
     <br>
<head>
     <title>Home</title>
</head>
<style>
     table{
     	  margin-left: 100px;
          border: 2px solid black;
          background-color: white;
          width: 600px;
     }
     .add_cart{ 
          /*add-to-cart-image-size-fixing*/
          width: 120px;
      height: 100px; 
 }
     .box-cart{
     	width: 50%;
     	margin-left: 250px;
     }
     .p_text{
          font-style: sans-serif;
          font-size: 18px;
     }
</style>
<link rel="stylesheet" type="text/css" href="userhome.css">
<body>

<div>
       <div class="box-cart">

     <table align="center" >

       <?php
      if(!empty($_GET['cakeid']))
      {
          $cakeid=$_GET['cakeid'];
         
          $sql="select category.catid,category.catname,cakes.cakeid,cakes.catid,cakes.cakename,cakes.cakeimg,cakes.cakeprice,cakes.cakequantity,cakes.cakedescription from category,cakes where category.catid=cakes.catid and cakes.cakeavailability='yes' and cakes.cakeid='$cakeid'";
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

                    
                             
               
                    
                              <a href="#">
                                                  <img src="../images/<?php echo $row['cakeimg'] ?>" id="c">
                                                  <br><?php echo $row['cakename']; ?>
                                                  <p class="p_text">
                                                  
                                                  <br>PRICE:<?php echo $row['cakeprice']; ?>
                                                  <br><?php echo $row['cakedescription']; ?> 
                                                  <br>QUANTITY:<?php echo $row['cakequantity']; ?></p>
                                             </a>
                    </td>
               </tr>
               <tr>
               
                         <?php  
                         if(isset($_SESSION['cid']))
                          {
          echo '<td align="center">
               <a href=process_viewcart.php?cakeid='.$row['cakeid'].'&catid='.$row['catid'].'>
                    <img class="add_cart" src="add_cart.jpeg" height="30px" width="30px">
               </a>
          </td>';
        }
	else
	{
		echo '<td align="center">
               <a href="custregistration.php">
		REGISTER NOW
               </a>
          ||<a href="custlogin.php">
		LOGIN NOW
               </a></td>';
	}
          

                              $count++;                               
                                                                 
                              if($count==4)
                                   {
                                   echo '</tr>';
                                   $count=0;
                                   }
               }
      }
     

?>
</tr></div></table>
</div>


</body>
</html>