<?php
include("./connection.php");
include("./header.php");


?>

<div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading"></span>
            <h1 class="heading mb-3">Get An Appointment</h1>
            <p class="mb-5">When your body is fighting off a viral infection like COVID-19, you may feel very tired and find it hard to focus.</p>
          </div>
          
        </div>
      </div>
    </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
        <form method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" name="first_name" id="fname" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="lname">Last name</label>
                    <input type="text" name="last_name" id="lname" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="dob">Date O f Birth</label>
                    <input type="date" name="dob" id="dob" class="form-control">
                  </div>
                </div>
              

              
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="contact-number">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="age" class="form-control">
                  </div>
                </div>
                
              

              
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="post-code">Post Code</label>
                    <input type="text" name="post_code" id="post-code" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-lg-12">
                  <div class="form-group">
                    <label for="cnic">CNIC:#</label>
                    <input type="text" name="cnic_number" id="cnic" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-lg-12">
                  <div class="form-group">
                    <label for="vaccine">Select Vaccine</label>
                   <select type="text" name="select_vaccine" id="vaccine" class="form-control">
                   <option value="Select Your Vaccine"></option>

                    <?php
                        $sql = "select * from vaccine_list";
                        $result = mysqli_query($conn, $sql);
                    while($rows = mysqli_fetch_assoc($result)){
                      ?>
                        <option value="<?php echo $rows['id']?>" ><?php echo $rows['vaccine_name']?></option>
                  <?php } ?>
                    
                   </select>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-lg-12">
                  <div class="form-group">
                    <label for="hospital">Select Hospital</label>
                   <select type="text" name="select_hospital" id="hospital" class="form-control">
                    <option value="Select Your Hospital"></option>
                   <?php
                        $sql = "select * from hospital_req";
                        $result = mysqli_query($conn, $sql);
                    while($rows = mysqli_fetch_assoc($result)){
                      ?>
                        <option value="<?php echo $rows['id']?>" ><?php echo $rows['hospital_name']?>Select hospital</option>
                  <?php } ?>
                  </div>
                </div>
              </div>

           

              <div class="row">
                <div class="col-lg-6 mt-3">
                  <input type="submit" name="submit" class="btn btn-primary mt-3" value="Get An Appointment">
                </div>
              </div>

            </form>
        </div>
    </div>
</div>

</div>
<?php

 if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $dob=$_POST['dob'];
    $location=$_POST['location'];
    $contact_number=$_POST['email'];
    $age=$_POST['age'];
    $post_code=$_POST['post_code'];
    $cnic_number=$_POST['cnic_number'];
    $select_vaccine=$_POST['select_vaccine'];
    $select_hospital=$_POST['select_hospital'];
    $sql="insert into appointment_list(first_name,last_name,dob,location,email,age,post_code,cnic_number,select_vaccine,select_hospital) values('$first_name','$last_name','$dob','$location','$contact_number','$age','$post_code','$cnic_number','$select_vaccine','$select_hospital')";
    $result=mysqli_query($conn,$sql);

   
  
    echo"<script>
    alert('your appointment has been booked!');


    </script>";
}

include("footer.php");

?>