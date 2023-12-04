<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="usermenu.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<title></title>
</head>
<body>
	
<div class="master">
<div class="navbar">
	<a href="userhome.php"><h2>CAKISTRY</h2></a>
	<div class="left">
	<ul>
		<li><a href="myorders.php">Orders</a></li>
		<li><a href="feedback_view.php">Feedback</a></li>
		<li><a href="about_us.php">About Us</a></li>
	</ul>	
	
<div class="cat">
			<ul>
				<li class="dropdown">
 			  	<a href="#" class="dropbtn">Categories &#9662</a>
   				<div class="dropdown-content">
            <?php
             require('config.php');
            $sql="SELECT * FROM `category` WHERE available='yes'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
                 {
                 	?>
                
    			<a href="catproduct.php?catid=<?php echo $row['catid']?>"><?php echo $row['catname'] ?></a>
   				
            <?php
                }
            ?>
            </div>
 				</li>
           </ul>
     </div>


	
	</div>



	<div class=right>


    
        <?php
		if(isset($_SESSION['cid']))
		{

		?>
		<div class="cart">
			<div class="num">
  	<?php
   if(isset($_SESSION['cart'])){
				$count=count($_SESSION['cart']);
				echo "<span>$count</span>";
				}
				else
				echo "<span>0</span>";

?>
</div>
		<a href="viewcart.php"><i class="fas fa-shopping-cart" style="color: white;"></i></a></div>
		<a class="sign" href="logout.php" >Signout</a>
		<?php
		}
		else{ ?>
		<a class="sign" href="custlogin.php">Signin  |</a><a class="sign" href="custregistration.php">Signup</a> 
		<?php
		}
	    ?>
  
	</div>
</div>

</div>

</body>
</html>