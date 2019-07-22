<?php
  include("config.php");
 ?>

 <!DOCTYPE html>
 <html>
   <head>
       <title>Main Page</title>
       <?php
         include("head.php");
        ?>
   </head>

   <body>

     <?php
       include("menu.php");
      ?>

          <!--Slider-->
          <div id="myCarousel" class="carousel slide " data-ride="carousel" style="height:400px;">
          <ol class="carousel-indicators">
               <?php

                       $STH = $DBH->query('SELECT * FROM slider');
                       # setting the fetch mode
                       $STH->setFetchMode(PDO::FETCH_ASSOC);
                       $counter=0;

                       while($row = $STH->fetch()) {
                  ?>
                          <li data-target="#myCarousel" data-slide-to="<?php echo $counter; ?>" <?php if($counter==0) {echo 'class="active"';} ?> ></li>

                  <?php
                          $counter=$counter + 1;
                      }
                  ?>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                       <?php
                           $STH = $DBH->query('SELECT * FROM slider');
                           # setting the fetch mode
                           $STH->setFetchMode(PDO::FETCH_ASSOC);
                           $counter=0;

                           while($row = $STH->fetch()) {
                          ?>
                              <div <?php if($counter==0) {echo 'class="item active"';} else {echo 'class="item"';}?>>
                                <a href="<?php echo $row['Link_Address']; ?>">
                                  <img src="<?php echo $row['Image']; ?>"  style="height:400px;">
                                </a>
                                <div class="carousel-caption">
                                  <h3><?php echo $row['Header_Text']; ?></h3>
                                  <p><?php echo $row['Description_Text']; ?></p>
                                </div>
                              </div>
                      <?php
                          $counter=$counter + 1;
                          }
                      ?>

                  </div>
                  <!-- Wrapper for slides -->





                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>

</div>

  <br><br><br>
<div class="container">
 <div class="row">
   <?php

              $STH = $DBH->query('SELECT * FROM thumbnail');
              # setting the fetch mode
              $STH->setFetchMode(PDO::FETCH_ASSOC);
              while($row = $STH->fetch()) {
       ?>
                 <div class="col-sm-6 col-md-4 col-lg-3" >
                   <div class="thumbnail" style="border-radius:50px;">
                     <a href="<?php echo $row['Link_Address']; ?>" onclick = "return checklogin()">
                       <img src="<?php echo $row['Image']; ?>" style="width:150; height:175px;"/>
                     </a>
                     <div class="caption" style="text-align: center;">
             					<h1><?php echo $row['Header_Text']; ?></h1>
             					<p><?php echo $row['Description_Text']; ?></p>
             				</div>
                   </div>
                 </div>
           <?php
               }
         ?>
 </div>
</div>

<br><br>

<?php
  include("footer.php");
  include("jscript.php");
 ?>

 </body>
 </html>
