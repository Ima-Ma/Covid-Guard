<?php
include("connection.php");
$sql = "select * from login";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
</head>
<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Sign In To User</h3>
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
               
                <button type="submit" name="signin" class="btn btn-secondary">Sign In</button>
                
            </div>
            </form>
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
if(isset($_POST['signin'])){
$_username = $_POST['username'];
$_email = $_POST['email'];
$_password = $_POST['password'];

$sql = "insert into user_login (username, email ,password ) values ('$_username','$_email' , '$_password')";

$result = mysqli_query($conn, $sql);

echo"<script>
swal('Account Register successfully!', 'Sign In!', 'success')
setTimeout(function(){
    window.location.href='user_login.php';
},3000)
</script>";

} 


?>