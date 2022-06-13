<!DOCTYPE html>
<?php
//including the database connection file
include("mydbCon.php");
if(isset($_POST['Submit'])) 
{    

 
        
           
//insert data to database
  $result ="INSERT INTO sink (id,source,filename,product_name,type,thumbnail) VALUES ('".$_POST['id']."', '".$_POST['source']."','".$_POST['filename']."', '".$_POST['product_name']."','".$_POST['type']."', '".$_POST['thumbnail']."')";
  if ($dbCon->query($result) === TRUE)
  {

    echo"<script type='text/javascript'>alert('submitted successfully!')</script>";

  }
  else{
    echo "<script type='text/javascript'>alert('failed!')</script>";
  }
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forms</title>
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
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header z-index-50">
        <nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
          <!-- Search Box-->
          <div class="search-box shadow-sm">
            <button class="dismiss d-flex align-items-center">
              <svg class="svg-icon svg-icon-heavy">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
            <form id="searchForm" action="#" role="search">
              <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
            </form>
          </div>
          <div class="container-fluid w-100">
            <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                  <div class="brand-text d-none d-lg-inline-block"><img style="width:150px;" src="img/logo2.png"></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>V</strong></div></a>
                <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn" href="#"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#">
                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                      <use xlink:href="#find-1"> </use>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar z-index-40">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="img/avatar-1.jpg" alt="...">
            <div class="ms-3 title">
              <h1 class="h4 mb-2">Mark Stephen</h1>
              <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
          <ul class="list-unstyled py-4">
            <li class="sidebar-item"><a class="sidebar-link" href="index.html"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#real-estate-1"> </use>
                </svg>Home </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="tables.php"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#portfolio-grid-1"> </use>
                </svg>Tables </a></li>
           
              <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#browser-window-1"> </use>
                </svg>Forms</a>
              <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <li><a class="sidebar-link" href="forms.php">Inqueries</a></li>
                <li><a class="sidebar-link" href="forms2.php">ral_standard</a></li>
                <li><a class="sidebar-link" href="forms3.php">sink</a></li>
                <li><a class="sidebar-link" href="forms4.php">Client</a></li>
              </ul>
            </li>

            <li class="sidebar-item"><a class="sidebar-link" href="login.php"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#disable-1"> </use>
                </svg>Login page </a></li>
        </nav>
        <div class="content-inner w-100">
          <!-- Page Header-->
          <header class="bg-white shadow-sm px-4 py-3 z-index-20">
            <div class="container-fluid px-0">
              <h2 class="mb-0 p-1">Forms</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="bg-white">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                  <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
                  <li class="breadcrumb-item active fw-light" aria-current="page">Forms</li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">sink</h3>
                    </div>
                    <div class="card-body">
                    <form action="#" method="POST" class="form-horizontal">
                        <div class="row">
                          <label class="col-sm-3 form-label">id</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="number" name="id" required>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">source</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="source" required>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">filename</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="filename" required>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">product_name</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="product_name" required>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">type</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="type" required>
                          </div>
                        </div>
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <label class="col-sm-3 form-label">thumbnail</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="thumbnail" required>
                          </div>
                        </div>
                        
                       
                        <div class="border-bottom my-5 border-gray-200"></div>
                        <div class="row">
                          <div class="col-sm-9 ms-auto">
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit" name="Submit">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="position-absolute bottom-0 bg-dark text-center py-3 w-100 text-xs" id="footer" >
                  <img style="width: 10%;" src="img/logo2.png">
          </footer>
        </div>
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