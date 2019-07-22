
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>
            function checklogin() {
              var isLogin=<?php
                                  if(!isset($_SESSION["user"])){
                                    echo '0';
                                  }
                                  else {
                                    echo '1';
                                  }
                              ?>;
                if (isLogin!=1) {
                    window.alert('You are not login!');
                    return false;
                }
            }

  
          var password = document.getElementById("password")
         , confirm_password = document.getElementById("confirm_password");

         function validatePassword(){
             if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Don't Match");
             } else {
              confirm_password.setCustomValidity('');
             }
         }

         password.onchange = validatePassword;
         confirm_password.onkeyup = validatePassword;
    </script>
