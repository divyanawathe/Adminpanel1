 <?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "loginentry";

    $conn = mysqli_connect($servername, $username, $password, $databaseName);
if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
      }
    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
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
              <input class="form-control shadow-0" type="text">
            </form>
          </div>
          <div class="container-fluid w-100">
            <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block" href="login.php">
                    <div class="brand-text d-none d-lg-inline-block"><img style="width: 150px;" src="img/logo2.png"></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>V</strong></div></a>
                <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn" href="#"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <a  id="search" href="#"></a>
              <a href="index.php"> Login<i class="bi bi-person-circle"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg></a>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
       <nav class="side-navbar z-index-40">
          <!-- Sidebar Header-->
          <form method="POST"  name="" action="upload.php">
                          
         <div class="sidebar-header d-flex align-items-center py-4 px-3"> <!--<img class="avatar shadow-0 img-fluid rounded-circle" src="">-->
            <div class="ms-3 title">
              <!--<h1 class="h4 mb-2"></h1>-->
              <h3 class="text-sm text-gray-700 fw-light mb-0 lh-1"><?php echo $_POST['loginUsername']; ?></h3>
            </div>
          </div>
           </form> 
          <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
          <ul class="list-unstyled py-4">
            <li class="sidebar-item active"><a class="sidebar-link" href="login.php"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#real-estate-1"> </use>
                </svg>Home </a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#browser-window-1"> </use>
                </svg>Tables</a>
              <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <li><a class="sidebar-link" href="Inquiries.php">Inqueries</a></li>
                <li><a class="sidebar-link" href="ral_standard.php">ral_standard</a></li>
                <li><a class="sidebar-link" href="sink.php">sink</a></li>
                <li><a class="sidebar-link" href="Client.php">Client</a></li>
              </ul>
            </li>
        </nav>
        <div class="content-inner w-100">
          <!-- Page Header-->
          <header class="bg-white shadow-sm px-4 py-3 z-index-20">
            <div class="container-fluid px-0">
              <h2 class="mb-0 p-1">Admin Panel</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="pb-0">
            <div class="container-fluid">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="row gx-5 bg-white">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-violet">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#user-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">New<br>Clients</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-violet" role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">25</strong></div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-red">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#survey-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">Work<br>Orders</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-red" role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">70</strong></div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-green">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#numbers-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">New<br>Invoices</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-green" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">40</strong></div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-orange">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#list-details-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">Open<br>Cases</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-orange" role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">50</strong></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="pb-0">
            <div class="container-fluid">
              <div class="row align-items-stretch">
                <!-- Statistics -->
                <div class="col-lg-3 col-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-red"><i class="fas fa-tasks"></i></div>
                        <div class="ms-3"><strong class="text-lg d-block lh-1 mb-1">234</strong><small class="text-uppercase text-gray-500 small d-block lh-1">Applications</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-green"><i class="far fa-calendar"></i></div>
                        <div class="ms-3"><strong class="text-lg d-block lh-1 mb-1">152</strong><small class="text-uppercase text-gray-500 small d-block lh-1">Interviews</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-0">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-orange"><i class="far fa-paper-plane"></i></div>
                        <div class="ms-3"><strong class="text-lg d-block lh-1 mb-1">147</strong><small class="text-uppercase text-gray-500 small d-block lh-1">Forwards</small></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Line Chart            -->
                <div class="LOGIN col-12">
                  <div class="card mb-0 h-100">
                    <div class="card-body">
                      <canvas id="lineCahrt"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-12">
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
    <script src="js/charts-home.js"></script>
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