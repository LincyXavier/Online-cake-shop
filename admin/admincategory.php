<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD CATEGORY</title>
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
		}
		body{
			 background: url("admincatpic.jpg");
			  margin: 0;
              padding: 0;
              background-repeat: no-repeat;
              background-size:100% 100% ;
              height: 100vh;
              overflow: hidden;
              box-sizing: border-box;
              color: white;
              font-family: 'Times New Roman';
		}
		.adcategory{
  position: absolute;
  top: 40%;
  left: 65%;
  transform: translate(-50%, -50%);
  width: fit-content;
  background: rgba(0, 0, 0, 0.500);;
  border-radius: 50px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  border: 2px solid gold;

}

	.adcategory h1{
  padding: 40px 0;
  text-decoration:none;
  color: whitesmoke;
  font-weight: bold;
    font-family: 'Times New Roman';
    font-size: 35px;
}
.adcategory form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .cat_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 15px 0;
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
}
input[type="submit"]:hover{
  width: 30%;
   border-color: indigo; 
  transition: .5s;
  color: skyblue;

}
	</style>
</head>
<body>
	<?php
	include("adminmenu.php");
	?>
	<form action="process_category.php" method="post">
		<div class="adcategory">
		<center>

			<h1>ADD CATEGORY</h1>
		<div class="cat_field">	
		<li>
			Category name:<input type="text" name="catname" required="true" onkeyup="this.value=this.value.toUpperCase()"><br></li></div>
		
		<div class="cat_field">
		<li>
			Category image:<input type="file" name="catimg" required="true"><br></li></div>
		
		<div>
			<input type="submit" value="SUBMIT">
		</div>
		


	<?php
	if (isset($_GET['added'])) {
		echo '<font color="red">new category added</font>';
	}
	if(isset($_GET['fail'])){
		echo '<font color="red">no category added</font>';
	}
	if (isset($_GET['missing'])) {
		echo '<font color="red">please fill up...</font>';
	}
	
	?>
	
		</div>
		</center>
	</form>
</body>
</html>