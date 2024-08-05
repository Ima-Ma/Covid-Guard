<?php
    include("./connection.php");
    include("./header.php");

?>
    
    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Contact</span>
            <h1 class="heading mb-3">Get In Touch</h1>
            <p class="mb-5">Stay at home and call your doctor:</strong> The COVID-19 helpline centre in Pakistan · A vital support system during a difficult time · 70,000 contact a day .</p>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
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
                    <input type="text" id="lname" name="last_name" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="description" id="message" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <input type="submit" name="submit" class="btn btn-primary" value="Send Message">
                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-5 ml-auto">
            <h3 class="mb-3 side-title">Quick info</h3>
            <div class="quick-contact">

              <div class="d-flex">
                <span class="icon-room"></span>
                <address>
                 North-Nazimabad Karachi
                </address>
              </div>
              <div class="d-flex">
                <span class="icon-phone"></span>
                0312-1231234
              </div>
              <div class="d-flex">
                <span class="icon-envelope"></span>
                imamamushtaque@gmail.com
              </div>
              <div class="d-flex">
                <span class="icon-globe"></span>
                https://COVID GUARD.com
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php

if(isset($_POST['submit'])){
   $_first_name=$_POST['first_name'];
   $_last_name=$_POST['last_name'];
   $_email=$_POST['email'];
   $_subject=$_POST['subject'];
   $_description=$_POST['description'];
  
   $sql="insert into user_queries(first_name , last_name , email , subject , description) values('$_first_name','$_last_name','$_email','$_subject','$_description')";
   $result=mysqli_query($conn,$sql);

  
 
   echo"<script>
   alert('Your Query Has Been Delivered!');


   </script>";
}
    include("footer.php")
?>