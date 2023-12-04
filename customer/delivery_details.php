<?php
   require("usermenu.php"); 

?>

<html>
<head>
	<style type="text/css">
		body{
           background-image: url("pqrs3.jpg");
           margin: 0;
			 /*margin-left: 50px;*/
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
		
</head>

<body><br><br><br>
	
<h1 align="center"><font color="blue"face="brush script mt">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
THANKS FOR SHOPPING WITH US <br><u>Your Order Will Be Delivered In The Required Date</u></font></h1>
<?php
unset($_SESSION['cart']);
//session_destroy();
?>

</body>	
</html>	