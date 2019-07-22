<?php
  include("config.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Login</title>
    <?php
      include("head.php");
     ?>
  </head>
  <body>
    <?php
      include("menu.php");
     ?>



     <br>
     <br>

      <div class="container">
        <div class="jumbotron">
          <?php
          if (isset($_POST['submit']))
          {
            $login=safe_input($_POST['login']);
            $password_hash=sha1(safe_input($_POST['password']));
            $sql="SELECT * FROM users where login= :login_value and password_hash=:password_hash";
            $STH = $DBH->prepare($sql);
            $STH->bindParam(':login_value', $login);
            $STH->bindParam(':password_hash', $password_hash);
            # setting the fetch mode
            $STH->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"User");
            $STH->execute();
            if ($STH->rowCount() > 0) {
              $user=$STH->fetch();
              session_start();
              $_SESSION["user"] = $user;
              header('Location: ./index.php');
            }
            else {
              echo '<p class="text-danger">Your Login or your Password is invalid.</p>';
            }
          }

         ?>

          <form method="POST" action="login.php">
              <div class="form-group">
                <label for="exampleInputlogin1">Login</label>
                <input name="login" class="form-control" id="login"  placeholder="Enter login" required="required">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
              </div>
              <button type="submit" name="submit" value="Login" class="btn btn-primary">Login</button>
         </form>
        </div>
      </div>



      <br><br>
      <?php
        include("footer.php");
        include("jscript.php");
       ?>

  </body>
</html>
