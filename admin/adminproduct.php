<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD CAKES</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			text-decoration: none;
			list-style: none;
			box-sizing: content-box;
			font-family: 'Times New Roman';
			font-weight: bold;
			font-size: 16px;
      margin-top: 1px;
      /*margin-bottom: 5px;*/
		}
		body{
			 background: url("adminpdtpic1.jpg");
			  margin: 0;
              padding: 0;
              background-repeat: no-repeat;
   	background-size:100%;
              overflow: hidden;
              box-sizing: border-box;
              color: white;
              font-family: 'Times New Roman';
		}
		.adproduct{
  position: absolute;
  top: 50%;
  left: 65%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: rgba(0, 0, 0, 0.500);;
  border-radius: 50px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  border: 2px solid gold;

}

	.adproduct h1{
  padding: 40px 0;
  text-decoration:none;
  color: whitesmoke;
  font-weight: bold;
    font-family: 'Times New Roman';
    font-size: 35px;
}
.adproduct form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .pdt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 0px 0;

}
		li a{
  text-decoration: none;
  list-style: none;
  font-family: sans-serif;
  font-weight:bold;
  font-color: wheat;

}
	
  input[type="submit"]{
  width: 40%;
  height: 30px;
  /*padding: 40px;*/
  border: 1px solid;
  background:rgba(5, 0, 31, 0.795);
  border-radius: 35px;
  font-size: 18px;
  color: goldenrod;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  color: wheat;
  margin-bottom: 5px;
  margin-top: 5px;
}
input[type="submit"]:hover{
  width: 50%;
   /*border-color: darkred; */
  transition: .5s;
  color: skyblue;

}
	</style>
</head>
<body>
	<?php
	include("adminmenu.php");
	?>
	<form action="process_product.php" method="post">
		<div class="adproduct">
		<center>		
			<h1>ADD CAKES</h1>
			Select category:<select name="cat"> 
       <?php
       require("config.php");
       $sql="select * from category";
        $result=mysqli_query($conn,$sql);

        while ($row=mysqli_fetch_assoc($result)) {
        	echo "<option value='".$row['catid']."'>".$row['catname'];


        }
       ?>
			</select><br>
        <div class="pdt_field"> 
    <li>
		Cake name:<input type="text" name="cakename" required="true" onkeyup="this.value=this.value.toUpperCase()"><br></li></div>
      <div class="pdt_field"> 
    <li>
		Cake image:<input type="file" name="cakeimg" required="true"><br></li></div>
      <div class="pdt_field"> 
    <li>
		Cake price:<input type="text" name="cakeprice" required="true" onkeyup="this.value=this.value.toUpperCase()"><br></li></div>
      <div class="pdt_field"> 
    <li>
		Cake quantity:<input type="text" name="cakequantity" required="true" onkeyup="this.value=this.value.toUpperCase()"><br></li></div>
      <div class="pdt_field"> 
    
		
      <center>
      <br>Cake description:
  <br><textarea name="desc" rows="2"></textarea></center></li>
		

		<br><input type="submit" value="SUBMIT"><br>
	

  <?php
  if (isset($_GET['yes'])) {
    echo '<font color="red">new product added</font>';
  if(isset($_GET['no'])){
    echo '<font color="red">no product added</font>';
  }
  }
  
  
  ?>

	 </center>	
	</form>
  </div>
</body>
</html>