<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: login.html");
        exit();
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.png and root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- All css here -->

    <!-- bootstrap 4.0 css -->
    <link rel="stylesheet" href="dashboard/css/bootstrap.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="dashboard/css/owl.carousel.min.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="dashboard/css/animate.min.css">
    <!-- magnific css -->
    <link rel="stylesheet" href="dashboard/css/magnific-popup.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="dashboard/css/meanmenu.min.css">
    <!-- Icon font css -->
    <link rel="stylesheet" href="dashboard/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard/css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="dashboard/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="dashboard/css/responsive.css">
    <script src="jq/jquery.js"> 
  </script>
    <script>
  $(document).ready(function(){
 
    $(window).ready(function(){
  //loader
  $(".load").fadeOut(2000);
  $(".page").fadeIn(1000);
                        });   

 
 
 });


 
 </script>
</head>


<body>
    <!-- preloader  -->
    <p class="load">
<img src="images/zik.gif" alt="loading....." style="
  display:flex;
  margin-left: auto;
  margin-right: auto;
  margin-top:10%;
  margin-bottom: 90%;
  ">
</p>
    
   
<div style="display: none;" class="page">


        
    <main>
  
        

  <!-- Start Breadcrumb Area -->
  
        <nav  style="background-color: black;">
            <ol >
                <li class="breadcrumb-items"><a href="index.html">Home</a><i 
                    aria-hidden="true"></i></li>
                <li class="breadcrumb-items"><a >Dashboard</a></li>
            </ol>
        </nav>
    
    <!-- End Breadcrumb Area -->
         <div class="dsahboard-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <aside class="sidebar">
                            <div class="dashboard-side">
                                <div class="dashboard-head">
                                    <div class="dashboard-profile">
                                        
                                        <div class="profile-content">
                                            <span class="pro-name">Welcome to dashboard</span>
                                            <span class="pro-number"><?php echo $_SESSION['email']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-menu">
                                    <ul>
                                        <li class="active"><a href="welcome.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-person-square" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                                        </svg>    
                                        Dashboard</a></li>

                                        <li><a href="plan.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-cart-check" viewBox="0 0 16 16">
                                        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                        </svg>
                                        suscription plan</a></li>
                                        <li><a href="mymusic.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-file-music" viewBox="0 0 16 16">
                                        <path d="M10.304 3.13a1 1 0 0 1 1.196.98v1.8l-2.5.5v5.09c0 .495-.301.883-.662 1.123C7.974 12.866 7.499 13 7 13c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 10.134 6.501 10 7 10c.356 0 .7.068 1 .196V4.41a1 1 0 0 1 .804-.98l1.5-.3z"/>
                                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                        </svg>    
                                        My musics</a></li>
                                        <li><a href="change-password.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                        </svg>    
                                        change password</a></li>
                                        <li><a href="logout.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        </svg>    
                                        Log out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-8">
                         <div class="col-md">
                                <div class="single-dash-head">
                                    <div class="dashboard-amount">
                                        <div class="amount-content">
                                            <span class="pro-name">Play music</span>
                                            <span class="pro-money">online</span>
                                        </div>
                                        <div class="invest-tumb">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-player" viewBox="0 0 16 16">
                                        <path d="M4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3zm1 0v3h6V3H5zm3 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                        <path d="M11 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="single-dash-head">
                                    <div class="dashboard-amount">
                                        <div class="amount-content">
                                            <span class="pro-name">Dowload music</span>
                                            <span class="pro-money">Play Forver</span>
                                        </div>
                                        <div class="invest-tumb">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Start Footer Area -->
    <footer class="footer1 dashboard-footer">
        <!-- Start Footer Bottom Area -->
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>
                                Copyright © 2024
                                <a href="#">Gospel Music for alls</a> All Rights Reserved
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
    </footer>
    <!-- End Footer Area -->

    <!-- All JS here -->

    <!-- modernizr JS -->
    <script src="dashboard/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- jquery latest version -->
    <script src="dashboard/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Poper js -->
    <script src="dashboard/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="dashboard/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="dashboard/js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="dashboard/js/jquery.meanmenu.js"></script>
    <!-- Counter js -->
    <script src="dashboard/js/jquery.counterup.min.js"></script>
    <!-- waypoint js -->
    <script src="dashboard/js/waypoints.js"></script>
    <!-- magnific js -->
    <script src="dashboard/js/magnific.min.js"></script>
    <!-- wow js -->
    <script src="dashboard/js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="dashboard/js/plugins.js"></script>
    <!-- main js -->
    <script src="dashboard/js/main.js"></script>
    </div>
</body>

</html>