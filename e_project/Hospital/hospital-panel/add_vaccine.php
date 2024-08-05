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
                    <div class="col-lg-12">
                   
                        <button class="btn btn-primary float-right my-5" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i> Add Vaccine</button>
                        </div>
                    </div>
                  
                </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class=" bg-light  card-header">
                        <h4 class="text-dark card-title">Vaccine Available</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                        <table class="table table-responsive-sm text-dark">
                                <thead> 
                                    <tr>
                                        <th>Id</th>
                                        <th>Vaccine Name</th>
                                        <th>Vaccine Qauntity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <tr>
                                    <?php
                                       $sql = "select * from vaccine_list";
                                       $result = mysqli_query($conn , $sql);
                                    while($rows = mysqli_fetch_assoc($result)){
                                    ?>
                                    <td><?php echo $rows['id'] ?>
                                    
                                </td>
                                                <td><?php echo $rows['vaccine_name'] ?></td>
                                                <td><?php echo $rows['vaccine_qauntity'] ?> </td>
                                                 <td>
                                                 <a href="vaccine_delete.php?id=<?php echo $rows['id'];?>" class="mx-5 text-danger"> <i class="fa-solid fa-trash"></i></a>
                                                 <a href="vaccine_edit.php?id=<?php echo $rows['id'];?>" class="mx-5 text-success"> <i class="fa-solid fa-pen-to-square"></i></a>
                                                 </td>        
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


<?php
    include("footer.php");
?>
<!-- modal work start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">Add Vaccine </h3>
        <button data-bs-dismiss="modal" aria-label="Close">
        <i class="fa-solid fa-x"></i>
        </button>
      </div>
      <div class="modal-body">
      <?php
    include("connection.php");
    $sql = "select * from vaccine_list";
    $result = mysqli_query($conn, $sql);
    ?>
<div class=" container">
<form method="POST">
    <div class="form-grp">
        <label for=""><h3>Vaccine name:</h3></label>
        <input type="text" name="vaccine_name" class="form-control" placeholder="Enter vaccine_name!">
    </div>
    <div class="form-grp mt-3">
        <label for=""><h3>Vaccine Qauntity</h3></label>
        <input type="text" name="vaccine_qauntity" class="form-control" placeholder="Enter Number Of Vaccine!">
    </div>
    <button type="submit" name="submit" class="btn btn-secondary mt-3 fw-bold"><i class="fa-solid fa-plus"></i>Add!</button>
</form>
</div>
<?php
if(isset($_POST['submit'])){
$vaccine_name = $_POST['vaccine_name'];
$vaccine_qauntity = $_POST['vaccine_qauntity'];
$sql = "insert into vaccine_list(vaccine_name, vaccine_qauntity) values ('$vaccine_name', '$vaccine_qauntity')";

$result = mysqli_query($conn, $sql);

echo"<script>
alert('Vaccine added');
</script>";

} 


?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal work end -->