<?php
        include("header.php");
        include("connection.php");

    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading">Covid-19 Awareness</span>
            <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
            <p class="mb-5">All COVID-19 vaccines, listed by WHO as for emergency use or prequalified, provide protection against severe disease and death resulting from COVID-19 infection.</p>
            <p class="mb-4"><a href="./about.php/#inter" class="btn btn-primary">How to prevent</a></p>



          </div>
          <div class="col-lg-6">
            <figure class="illustration">
              <img src="images/illustration.png" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>


    <!-- MAIN -->
    
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


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <figure class="img-play-vid">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
              <div class="absolute-block d-flex">
                <span class="text">Watch the Video</span>
                <a href="https://www.youtube.com/watch?v=9pVy8sRC440" data-fancybox class="btn-play">
                  <span class="icon-play"></span>
                </a>
              </div>
            </figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
            <p> it is critical to continue the progress, particularly for those most at risk of disease.</p>
            <ul class="list-check list-unstyled mb-5">
              <li>Messenger RNA (mRNA) vaccine</li>
              <li>Vector vaccine.</li>
              <li>Protein subunit vaccine.</li>
            </ul>
            <p><a href="about.php" class="btn btn-primary">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container pb-5">
      <div class="row">
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-protection"></span>
            </div>
            <div>
              <h3>Protection</h3>
              <span class="d-block">vaccines became available last fall</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-patient"></span>
            </div>
            <div>
              <h3>Prevention</h3>Sick with COVID-19..</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-hand-sanitizer"></span>
            </div>
            <div>
              <h3>Treatments</h3>
              <span class="d-block">reatment guidelines, developed and updated regularly by a U.S..</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="feature-v1 d-flex align-items-center">
            <div class="icon-wrap mr-3">
              <span class="flaticon-virus"></span>
            </div>
            <div>
              <h3>Symptoms</h3>
              <span class="d-block">Pain, swelling, and redness.</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">

            <div class="row">
              <div class="col-6 col-lg-6 mt-lg-5">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-stay-at-home"></span>
                  </div>
                  <div class="body">
                    <h3>Stay at home</h3>
                    <p>Try to stay at home and avoid contact with other people !</p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-patient"></span>
                  </div>
                  <div class="body">
                    <h3>Wear facemask</h3>
                    <p>Wash your hands before and after touching the mask.</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-6">
                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-social-distancing"></span>
                  </div>
                  <div class="body">
                    <h3>Keep social distancing</h3>
                    <p>Wearing a mask and putting distance between yourself and others can help lower the risk of COVID-19 transmission. </p>
                  </div>
                </div>

                <div class="media-v1 bg-1">
                  <div class="icon-wrap">
                    <span class="flaticon-hand-washing"></span>
                  </div>
                  <div class="body">
                    <h3>Wash your hands</h3>
                    <p>Wash your hands frequently with soap and water/sanitiser.</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-5 ml-auto">
            <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
            <p>Avoid large gatherings and unnecessary physical contact. </p>
            <p class="mb-4">Don't touch your face without thoroughly washing your hands with soap and water.</p>

            <ul class="list-check list-unstyled mb-5">
              <li>Messenger RNA (mRNA) vaccine</li>
              <li>Vector vaccine.</li>
              <li>Protein subunit vaccine.</li>
            </ul>

            <p><a href="./hospital_vaccine.php" class="btn btn-primary">Read more about prevention</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <span class="subheading">What you need to do</span>
            <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
            <p> Stay up to date with COVID-19 vaccines. · Practice good hygiene (practices that improve cleanliness) ·</p>
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


    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 mx-auto text-center">
            <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
            <p>Fever or chills.
              Cough.
              Shortness of breath or difficulty breathing.
              Fatigue.
              Muscle or body aches.
              Headache.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_high-fever.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>High Fever</h3>
                <p>  A fever is when your body temperature is 100.4°F (38°C) or greater. See a doctor if temperatures are at least 100.4°F (38°C).</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_cough.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Cough</h3>
                <p>The most common symtoms of COVID-19 are fever, tiredness and dry cough.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_sore-troath.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Fatigue.</h3>
                <p>When your body is fighting off a viral infection like COVID-19, you may feel very tired and find it hard to focus.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="symptom d-flex">
              <div class="img">
                <img src="images/symptom_headache.png" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3>Headache</h3>
                <p>COVID headache is one of the most common neurological symptoms of COVID-19 infection.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-lg-10">
            <div class="note row">

              <div class="col-lg-8 mb-4 mb-lg-0"><strong>Stay at home and call your doctor:</strong> The COVID-19 helpline centre in Pakistan · A vital support system during a difficult time · 70,000 calls a day .</div>
              <div class="col-lg-4 text-lg-right">
                <a href="./contact.php" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help line</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


   
    
    <?php
        include("footer.php");
    ?>
