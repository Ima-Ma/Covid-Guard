<?php
include("connection.php");
include("header.php");

$ID = $_GET["id"];
$sql = "select * from vaccine_list where id = $ID";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
?>
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
        <div class="content-body">
            
            <div class="container-fluid mt-5 col-lg-6">
                    <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                <form method="POST">
                                    <div class="form-grp">
                                        <label for="">Vaccine Name:</label>
                                        <input type="text" value="<?php echo $rows['vaccine_name'] ?>" name="vaccine_name" class="form-control" placeholder="Enter Your Vaccine Name">
                                    </div>
                                    <div class="form-grp mt-3">
                                        <label for="">Number Of Vaccine Available:</label>
                                        <input type="text" value="<?php echo $rows['vaccine_qauntity'] ?>" name="vaccine_qauntity" class="form-control" placeholder="Enter Number Of Vaccine">
                                    </div>
                                    <button type="submit" name="update" class="btn btn-secondary mt-3 fw-bold">Update!</button>
                                </form>
                                 </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            </div>
</div>

<?php
   if(isset($_POST['update'])){
    $vaccine_name = $_POST['vaccine_name'];
    $vaccine_qauntity = $_POST['vaccine_qauntity'];
    $id = $_GET['id'];
    $sql = "update vaccine_list set vaccine_name = '$vaccine_name', vaccine_qauntity = '$vaccine_qauntity' where id = $id";
    $result = mysqli_query($conn, $sql);
    echo"<script>
    alert('Vaccine Has Been Updated!');
    window.location.href='add_vaccine.php';
     </script>";
}


include("footer.php");
?>