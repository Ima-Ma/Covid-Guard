<?php
session_start();
include("./connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Covid Guard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/azzara.min.css">
    <style>
        #main{
            font-weight: bold;
            font-size: 62px;
        }
        .imp{
            margin-top: 150px;
        }
        #icon{
    font-size: 24px;
    font-weight: bold;
    padding: 8px;
   }
    </style>
</head>
<body class="login">
    <a href="../../User/User_panel/index.php"><i id="icon" class="fa-solid fa-house text-secondary"></i></a>
    <div class="wrapper wrapper-login">
        <div class="row">
            
            <div class="col-lg-6 ms-auto">

            <div class="container container-login animated fadeIn">
           
            <div class="login-form">
                
                
            <form  method="POST" enctype="multipart/form-data">
            <div class="login-form">
                <div class="message">
                    <h1>Wait For Your Approval!</h1>
                </div>
                
                <h1 class="mt-3">OR</h1>
              
               <div class="button mt-3">
           
           <a type="submit" name="goback" class="btn btn-secondary" href="./code.php">Enter Your Code</a>

               </div>
                
                
            </div>
            </form>
                <div class="login-account">
                  
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>