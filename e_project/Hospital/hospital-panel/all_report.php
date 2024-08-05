<?php
include("connection.php");
    include("header.php");

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading"></span>
            <h1 class="heading mb-3">Check Report</h1>
            <p class="mb-5">Stay at home and call your doctor:</strong> The COVID-19 helpline centre in Pakistan · A vital support system during a difficult time · 70,000 contact a day .</p>
          </div>
          
        </div>
      </div>
    </div>
    <div class="container-fluid">
    <table class="table borderd-dark">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>First Name</th>
                                                <th>Email</th>
                                                <th>CNIC</th>
                                                
                                                <th>Vaccine</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="text-dark">
                                            <tr>
                                               <?php
                                               $sql = "select * from report";
                                               $result = mysqli_query($conn , $sql);
                                               while($rows = mysqli_fetch_assoc($result)){
                                               ?>
                                                <td><?php echo $rows['id'] ?></td>
                                                <td><?php echo $rows['first_name'] ?></td>
                                                <td><?php echo $rows['email'] ?></td>
                                                <td><?php echo $rows['cnic_number'] ?></td>
                                                <td><?php echo $rows['status'] ?></td>
                                                <td><a name="run" href="report.php?id=<?php echo $rows['id'];?>" class="btn btn-primary">DOWNLOAD PDF</a></td>
                                                <td>
                                                    <i class="mx-5 fa-solid fa-user-check accept" data-bs-toggle="modal" data-bs-target="#exampleModal" data-email="<?php echo $rows['email'];  ?>" data-id="<?php echo $rows['id'];  ?>"></i>
                                                </td>
                                                
                                              </tr>
                                               <?php } ?>
                                        </tbody>
                                    </table>

    </div>
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
<?php

include("footer.php");
?>

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
   
 
    <button type="submit" name="send" class="btn btn-primary mt-3 fw-bold">Send Report!</button>
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
    $body = 'kindly collect your vaccination report from COVID GUARD!';
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
    $mail->Subject = 'Your Vaccination Report';
    $mail->Body    = ($body);
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "";
}
echo"<script>
    window.location.href='check_appointment.php';
</script>";

 }

 

 