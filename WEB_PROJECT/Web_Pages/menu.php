
<?php
  include("config.php");
  include("User.php");
  include("public_functions.php");
 ?>

     <div class="container-fluid" style="padding: 0px;">
          <nav class="navbar navbar-inverse" style="margin-bottom:5px;">
              <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="./Images/logo.png" alt="LOGO" style="height:50px"></a>
              </div>
              <div style="padding-top:25px">
                <ul class="nav navbar-nav">
                  <li><a  href="index.php">HOME</a></li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">ABOUT SBU</a></li>
                      <li><a href="#">HISTORY</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">DEPARTMENTS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">ART</a></li>
                      <li><a href="#">COMPUTER</a></li>
                      <li><a href="#">ENGINEERING</a></li>
                      <li><a href="<img src="./Images/medicine.jpg">MEDICINE</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">CONTACT US</a></li>
                </ul>
                  <ul class="nav navbar-nav navbar-right">


                  <?php

                  session_start();
                  if(!isset($_SESSION["user"])){
                    echo '<li><a href="./signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
                    echo '<li style="padding-right:15px;"><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                  }
                  else{
                    echo '<li><a href="#"><span class="glyphicon "></span>'. $_SESSION["user"]->getfirst_name().' '.$_SESSION["user"]->getlast_name() . '</a></li>';
                    echo '<li style="padding-right:15px;"><a href="./logout.php" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
                  }


                 ?>

                </ul>
              </div>
          </nav>
        </div>
