<?php
  include("config.php");
 ?>
<!DOCTYPE html>
  <head>
    <title>Sign-Up</title>
    <?php
      include("head.php");
     ?>
  </head>
  <body>
    <?php
      include("menu.php");
     ?>

     <?php
     if (isset($_POST['submit']))
     {
       $newuser=new User;
       $newuser->setlogin(safe_input($_POST['login']));
       $newuser->setemail(safe_input($_POST['email']));
       $newuser->setgender(safe_input($_POST['gender']));
       $newuser->setfirst_name(safe_input($_POST['first_name']));
       $newuser->setlast_name(safe_input($_POST['last_name']));
       $newuser->setphonenumber(safe_input($_POST['phonenumber']));
       $newuser->setpassword_hash(sha1(safe_input($_POST['password'])));




       $sql="INSERT INTO users (login, email, gender,first_name,last_name,phonenumber,password_hash) value (:login, :email, :gender,:first_name,:last_name,:phonenumber,:password_hash)";
       $STH = $DBH->prepare($sql);

        $login=$newuser->getlogin();
        $email=$newuser->getemail();
        $gender=$newuser->getgender();
        $first_name=$newuser->getfirst_name();
        $last_name=$newuser->getlast_name();
        $phonenumber=$newuser->getphonenumber();
        $password_hash=$newuser->getpassword_hash();

        $STH->bindParam(':login',$login );
        $STH->bindParam(':email', $email);
        $STH->bindParam(':gender', $gender);
        $STH->bindParam(':first_name', $first_name);
        $STH->bindParam(':last_name', $last_name);
        $STH->bindParam(':phonenumber', $phonenumber);
        $STH->bindParam(':password_hash', $password_hash);


       try {
          $STH->execute();
          $newuser->setid($DBH->lastInsertId());
          session_start();
          $_SESSION["user"] = $newuser;
          #echo '<script language="javascript">';
          #echo 'window.alert("Sign up successfully! \n You are moved to the home page")';
          #echo '</script>';
          header('Location: ./index.php');
       } catch (\Exception $e) {
         echo '<p class="text-danger">' ?> <?php echo $e->getMessage().'</p>';
       }


     }

    ?>

     <br>
     <br>
     <div class="container">
     <div class="jumbotron">
        <form method="POST" action="signup.php">
    		<p>Please fill in this form to create an account!</p>
    		<hr>
            <div class="form-group">
    			    <label>Login</label>
            	<input type="text" class="form-control" name="login" required="required" >
            </div>
            <div class="form-group">
    			    <label>Email Address</label>
            	<input type="email" class="form-control" name="email"  required="required">
            </div>

             <div class="form-group">
                  <label style="margin-right:20px;">Gender</label>
                  <label class="radio-inline">
                    <input name="gender" id="input-gender-male" value="Male" type="radio" required="required">Male
                  </label>
                  <label class="radio-inline">
                    <input name="gender" id="input-gender-female" value="Female" type="radio" />Female
                  </label>
              </div>


            <div class="form-group">
    			    <label>First Name</label>
            	<input type="text" class="form-control" name="first_name"  required="required">
            </div>

            <div class="form-group">
    			    <label>Last Name</label>
            	<input type="text" class="form-control" name="last_name"  required="required">
            </div>

            <div class="form-group">
    			    <label>Phone Number</label>
            	<input type="text" class="form-control" name="phonenumber"  required="required">
            </div>

    		    <div class="form-group">
    			     <label>Password</label>
               <input type="password" class="form-control" name="password" id="password" required="required">
            </div>
    	    	<div class="form-group">
    			      <label>Confirm Password</label>
                <input type="password" class="form-control"  name="confirm_password" id="confirm_password" required="required">
            </div>
            <div class="form-group">
    			      <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    	    	</div>
    	    	<div class="form-group">
                <button type="submit" name="submit" value="Signup" class="btn btn-primary">Sign Up</button>
            </div>
        </form>
    	<div class="text-center">Already have an account? <a href="./login.php">Login here</a></div>
    </div>
    </div>

    <br><br>

    <?php
      include("footer.php");
      include("jscript.php");
     ?>

  </body>
</html>
