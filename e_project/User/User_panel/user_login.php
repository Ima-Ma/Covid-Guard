<?php
include("connection.php");


session_start();
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
    </style>
</head>
<body class="login">
    <div class="wrapper wrapper-login">
        <div class="row">
            
            <div class="col-lg-6 ms-auto">

            <div class="container container-login animated fadeIn">
            <h3 class="text-center">Log In To User</h3>
            <div class="login-form">
                
                
            <form  method="POST" enctype="multipart/form-data">
            <div class="login-form">
                <div class="form-group form-floating-label">
                
                    <input id="username" name="username" type="text" class="form-control input-border-bottom" required>
                    
                    
                    <label for="username" class="placeholder">Username</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="email" name="email" type="email" class="form-control input-border-bottom" required>
                    <label for="Email" class="placeholder">Email</label>
                </div>
                <div class="form-group form-floating-label">
                    <input  id="passwordsignin" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="passwordsignin" class="placeholder">Password</label>
                    <div class="show-password">
                        <i class="flaticon-interface"></i>
                    </div>
                </div>
               
                <button type="submit" name="login" class="btn btn-secondary">Log In</button>
                
            </div>
            </form>
                <div class="login-account">
                    <span class="msg">Don't have an account yet ?</span>
                    <a href="./user_sign.php" id="show-signup" class="link">Sign Up</a>
                </div>
            </div>
            </div>
        </div>
        </div>

                
                
                
            
    </div>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/ready.js"></script>
</body>
</html>
<?php

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $_password = $_POST['password'];
    
    $sql = "select * from  user_login where username = '$username' and email = '$email' and password = '$_password'";
    $result = mysqli_query($conn, $sql);


    if($result->num_rows>0){
        $_SESSION['userName'] = $username;
        while($rows =mysqli_fetch_assoc($result)){
            echo"<script>
            swal('login successfully!', 'login!', 'success')
            setTimeout(function(){
                window.location.href='index.php';
            },3000)
            </script>";
        }
    }
    else{
        echo"<script>
        swal({
            title: 'login failed',
            text: 'Please Register your Account',
            timer: 2000
          });
      
        </script>";
    }
}

?>