<?php
include("header.php");
include("connection.php");
$sql ="select appointment_list .* , vaccine_list.vaccine_name , hospital_req.hospital_name from appointment_list inner join vaccine_list on appointment_list.select_vaccine=vaccine_list.id inner join hospital_req on appointment_list.select_hospital=hospital_req.id";
$result = mysqli_query($conn , $sql);


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
          <div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h1 class="display-5 fw-bold my-3"> Wear a properly fitted mask!</h1>
                        </div>
                    </div>
                    
                </div>
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class=" bg-secondary text-white card-header">
                        <h4 class="text-white card-title">Appointment List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table table-responsive-sm text-dark">
                                <thead> 
                                    <tr>
                                        <th>Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Date Of Birth</th>
                                        <th>Location</th>
                                        <th>Age</th>
                                        <th>Email</th>
                                        <th>Selected Vaccine</th>
                                        <th>Selected Hospital</th>
                                        <th>Post Code</th>
                                        <th>CNIC#</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <tr>
                                    <?php
                                    //    $sql = "select * from appointment_list";
                                    //    $result = mysqli_query($conn , $sql);
                                    while($rows = mysqli_fetch_assoc($result)){
                                           
                                    ?>
                                    <td><?php echo $rows['id'] ?>
                                    
                                </td>
                                                <td><?php echo $rows['first_name'] ?></td>
                                                <td><?php echo $rows['last_name'] ?></td>
                                                <td><?php echo $rows['dob'] ?></td>
                                                <td><?php echo $rows['location'] ?></td>
                                                <td><?php echo $rows['age'] ?></td>
                                                <td><?php echo $rows['email'] ?></td>
                                                <td><?php echo $rows['vaccine_name'] ?></td>
                                                <td><?php echo $rows['hospital_name'] ?></td>
                                                <td><?php echo $rows['post_code'] ?></td>
                                                <td><?php echo $rows['cnic_number'] ?></td>


                                                  
                                </tr>
                                    <?php  } ?>   
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
 
      <?php
include("footer.php");
?>