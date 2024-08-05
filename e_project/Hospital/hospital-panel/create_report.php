<?php
include("header.php");
include("connection.php");
$ID = $_GET["id"];
$sql = "SELECT appointment_list.*, vaccine_list.vaccine_name
FROM appointment_list
JOIN vaccine_list ON appointment_list.select_vaccine = vaccine_list.id
WHERE appointment_list.id = $ID;";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);

?>

<style>
    #option{
        padding: 8px;
        width: 50%;
    }
</style>
        <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">COVID GAURD! </h3>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Patient Name</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo $rows ['first_name'] ?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $rows ['email'] ?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>CNIC Number</label>
                                                <input type="text" name="cnic_number" class="form-control" value="<?php echo $rows ['cnic_number'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                            <label>Date Of Birth</label>
                                                <input type="text" name="dob" class="form-control" value="<?php echo $rows ['dob'] ?>">
                                            </div>
                                            <div class="col-lg-3">
                                            <label>Location</label>
                                                <input type="text" name="location" class="form-control" value="<?php echo $rows ['location'] ?>">
                                            </div> <div class="col-lg-3">
                                            <label>Post Code</label>
                                                <input type="text" name="post_code" class="form-control" value="<?php echo $rows ['post_code'] ?>">
                                            </div> <div class="col-lg-3">
                                            <label>Selected Vaccine</label>
                                            <input type="hidden" name="vaccine_id" value="<?php echo $rows['select_vaccine']; ?>">
<input type="text" class="form-control" value="<?php echo $rows['vaccine_name']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <label>STATUS</label>
                                               <select name="status" id="option" class="mt-5">
                                                <option value=""></option>
                                                <option value="Fully Vaccinated">Fully Vaccinated</option>
                                                <option value="Not Vaccinated">Not Vaccinated</option>
                                                <option value="First Dose">First Dose</option>

                                               </select>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary mt-3">Check Report</button>
                                        <!-- <a  name="submit" href="report.php?id=<?php echo $rows['id'];?>" class="btn btn-primary mt-5">Generate report</a> -->
                                    </form>
                                </div>
                </div>
                            
                            </div>
                            </div>


<?php
   if(isset($_POST['submit'])){
    $firstName = $_POST['name'];
    $contact= $_POST['email'];
    $cnic = $_POST['cnic_number'];
    $date_of_birth = $_POST['dob'];
    $location = $_POST['location'];
    $postcode = $_POST['post_code'];
    $vaccine = $_POST['vaccine_id'];
    $status = $_POST['status'];
    $id = $_GET['id'];
    $sql = "insert into report(first_name,email,cnic_number ,dob , location, post_code,vaccine ,status) values('$firstName ', '$contact' , '$cnic' , '$date_of_birth' , '$location' , '$postcode' , '$vaccine' , '$status')";
    $result = mysqli_query($conn, $sql);
    echo"<script>
    alert('done!');
    window.location.href='all_report.php';

     </script>";
}


include("footer.php");
?>