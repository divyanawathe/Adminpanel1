<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tables</title>
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
                  <div class="brand-text d-none d-lg-inline-block"><img style="width: 150px;" src="img/logo2.png"></div>
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
            <li class="sidebar-item active"><a class="sidebar-link" href="tables.php"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#portfolio-grid-1"> </use>
                </svg>Tables </a></li>
             
            </li>
           
            
        </nav>
        <div class="content-inner w-100">
          <!-- Page Header-->
          <header class="bg-white shadow-sm px-4 py-3 z-index-20">
            <div class="container-fluid px-0">
              <h2 class="mb-0 p-1">Tables</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="bg-white">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                  <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
                  <li class="breadcrumb-item active fw-light" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row gy-4">
                <div class="col-lg-6">

                  <div class="card mb-0">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v">
                            </i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1">
                            <a class="dropdown-item py-1 px-3 remove" href="#"> 
                              <i class="fas fa-times"></i>
                              Close
                            </a>
                            <a class="dropdown-item py-1 px-3 edit" href="forms.html"> 
                              <i class="fas fa-cog"></i>Edit
                            </a>
                          </div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Inqueries</h3>
                    </div>
                    <div class="card-body overflow-auto" style="height: 400px ;" >
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">vendor_id</th>
                              <th scope="col">name</th>
                              <th scope="col">email</th>
                              <th scope="col">phone_num</th>
                              <th scope="col">city</th>
                              <th scope="col">state</th>
                              <th scope="col">qur_subject</th>
                              <th scope="col">query</th>
                              <th scope="col">page_no</th>
                              <th scope="col">Delete</th>
                              <th scope="col">Edit </th>
                            </tr>
                          </thead>
                          <tbody class="overflow-auto">
                            <?php include 'retrieve-data.php'; ?>
                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
                  <form method="POST" name="del" action="delete.php">
                            <tr>
                              <th scope="row"><?php echo $array[0];?></th>
                              <input type="hidden" name="id" value=<?php echo $array[0]; ?>>
                              <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                              <td><?php echo $array[3];?></td>
                              <td><?php echo $array[4];?></td>
                              <td><?php echo $array[5];?></td>
                              <td><?php echo $array[6];?></td>
                              <td><?php echo $array[7];?></td>
                              <td><?php echo $array[8];?></td>
                              <td><?php echo $array[9];?></td>
                              <td>
                                <button type="submit" name="submit" class="btn btn-outline-danger" value="Inqueries" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg>
                                </button>
                              </td>
                             <td>
                                 <button type="submit" name="submit" class="btn btn-outline-info" value="ral_standard" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
                                </button>
                              </td>
                            </tr>
                      </form>
                            <?php endwhile; ?>
                            <?php else: ?>
                           <tr>
                   <td colspan="9" rowspan="1" headers="">No Data Found</td>
                </tr>
                 <?php endif; ?>
                <?php mysqli_free_result($result); ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
               <div class="col-lg-6">
                  <div class="card mb-0">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="forms2.html"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">ral_standard</h3>
                    </div>
                    <div class="card-body overflow-auto" style="height: 400px;">
                      <div class="table-responsive">
                        <table class="table mb-0 table-striped">
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">ralcode</th>
                              <th scope="col">rgbnum</th>
                              <th scope="col">hexnum</th>
                              <th scope="col">Name</th>
                              <th scope="col">Delete </th>
                              <th scope="col">Edit </th>
                            </tr>
                      
                          
                             <?php include 'retrieve-data2.php'; ?>
                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
                  <form method="POST" name="del" action="delete.php">
                            <tr>
                              <th scope="row"><?php echo $array[0];?></th>
                              <input type="hidden" name="id" value=<?php echo $array[0]; ?>>
                              <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                              <td><?php echo $array[3];?></td>
                              <td><?php echo $array[4];?></td>
                              <td>
                                 <button type="submit" name="submit" class="btn btn-outline-danger" value="ral_standard" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg>
                                </button>
                              </td>
                              <td>
                                 <button type="submit" name="submit" class="btn btn-outline-info" value="ral_standard" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
                                </button>
                              </td>

                            </tr>
                            </form>
                            <?php endwhile; ?>
                            <?php else: ?>
                           <tr>
                   <td colspan="4" rowspan="1" headers="">No Data Found</td>
                </tr>
                 <?php endif; ?>
                <?php mysqli_free_result($result); ?>

                          
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card mb-0">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="forms3.html"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">sink</h3>
                    </div>
                    <div class="card-body overflow-auto" style="height: 400px;">
                      <div class="table-responsive">
                        <table class="table mb-0 table-striped table-hover">
                          <thead>
                           <tr>
                              <th scope="col">id</th>
                              <th scope="col">source</th>
                              <th scope="col">filename</th>
                              <th scope="col">product_name</th>
                              <th scope="col">type</th>
                              <th scope="col">thumbnail</th>
                              <th scope="col">Delete </th>
                              <th scope="col">Edit </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php include 'retrieve-data3.php'; ?>
                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
                  <form method="POST" name="del" action="delete.php">
                            <tr>
                              <th scope="row"><?php echo $array[0];?></th>
                              <input type="hidden" name="id" value=<?php echo $array[0]; ?>>
                              <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                              <td><?php echo $array[3];?></td>
                              <td><?php echo $array[4];?></td>
                              <td><?php echo $array[5];?></td>
                               <td>
                                 <button type="submit" name="submit" class="btn btn-outline-danger" value="sink" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg>
                                </button>
                              </td>
                              <td>
                                 <button type="submit" name="submit" class="btn btn-outline-info" value="ral_standard" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
                                </button>
                              </td>

                            </tr>
                            </form>
                             <?php endwhile; ?>
                            <?php else: ?>
                           <tr>
                   <td colspan="5" rowspan="1" headers="">No Data Found</td>
                </tr>
                 <?php endif; ?>
                <?php mysqli_free_result($result); ?>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              <div class="col-lg-6">
                  <div class="card mb-0">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="forms4.html"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Client</h3>
                    </div>
                    <div class="card-body overflow-auto" style="height: 400px;">
                      <div class="table-responsive">
                        <table class="table mb-0 table-striped table-sm">
                          <thead>
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">Thumbnail</th>
                              <th scope="col">Design_Diffuse</th>
                              <th scope="col">Design_Specular</th>
                              <th scope="col">Design_Bump</th>
                              <th scope="col">Design Name</th>
                              <th scope="col">X-Scale</th>
                              <th scope="col">Y-Scale</th>
                              <th scope="col">Normal_Intensity</th>
                              <th scope="col">Specular_Intensity</th>
                              <th scope="col">Reflective_Level</th>
                              <th scope="col">Metallic</th>
                              <th scope="col">Roughness</th>
                              <th scope="col">GroutColour</th>
                              <th scope="col">GroutWidth</th>
                              <th scope="col">Room</th>
                              <th scope="col">Type</th>
                              <th scope="col">Finish</th>
                              <th scope="col">Concept_Code</th>
                              <th scope="col">Product_Code</th>
                              <th scope="col">Place_Type</th>
                              <th scope="col">Catalogue</th>
                              <th scope="col">Bookmatch</th>
                              <th scope="col">Description</th>
                              <th scope="col">RandomTile</th>
                              <th scope="col">Delete </th>
                              <th scope="col">Edit </th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php include 'retrieve-data4.php'; ?>
                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>
                  <form method="POST" name="del" action="delete.php">
                            <tr>
                              <th scope="row"><?php echo $array[0];?></th>
                              <input type="hidden" name="id" value=<?php echo $array[0]; ?>>
                              <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                              <td><?php echo $array[3];?></td>
                              <td><?php echo $array[4];?></td>
                              <td><?php echo $array[5];?></td>
                              <td><?php echo $array[6];?></td>
                              <td><?php echo $array[7];?></td>
                              <td><?php echo $array[8];?></td>
                              <td><?php echo $array[9];?></td>
                              <td><?php echo $array[10];?></td>
                              <td><?php echo $array[11];?></td>
                              <td><?php echo $array[12];?></td>
                              <td><?php echo $array[13];?></td>
                              <td><?php echo $array[14];?></td>
                              <td><?php echo $array[15];?></td>
                              <td><?php echo $array[16];?></td>
                              <td><?php echo $array[17];?></td>
                              <td><?php echo $array[18];?></td>
                              <td><?php echo $array[19];?></td>
                              <td><?php echo $array[20];?></td>
                              <td><?php echo $array[21];?></td>
                              <td><?php echo $array[22];?></td>
                              <td><?php echo $array[23];?></td>
                              <td><?php echo $array[24];?></td>
                               <td>
                                 <button type="submit" name="submit" class="btn btn-outline-info" value="Client" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg>
                                </button>
                              </td>
                              <td>
                                 <button type="submit" name="submit" class="btn btn-outline-info" value="ral_standard" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg>
                                </button>
                              </td>

                            </tr>
                            </form>
                            <?php endwhile; ?>
                            <?php else: ?>
                           <tr>
                   <td colspan="24" rowspan="1" headers="">No Data Found</td>
                </tr>
                 <?php endif; ?>
                <?php mysqli_free_result($result); ?>
                          </tbody> 
                        </table>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>

          </section> 
          <!-- Page Footer-->
         <footer class="position-absolute bottom-0 bg-dark text-center py-3  text-xs" id="footer" >
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