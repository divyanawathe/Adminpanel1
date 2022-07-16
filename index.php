<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "loginentry";

    $conn = mysqli_connect($servername, $username, $password, $databaseName);
    if (!$conn)
    {
        die ("connection failed".
            mysqli_connect_error());
    }
    if(isset($_POST['loginUsername'])&& isset($_POST['loginPassword'])&& isset($_POST['name']) &&isset($_POST['photo'])){
    $un = mysqli_real_escape_string($conn,$_POST['loginUsername']);
    $pw =  mysqli_real_escape_string($conn,$_POST['loginPassword']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $photo = mysqli_real_escape_string($conn,$_POST['photo']);
  
    $query = "SELECT email,password,name,photo FROM loginpage WHERE email='$un' , password='$pw', name='$name', photo='$photo'";

    $result_can = mysqli_query($conn, $query); 
    $count=mysqli_num_rows($result_can);
    }

    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.jpg">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <style type="text/css">

        .feedback{
            color: #D8000C;
            font-weight: 500 ;
            font-size: 18px;
        }
    </style>
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-none w-100 rounded overflow-hidden bg-none">
          <div class="card-body p-0">
            <div class="row gx-0 align-items-stretch">
              <!-- Logo & Information Panel-->
              <div class="LOGIN">
                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                  <div class="py-5">
                    <!-- <h1 class="display-6 fw-bold"  style="color: black;"></h1> -->
                    <img style="width: 58%;" src="img/logo.png">
                    <p class="fw-light mb-0 fw-bold" style="color: black;" >A better way to plan Interior Design.</p>
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="LOGIN bg-black">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100">
                  <form class="login-form py-5 w-100" action="admin.php" method="POST" name="data">
                    <div class="input-material-group mb-3">
                      <input  class="input-material" id="login-username" type="text" name="loginUsername" autocomplete="off" required data-validate-field="loginUsername">
                      <label class="label-material" for="login-username">User Name</label>
                    </div>
                    <div class="input-material-group mb-4">
                      <input class="input-material" id="login-password" type="password" name="loginPassword" required data-validate-field="loginPassword">
                      <label class="label-material" for="login-password">Password</label>
                    </div>
                    <button class="btn btn-primary mb-3" id="login" type="submit">Login</button><br>

                    <?php
   
                    if(isset($_POST['loginUsername'])&& isset($_POST['loginPassword'])&& isset($_POST['name']) &&isset($_POST['photo'])){
                          if($count==1)
                          {
                              header("Location:index.html");
                          } else {

                              echo '<div class="feedback">* Incorrect details<div/>';
                          }
                      }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center position-absolute bottom-0 start-0 w-100 z-index-20">
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  </body>
</html>