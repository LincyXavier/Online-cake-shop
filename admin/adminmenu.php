<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="adminmenu_new.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<title></title>
</head>
<body >
	
<div class="master">
<div class="navbar">
	<a href="adminhome.php"><h2>CAKISTRY</h2></a>
	<div class="left">
	<ul>
		<li class="dropdown">
    <a href="#" class="dropbtn">Categories &#9662</a>
    <div class="dropdown-content">
      <a href="admincategory.php">Add Category</a>
      <a href="deletecategory.php">View Category</a>
      <a href="disc_cat.php">Discontinued Category</a>
    </div>
  </li>
   <li class="dropdown">
    <a href="#" class="dropbtn">Cakes &#9662</a>
    <div class="dropdown-content">
      <a href="adminproduct.php">Add Cakes</a>
      <a href="deletecakes.php">Update Cakes</a>
      <a href="disc_cake.php">Discontinued Cakes</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Orders &#9662</a>
    <div class="dropdown-content">
      <a href="view_order.php">All Orders</a>
      <a href="sales_report.php">Sales Report</a>
    </div>
  </li>
	
		<li><a href="admin_feedback.php">Feedback</a></li>
	</ul>	
	

	
	</div>



	<div class=right>

		
		<a class="sign" href="adminlogout.php" >Signout</a>
		
 
	</div>
</div>
</div>

</body>
</html>