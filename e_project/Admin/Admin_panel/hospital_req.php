<?php
include("header.php");
include("connection.php");

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style>
        #accept{
            color: green;
            font-size: 22px;
        }
      </style>
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
          <div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h1 class="display-5 fw-bold my-3">It's going to disappear!</h1>
                        </div>
                    </div>
                    
                </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class=" bg-secondary text-white card-header">
                        <h4 class="text-white card-title">Queries Asked By Users!</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table table-responsive-sm text-dark">
                                <thead> 
                                    <tr>
                                        <th>Id</th>
                                        <th>Hospital Name</th>
                                        <th>Hospital location</th>
                                        <th>Email</th>
                                        <th>Accept Request</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <tr>
                                
    <?php
    $sql = "SELECT * FROM hospital_req";
    $result = mysqli_query($conn, $sql);
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $rows['id'] ?></td>
            <td><?php echo $rows['hospital_name'] ?></td>
            <td><?php echo $rows['location'] ?></td>
            <td><?php echo $rows['email'] ?></td>
            <td>
                <i class="mx-5 fa-solid fa-user-check accept" data-bs-toggle="modal" data-bs-target="#exampleModal" data-email="<?php echo $rows['email'];  ?>" data-id="<?php echo $rows['id'];  ?>"> </i>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<!-- <form method="POST">
    <div class="form-grp">
        <label for=""><h3>Name</h3></label>
        <input type="text" name="vaccine_name" class="form-control" id="name">
    </div>
</form> -->

<script>
   document.addEventListener('DOMContentLoaded', (event) => {
    const icons = document.querySelectorAll('.accept');
    const nameInput = document.getElementById('name');
    const userIdInput = document.getElementById('user_id'); 

    icons.forEach(icon => {
        icon.addEventListener('click', function() {
            const clickedId = this.getAttribute('data-id'); 
            const email = this.getAttribute('data-email');
            
            console.log(clickedId);

            nameInput.value = email;
            userIdInput.textContent = clickedId; 
        });
    });
});
</script>
   
                              </tbody>
                            </table>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- modal work start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">Send An Email!</h3>
        <button data-bs-dismiss="modal" aria-label="Close">
        <i class="fa-solid fa-x"></i>
        </button>
      </div>
      <div class="modal-body">
<div class=" container">
<form method="POST">
    <div class="form-grp">
        <label for=""><h3>Email:</h3></label>
        <input type="text" class="form-control" name="email" id="name">
    </div>
   
 
    <button type="submit" name="send" class="btn btn-secondary mt-3 fw-bold">Send Approval Code!</button>
</form>

</div>
      </div>
    </div>
  </div>
</div>
<!-- modal work end -->
<?php
    include("footer.php");
?>
<script>

</script>
<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if(isset($_POST['send'])){
    $email = $_POST['email'];
    $code = random_int(10000, 99999);

    $_SESSION['confirm_code'] = $code;

    // setcookie('verification_code', $code, time() + (86400 * 30), "/");
    $mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'mushtaqueimama@gmail.com';                  
    $mail->Password   = 'jyfdrilzewtwcrrf';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                  
    $mail->setFrom('mushtaqueimama@gmail.com', 'Covid Guard');
    $mail->addAddress($email);    
    $mail->isHTML(true);                                 
    $mail->Subject = 'Hospital Verification Code';
    $mail->Body    = ($code);
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "";
}

 }

