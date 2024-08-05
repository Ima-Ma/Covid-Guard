<?php
include("header.php");
include("connection.php");

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading"></span>
            <h1 class="heading mb-3">Vaccines & Hospitals</h1>
            <p class="mb-5">Hospitalization risk increases in patients if patients are aged ≤ 18 years  and in patients affected with the Delta variant if they are aged > 45 years the Delta and Omicron variants was similar for both the BBIBP-CorVand BNT162b2 vaccines respectively.</p>
          </div>
        </div>
      </div>
</div>
<div class="container">
  <?php
  $sql = "select * from suggestion";
  $result = mysqli_query($conn, $sql);
  $count = 0;
  while ($rows = mysqli_fetch_assoc($result)) {
    // Start a new row for every 2 cards
    if ($count % 2 == 0) {
      echo '<div class="row">';
    }
    echo '<div class="col-lg-6 mt-3 my-5">
            <div class="card text-white">
              <img src="./images/color.png" height="250px" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title">' . $rows['doses'] . '</h5>
                <p class="card-text">' . $rows['description'] . '</p>
                <p class="card-text">' . $rows['age'] . '</p>
              </div>
            </div>
          </div>';
   
    if ($count % 2 != 0) {
      echo '</div>';    
    }
    $count++;
  }
  // Close the row if the number of cards is not even
  if ($count % 2 != 0) {
    echo '</div>';
  }
  ?>
</div>
</div>
<!-- <div class="col-lg-6 mt-3 my-5">
<div class="card text-white">
  <img src="./images/color.png" height="250px" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
</div> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>



 





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

include("footer.php");
?>




