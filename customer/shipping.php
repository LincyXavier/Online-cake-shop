<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shipping</title>
	<style type="text/css">
		body{
			background-image: url("pqrs1.jpg");
			 margin: 0;
			 margin-left: px;
              padding: 0;
              background-repeat: no-repeat;
              background-size:100% 100% ;
              height: 100vh;
              overflow: hidden;
              box-sizing: border-box;
              color: white;
              font-family: 'Times New Roman';
		}
	</style>
	<script type="text/javascript">
      
        function validate()
        {
          if(document.myForm.name.value=="")
          {
            alert("please provide your name")
            document.myForm.name.focus();
            return false;

          }
          if(document.myForm.hname.value=="")
          {
            alert("please provide your house name")
            document.myForm.hname.focus();
            return false;

          }
           if(document.myForm.street.value=="")
          {
            alert("please provide your street name")
            document.myForm.street.focus();
            return false;

          }
                     if(document.myForm.pincode.value.length!=6)
                    {
                      alert("plz provide valid pin number");
                      document.myForm.pincode.focus();
                      return false;
                    }
        

                    if(document.myForm.phno.value.length!=10)
                    {
                      alert("plz provide valid mobile number");
                      document.myForm.phno.focus();
                      return false;
                    }

                     
         return (true);
                
         
      }
      </script>
</head>
<link rel="stylesheet" type="text/css" href="shipping.css">


<?php 
require("usermenu.php"); 
require('config.php'); 
$t=$_GET['t'];
?>

<body>
	<center>
		
<form action="process_shipping.php" method="POST" name="myForm" onsubmit="return(validate())"> 
<br><br><br><br><br><br><b><u><h1>SHIPPING DETAILS</h1></u></b>

<br> 
<input type="text" placeholder="Name" required name="name" autocomplete="off"> 
<br> <br>
<input type="text" placeholder="House Name" required name="hname" autocomplete="off"> 
<br> <br>
<input type="text" placeholder="Street" required name="street" autocomplete="off"> 
<br> <br>
<input type="text" placeholder="Landmark" required name="landmark" autocomplete="off"> 
<br><br>
<input type="text" placeholder="Pin Code" required name="pincode" autocomplete="off"> 
<br> <br>
<input type="text" placeholder="Phone Number" required name="phno" autocomplete="off"> 
<input type="hidden" name="total" value=<?php echo $t; ?>>

<br>
<br>
REQUESTED DATE
<br>

<input type="date" placeholder="REQUESTED DATE" required name="rqdate" autocomplete="off"> 
<br>
<br>
<input type="submit" value="Submit"> 
</center>
</form>


</body>
</html>