<html>
<body>
		<div class="custlogin">
		<center>
    <img src="cakistrylogo.jpeg" class="avatar">
			<h1>REGISTRATION</h1>
     
			<form action="custregistration_action.php" method="post" autocomplete="off">
      
			<div class="txt_field">
				<input type="text" name="fname" placeholder="First name">
				<span></span>
				<!-- <label>First name</label> -->
      </div>
      <div class="txt_field">
          <input type="text" name="lname" placeholder="Last name"><br>
         <span></span>
                <!-- <label>Last name</label> -->
				
			</div>
                <div class="txt_field">
				<input type="text" name="username" placeholder="Username">
				<span></span>
				<!-- <label>Username</label> -->
				
			</div>
               
            <div class="txt_field">
				<input type="password" name="password" placeholder="Password"><br>
				<span></span>
				<!-- <label>Password</label> -->

             </div>
             <div class="txt_field">
				<input type="text" name="email" placeholder="Email ID">
				<span></span>
				<!-- <label>Email ID</label> -->

             </div>
             <div class="txt_field">
				<input type="text" name="phno" maxlength="10" placeholder="Phone number"><br>
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