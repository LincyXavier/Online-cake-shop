<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CUSTOMER LOGIN</title>

   <style type="text/css">
	
*{
  margin: 0;
  padding: 0;
  box-sizing: content-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: url("custregpic.jpg");
  background-repeat: no-repeat;
  background-size:100% 100% ;
  height: 100vh;
  overflow: hidden;
}
.custlogin{
  position: absolute;
  top: 49%;
  /*bottom: 10%;*/
  left: 70%;
  transform: translate(-50%, -50%);
  width: 300px;
  background: rgba(0, 0, 0, 0.500);;
  border-radius: 30px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  border: 1px solid goldenrod;

}

.custlogin h1{
  text-align: center;
  padding: 15px 0;
  margin: 0;
  border-bottom: 1px solid blue;
  /*color: 1px solid blue;*/
   color: royalblue; 
  /*color: goldenrod;*/

}
.custlogin form{
  padding: 0 25px;
  box-sizing: border-box;
  /*top: 50%;*/
}
form .txt_field{
  position: relative;
  border-bottom: 1px solid #adadad;
  margin: 24px 0;
}
.txt_field input{
  width: 100%;
  color: royalblue;
  padding: 0 5px;
  height: 30px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 100%;
  left: 5px;
  color: #adadad;
  color: darkgoldenrod;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 30px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
  color: darkred;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
  color: darkred; 
}

input[type="submit"]{
  width: 90%;
  height: 50px;
  border: 1px solid;
  background:rgba(5, 0, 31, 0.795);
  /* background: darkgoldenrod; */
  border-radius: 35px;
  font-size: 18px;
   /*color: #e9f4fb; */
  color: goldenrod;
  font-weight: 700;
  cursor: pointer;
  outline: none;
  color: wheat;
  margin-bottom: 5px;
}
input[type="submit"]:hover{
  width: 100%;
   /*border-color: darkred; */
  transition: .5s;
  color: skyblue;

}
.avatar{
  width: 100px;
  height: 100px;
  margin-top: 2px;
  border-radius: 50%;
  position: relative;
  top: -50%;
  left:calc(50% -50px); 
  border: 1px solid goldenrod;           
}
.logo1{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-top: 1%;
  margin-left: 16%;
}
</style>
<script type="text/javascript">
      
        function validate()
        {
          if(document.myForm.fname.value=="")
          {
            alert("please provide your First name")
            document.myForm.fname.focus();
            return false;

          }
          if(document.myForm.lname.value=="")
          {
            alert("please provide your last name")
            document.myForm.lname.focus();
            return false;

          }
          if(document.myForm.username.value=="")
          {
            alert("please provide your username name")
            document.myForm.username.focus();
            return false;

          }
                    if(document.myForm.password.value=="")
                    {
                      alert("please enter password");
                      document.myForm.password.focus();
                      return false;
                     }
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
                    {
                      
                    }
                    else
                    {
                       alert("You have entered an invalid email address!")
                      return (false)
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
<body>
		<div class="custlogin">
		<center>
    <img src="cakistrylogo.jpeg" class="avatar">
			<h1>REGISTRATION</h1>
     
			<form name="myForm" action="custregistration_action.php"  method="post" autocomplete="off" onsubmit="return(validate())">
      
			<div class="txt_field">
				<input type="text" name="fname" placeholder="First name" required="true">
				<span></span>
				<!-- <label>First name</label> -->
      </div>
      <div class="txt_field">
          <input type="text" name="lname" placeholder="Last name" required="true"><br>
         <span></span>
                <!-- <label>Last name</label> -->
				
			</div>
                <div class="txt_field">
				<input type="text" name="username" placeholder="Username" required="true">
				<span></span>
				<!-- <label>Username</label> -->
				
			</div>
               
            <div class="txt_field">
				<input type="password" name="password" placeholder="Password" required="true"><br>
				<span></span>
				<!-- <label>Password</label> -->

             </div>
             <div class="txt_field">
				<input type="text" name="email" placeholder="Email ID" required="true">
				<span></span>
				<!-- <label>Email ID</label> -->

             </div>
             <div class="txt_field">
				<input type="text" name="phno" maxlength="10" placeholder="Phone number" required="true"><br>
				<span></span>
				<!-- <label>Phone number</label> -->

             </div>

             <div>
				<input type="submit" name="submit" value="LOGIN"><br>
			</div>
			</form>
      <?php
  if (isset($_GET['wrongpass'])) {
    echo '<font color="red">Incorrect password</font>';
  }
   if (isset($_GET['wronguser'])) {
    echo '<font color="red">Incorrect username</font>';
  }
  
  ?>
			</center>
	</div>

</body>
</html>