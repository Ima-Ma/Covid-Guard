<?php
include("connection.php");
$sql = "select * from hospital_login";
$result = mysqli_query($conn, $sql);
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

// $mail = new PHPMailer(true);

// try {
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
//     $mail->isSMTP();                                           
//     $mail->Host       = 'smtp.gmail.com';                     
//     $mail->SMTPAuth   = true;                                   
//     $mail->Username   = 'mushtaqueimama@gmail.com';                     
//     $mail->Password   = 'atfanjjcdoegkchk';                               
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
//     $mail->Port       = 465;
//     $mail->setFrom('mushtaqueimama@gmail.com', 'Covid Guard');
//     // $mail->addAddress();    
   

//     //Attachments
//     $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

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
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <h3 class="text-center">Login To Hospital </h3>
             <form  method="POST" enctype="multipart/form-data">
            <div class="login-form">
                <div class="form-group form-floating-label">
                    
                
                    <!-- <input id="hospital_name" name="hospital_name" type="text" class="form-control input-border-bottom" required>
                    
                    
                    <label for="hospital_name" class="placeholder">Hospital Name</label> -->
                </div>
               
                <div class="form-group form-floating-label">
                    <input id="email" name="email" type="email" class="form-control input-border-bottom" required>
                    <label for="Email" class="placeholder">Enter Email</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                    <label for="password" class="placeholder">Enter Password</label>
                </div>
              <button type="submit" name="submit" class="btn btn-secondary">Login</button>
                
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

$email = $_POST['email'];
$password = $_POST['password'];

    $sql = "select * from  hospital_req where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);

  

    $data = mysqli_fetch_assoc($result);

    $hospital_name = $data['hospital_name'];
    $status = $data['status'];

    if($result->num_rows>0 && $status == 1){
    $_SESSION['hospital_name'] = $hospital_name;
       
            echo"<script>
            swal('login successfully!', 'login!', 'success')
            setTimeout(function(){
                window.location.href='index.php';
            },3000)
            </script>";
        
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
