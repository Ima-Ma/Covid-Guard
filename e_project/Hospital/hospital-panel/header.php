<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid Guard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--

	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .logo{
        font-weight: 800;
        color: white;
    }
    body{
        background-color: #ebdded;
    }
</style>
<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.php">
                    <h1 class="logo">COVID GUARD</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link " href="./add_vaccine.php" irole="button" 
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-syringe"></i>
                                <span>
                                    Add Vacccine
                                </span>
                            </a>
                          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./add_hospital.php">
                            <i class="fa-solid fa-hospital"></i>
                                Available Hospitals
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="./hospital_user.php">
                            <i class="fa-solid fa-hospital-user"></i>
                               Hospital Admin 
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="./check_appointment.php">
                            <i class="fa-solid fa-calendar-check"></i>
                               Check Appointment
                            </a>
                        </li>

                        <?php
            session_start();

            echo '<a style="color : white;" class="mt-3 p-2">'.$_SESSION['hospital_name'].'</a>';

?>

                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.php">
                                <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
