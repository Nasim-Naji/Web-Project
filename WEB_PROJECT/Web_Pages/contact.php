<?php
  include("menu.php");
 ?>
  <!DOCTYPE html>
  <html>
    <head>
        <title>Contact Page</title>
        <?php
          include("head.php");
         ?>
        <style>
              * {
                box-sizing: border-box;
              }

              /* Create two equal columns that floats next to each other */
              .column {
                float: left;
                padding: 10px;
                height: 520px; /* Should be removed. Only for demonstration */
              }

              /* Clear floats after the columns */
              .row:after {
                content: "";
                display: table;
                clear: both;
              }



      </style>
  </head>

<body>

<div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="column" style="width: 70%;">
                <iframe style="width:100% ;height: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.035460063806!2d51.39249771524393!3d35.79906278016694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e062ec6ff7d4f%3A0xcc54d2b761710b81!2sShahid+Beheshti+University!5e0!3m2!1sen!2sca!4v1558542271041!5m2!1sen!2sca"  frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
            <div class="column">
                <h1 style="text-align:center;">Contact Information</h1>
                <hr>
                <p><b>Address:</b> Velenjak st. Daneshjou Boulevard, District 1</p>
                <p>Tehran, Tehran</p>
                <p>19839 69411,Iran</p><br>
                <p><b>Phone:</b>+98 21 222244</p>
                <p><b>Email:</b> info@sbu.edu.ir</p>
                <p><b>Fax:</b>+98 21 22433455</p>
            </div>
        </div>
    </div>
</div>

      <?php
        include("footer.php");
        include("jscript.php");
       ?>

       </body>
    </html>
