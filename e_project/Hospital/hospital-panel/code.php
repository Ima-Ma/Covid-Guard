<?php
include("connection.php");
// include("../../Admin/Admin_panel/hospital_req.php");

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
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Enter Your Verification Code</h3>
             <form  method="POST" enctype="multipart/form-data">
            <div class="login-form">
                <div class="form-group form-floating-label">
                   
                    <input value="<?php    ?>" id="code" name="code" type="text" class="form-control input-border-bottom" required>
                    <label for="code" class="placeholder">Enter Code</label>
                   <button class="btn btn-secondary mt-3" name="signin" type="submit">Log In</button>
                </div>
                <?php
    //  $code = random_int(10000, 99999);
    
    session_start();

    $code = $_SESSION['confirm_code'];
    $h_id = $_SESSION['h_id'];

    // $code = $_COOKIE['verification_code'];


    if(isset($_POST['signin'])){
        $enteredCode = $_POST['code'];
        if($enteredCode == $code){

            $query = $conn->prepare("UPDATE hospital_req SET status = 1 WHERE id = ?");
            $query->bind_param("i", $h_id);
            $query->execute();

            echo "<script>
                alert('Code is correct.');
                window.location.href='index.php';
                </script>";
            exit; // Stop execution after redirect
        } else {
            echo "<script> 
                alert('Incorrect code. Please try again.');
                </script>";
        }
    }
?>
            </form>
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
