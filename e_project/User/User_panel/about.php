<?php
include("./connection.php");
include("./header.php");


?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading"></span>
            <h1 class="heading mb-3">About Us</h1>
            <p class="mb-5">All COVID-19 vaccines, listed by WHO as for emergency use or prequalified, provide protection against severe disease and death resulting from COVID-19 infection.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Team</h2>
            <p></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="team">
              <img src="1.jpg" alt="Image" class="img-fluid">
              <h3>Imama</h3>
              <p>I'm an adaptable and experienced hospital administrator. I have 1 year experience managing hospital vaccines to ensure  care and support. </p>
              <p>
                <span class="d-block mb-2"><strong>Hospital administrator</strong></span>
                
              </p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="team">
              <img src="3.jpg" alt="Image" class="img-fluid">
              <h3>Bushra</h3>
              <p>I will maintain web content and design to ensure that the assigned website is functional, accurate,Available hospital and vaccine up to date.</p>
              <p>
                <span class="d-block mb-2"><strong>Admin administrator</strong></span>
                
              </p>
            </div>
          </div>
      
        </div>
      </div>
    </div>


    <div class="site-section stats">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading">Coronavirus Statistics</h2>
            <p>Major progress has been made with the COVID-19 vaccination response</p>
          </div>
        </div>
        <div class="row"> 
          <div class="col-lg-4">
            <div class="data">
              <span class="icon text-primary">
              <i id="icons" class="bi bi-hospital"></i>
               
              </span>
              <p class="card-category">Hospitals Available</p>
                        <h4 class="card-title"><?php
                        $sql = "select id from hospital_req order by id";
                        $result = mysqli_query($conn , $sql);
                        $row = mysqli_num_rows($result);
                        echo "<h1>$row</h1>";
                        ?>
                        </h4>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="data">
              <span class="icon text-primary">
              <i id="icons" class="bi bi-card-list"></i>
              </span>
              <p class="card-category">User List</p>
                        <h4 class="card-title"><?php
                        $sql = "select id from user_login order by id";
                        $result = mysqli_query($conn , $sql);
                        $row = mysqli_num_rows($result);
                        echo "<h1>$row</h1>";
                        ?>
                        </h4>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="data">
              <span class="icon text-primary">
              <i id="icons" class="bi bi-virus"></i>
              </span>
              <p class="card-category">Vaccine Available</p>
                        <h1 class="card-title"><?php 
                        $sql = "select id from vaccine_list order by id";
                        $result = mysqli_query($conn , $sql);
                        $row = mysqli_num_rows($result);
                        echo "<h1>$row</h1>";
                        ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="inter" class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">What you need to do</span>
            <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
            <p>Wearing a mask and putting distance between yourself and others</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 ">
            <div class="row mt-5 pt-5">
              <div class="col-lg-6 do ">
                <h3>You should do</h3>
                <ul class="list-unstyled check">
                  <li>Stay at home</li>
                  <li>Wear mask</li>
                  <li>Use Sanitizer</li>
                  <li>Disinfect your home</li>
                  <li>Wash your hands</li>
                  <li>Frequent self-isolation</li>
                </ul>
              </div>
              <div class="col-lg-6 dont ">
                <h3>You should avoid</h3>
                <ul class="list-unstyled cross">
                  <li>Avoid infected people</li>
                  <li>Avoid animals</li>
                  <li>Avoid handshaking</li>
                  <li>Aviod infected surfaces</li>
                  <li>Don't touch your face</li>
                  <li>Avoid droplets</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="images/protect.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>





    
    </div>
<?php
include("footer.php");
?>