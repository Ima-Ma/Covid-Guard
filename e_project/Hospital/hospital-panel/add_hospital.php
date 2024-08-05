<?php
include("header.php");
include("connection.php");

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
          <div class="content-body">
    <div class="container-fluid text-white">
        <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h1 class="display-5 fw-bold my-3"> Wear a properly fitted mask!</h1>
                        </div>
                    </div>
                  
                </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class=" bg-light  card-header">
                        <h4 class="text-dark card-title">Hospital Available!</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table class="table table-responsive-sm text-dark">
                                <thead> 
                                    <tr>
                                        <th>Id</th>
                                        <th>Hospital Name</th>
                                        <th>location</th>
                                       
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <tr>
                                    <?php
                                       $sql = "select * from hospital_req";
                                       $result = mysqli_query($conn , $sql);
                                    while($rows = mysqli_fetch_assoc($result)){
                                    ?>
                                    <td><?php echo $rows['id'] ?>
                                    
                                </td>
                                                <td><?php echo $rows['hospital_name'] ?></td>
                                                <td><?php echo $rows['location'] ?></td>
                                                  
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