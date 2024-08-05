<!doctype html>
<html lang="en">
<head>
  <title>Covid Guard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <style>
    #icons{
      font-size : 30px;
    }
  </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="./index.php" class="fw-bold text-primary">COVID GUARD</a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="./about.php" class="nav-link">About</a></li>
                <li><a href="./contact.php" class="nav-link">Contact Us</a></li>
                <li><a href="./hospital_vaccine.php" class="nav-link">Vaccines </a></li>
                <li><a href="./appointment.php" class="nav-link">Appointment</a></li>
                
                
                
                <li class="has-children">
                  <i class="fa-solid fa-user">
                    
                    </i>
                    <li class="has-children">
                      <?php 
                      session_start();
                   
                        if(!isset($_SESSION['userName'])){
                          echo ' <a href="#" class="nav-link">Sign In</a>
                          <ul class="dropdown">
                            <li><a href="./user_login.php" class="nav-link">User Login</a></li>
                            <li><a href="../../Admin/./Admin_panel/login.php" class="nav-link">Admin Login</a></li>
                            <li><a href="../../Hospital/hospital-panel/sigin.php" class="nav-link">Hospital Login</a></li>
                          </ul>';
                        }
                        else{
                          echo $_SESSION['userName'];
                          echo ' <ul class="dropdown">
                          <li><a href="logout.php" class="nav-link">Logout</a></li>
                          
                        </ul>';
                        }
                       
                      ?>
                     
                    </li>
                 
                </li>
               
              </ul>

            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>