<?php
include("connection.php");
$sql = "select * from hospital_req";
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
   #icon{
    font-size: 24px;
    font-weight: bold;
    padding: 8px;
   }
</style>
</head>
<body >
<div class="login">
    <a href="../../User/User_panel/index.php"><i id="icon" class="fa-solid fa-house text-secondary"></i></a>
    <a href="./login.php" class="btn btn-secondary">Login</a>
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">SignUp in To Hospital </h3>
             <form  method="POST" enctype="multipart/form-data">
            <div class="login-form">
                <div class="form-group form-floating-label">
                    
                
                    <input id="hospital_name" name="hospital_name" type="text" class="form-control input-border-bottom" required>
                    
                    
                    <label for="hospital_name" class="placeholder">Hospital Name</label>
                </div>
                <div class="form-group form-floating-label">
                    <input  id="location" name="location" type="text" class="form-control input-border-bottom" required>
                    <label for="location" class="placeholder">Enter location</label>
                    
                </div>
                <div class="form-group form-floating-label">
                    <input id="email" name="email" type="email" class="form-control input-border-bottom" required>
                    <label for="Email" class="placeholder">Enter Email</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Enter Password</label>
                </div>
              <button type="submit" name="submit" class="btn btn-secondary">Send Request!</button>
                
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
session_start();
if(isset($_POST['submit'])){
$hospital_name = $_POST['hospital_name'];
$location = $_POST['location'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "insert into hospital_req (hospital_name, location ,email , password ) values ('$hospital_name','$location' , '$email' , '$password')";

$result = mysqli_query($conn, $sql);

$_SESSION['h_name'] = $hospital_name;

$h_id = mysqli_insert_id($conn);

$_SESSION['h_id'] = $h_id;



echo"<script>
swal('Your Request Has Been Delivered')
setTimeout(function(){
     window.location.href='msg.php';
},3000)
</script>";
} 


?>