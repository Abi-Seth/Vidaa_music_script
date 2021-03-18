<?php 
   session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta property="fb:app_id" content="1643990952546825" />
   <meta name="format-detection" content="telephone=no" />
   <meta name="apple-mobile-web-app-capable" content="yes" />
   <meta name="description" content="VIDAA | Platform">
   <meta name="keywords" content="VIDAA Video official platform.">
   <meta name="author" content="Abijuru Seth">

   <title>VIDAA | The Ultimate Video Sharing Platform</title>
   
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
</head>

   <body id="page-top" class="sidebar-toggled">
      <div id="page-loader"></div>
      <nav class="navbar navbar-expand navbar-light bg-white static-top abi-seth-nav sticky-top">
         &nbsp;&nbsp; 
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="index.php"><img style="width: 85px; margin-top: -10px;" class="img-fluid" alt="" src="img/logo.png"></a>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 abi-seth-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i> 
                  </button>
               </div>
            </div>
         </form>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0 abi-seth-right-navbar">
            <li class="nav-item mx-1">
               <a class="nav-link" href="upload.php">
               <i class="fas fa-plus-circle fa-fw"></i>
               Upload
               </a>
            </li>
            <?php
               if(isset($_SESSION['userId'])){
                     echo '  <li class="nav-item dropdown no-arrow mx-1">
                              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-bell fa-fw"></i>
                              <span class="badge badge-danger">9+</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-video "></i> &nbsp; Videos (new)</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Audio Updates</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; My channels progress</a>
                              </div>
                              </li>
                           <li class="nav-item dropdown no-arrow mx-1">
                              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-envelope fa-fw"></i>
                              <span class="badge badge-success">7</span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Messages</a>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Create chat</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#"><i class="fas fa-fw fa-cogs "></i> &nbsp; Chat settings</a>
                              </div>
                           </li>'; 
                  }else{
                    echo ' <li class="nav-item mx-1">
                              <a class="nav-link" href="import.php">
                              <i class="fas fa-link fa-fw"></i>
                              Import
                              </a>
                           </li>';
                  } 
            ?> 
            <!-- <li class="nav-item dropdown no-arrow mx-1">
               <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-headphones fa-fw"></i>
               <span class="badge badge-success">7</span>
               </a>
            </li> -->
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
               <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <?php
                  if(isset($_SESSION['userId'])){
                     echo '<img alt="Avatar" src="img/user.png">
                           Abi-Seth
                           </a>'; 
                  }else{
                     echo '<img alt="Avatar" src="img/male_prof.jpg">
                           </a>';
                  } 
               ?>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <?php
                     if(isset($_SESSION['userId'])){
                           echo '<a class="dropdown-item" href="single-channel.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                                 <a class="dropdown-item" href="account-switch.php"><i class="fas fa-fw fa-user-friends"></i> &nbsp; Switch accounts</a>
                                 <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="admin-panel.php"><i class="fas fa-fw fa-solar-panel"></i> &nbsp; Admin Panel</a> 
                                 <a class="dropdown-item" href="advertise.php"><i class="fas fa-fw fa-bullhorn"></i> &nbsp; Advertise</a> 
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a> 
                                 <a class="dropdown-item" href="help.php"><i class="fas fa-fw fa-question-circle"></i> &nbsp; Help</a> 
                                 <a class="dropdown-item" href="feedback.php"><i class="fas fa-book-reader"></i> &nbsp; Give feedback</a> '; 
                     }
                     else{
                           echo '<a class="dropdown-item" href="login.html"><i class="fas fa-fw fa-sign-in-alt"></i> &nbsp; Login</a>
                                 <a class="dropdown-item" href="register.html"><i class="fas fa-fw fa-user-plus"></i> &nbsp; Register</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="help.php"><i class="fas fa-fw fa-question-circle"></i> &nbsp; Help</a> 
                                 <a class="dropdown-item" href="feedback.php"><i class="fas fa-book-reader"></i> &nbsp; Give feedback</a> ';
                     } 
                  ?>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav toggled" style="transition:.2s ease;">
            <li class="nav-item">
               <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="trending.php">
                  <i class="fas fa-fw fa-fire"></i>
                  <span>Trending</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="audio-page.php">
                  <i class="fas fa-fw fa-headphones"></i>
                  <span>Audio Play</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="article.php">
                  <i class="fas fa-fw fa-newspaper"></i>
                  <span>Articles</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="channels.php">
               <i class="fas fa-fw fa-users"></i>
               <span>Channels</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="upload-video.php">
               <i class="fas fa-fw fa-cloud-upload-alt"></i>
               <span>Upload Video</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-folder"></i>
               <span>Quick access</span>
               </a>
               <div class="dropdown-menu">
                  <h6 class="dropdown-header">Fast Access:</h6>
                  <a class="dropdown-item" href="liv.php">Live videos</a>
                  <a class="dropdown-item" href="watch-later.php">Watch later</a>
                  <a class="dropdown-item" href="Report.php">Report</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Other Pages:</h6>
                  <a class="dropdown-item" href="setting.php">Settings</a>
                  <a class="dropdown-item" href="apps.php">Vidaa Apps</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="history-page.php">
               <i class="fas fa-fw fa-history"></i>
               <span>History Page</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="categories.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list"></i>
               <span>Categories</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="categories.php">Movie</a>
                  <a class="dropdown-item" href="categories.php">Music</a>
                  <a class="dropdown-item" href="categories.php">Television</a>
                  <a class="dropdown-item" href="categories.php" style="font-size: 13px; color: white;">More</a>
               </div>
            </li>
            <?php
               if(isset($_SESSION['userId'])){
                 echo '<li class="nav-item channel-sidebar-list">
                        <h6>SUBSCRIPTIONS</h6>
                        <ul>
                           <li>
                              <a href="subscriptions.php">
                              <img class="img-fluid" alt="" src="img/s1.png"> Your Life 
                              </a>
                           </li>
                           <li>
                              <a href="subscriptions.php">
                              <img class="img-fluid" alt="" src="img/s2.png"> Unboxing  <span class="badge badge-warning">2</span>
                              </a>
                           </li>
                           <li>
                              <a href="subscriptions.php">
                              <img class="img-fluid" alt="" src="img/s3.png"> Product / Service  
                              </a>
                           </li>
                           <li>
                              <a href="subscriptions.php">
                              <img class="img-fluid" alt="" src="img/s4.png">  Gaming 
                              </a>
                           </li>
                        </ul>
                     </li>';
            } 
            ?>
         </ul>
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="video-block section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                            Rated</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                            Viewed</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                            &nbsp; Close</a>
                                    </div>
                                </div>
                                <h6>Blank Page</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary border-none">Primary</button>
                            <button type="button" class="btn btn-secondary border-none">Secondary</button>
                            <button type="button" class="btn btn-success border-none">Success</button>
                            <button type="button" class="btn btn-danger border-none">Danger</button>
                            <button type="button" class="btn btn-warning border-none">Warning</button>
                            <button type="button" class="btn btn-info border-none">Info</button>
                            <button type="button" class="btn btn-light border-none">Light</button>
                            <button type="button" class="btn btn-dark border-none">Dark</button>
                            <button type="button" class="btn btn-link border-none">Link</button>
                            <hr>
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn btn-outline-success">Success</button>
                            <button type="button" class="btn btn-outline-danger">Danger</button>
                            <button type="button" class="btn btn-outline-warning">Warning</button>
                            <button type="button" class="btn btn-outline-info">Info</button>
                            <button type="button" class="btn btn-outline-light">Light</button>
                            <button type="button" class="btn btn-outline-dark">Dark</button>
                            <hr>
                            <button type="button" class="btn btn-primary btn-lg border-none">Large button</button>
                            <button type="button" class="btn btn-secondary btn-lg border-none">Large button</button>
                            <hr>
                            <button type="button" class="btn btn-primary btn-sm border-none">Small button</button>
                            <button type="button" class="btn btn-secondary btn-sm border-none">Small button</button>
                            <hr>
                            <button type="button" class="btn btn-primary btn-lg btn-block border-none">Block level
                                button</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block border-none">Block level
                                button</button>
                            <hr>
                            <div class="alert alert-primary" role="alert">
                                A simple primary alert—check it out!
                            </div>
                            <div class="alert alert-secondary" role="alert">
                                A simple secondary alert—check it out!
                            </div>
                            <div class="alert alert-success" role="alert">
                                A simple success alert—check it out!
                            </div>
                            <div class="alert alert-danger" role="alert">
                                A simple danger alert—check it out!
                            </div>
                            <div class="alert alert-warning" role="alert">
                                A simple warning alert—check it out!
                            </div>
                            <div class="alert alert-info" role="alert">
                                A simple info alert—check it out!
                            </div>
                            <div class="alert alert-light" role="alert">
                                A simple light alert—check it out!
                            </div>
                            <div class="alert alert-dark mb-0" role="alert">
                                A simple dark alert—check it out!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-sm-6">
                             <p class="mt-1 mb-0">&copy; Copyright 2020 <strong class="text-dark">Vidaa</strong>. All
                                 Rights Reserved<br>
                                 <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a
                                         class="text-primary" target="_blank"
                                         href="http://abi-seth.epizy.com/">Abi-Seth</a>
                                 </small>
                             </p>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-right">
                            <div class="app">
                                <a href="#"><img alt="" src="img/google.png"></a>
                                <a href="#"><img alt="" src="img/apple.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <form action="includes/logout.inc.php" method="POST">
                     <button class="btn btn-primary" name="logout-submit" type="submit">Logout</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Owl Carousel -->
    <script src="vendor/owl-carousel/owl.carousel.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/custom.js"></script>
</body>

</html>