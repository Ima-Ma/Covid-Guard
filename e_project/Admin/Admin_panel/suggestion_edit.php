<?php
include("connection.php");
include("header.php");

$ID = $_GET["id"];
$sql = "select * from suggestion where id = $ID";
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
                                        <label for="">Age:</label>
                                        <input type="text" value="<?php echo $rows['age'] ?>" name="age" class="form-control" placeholder="Enter Your Age">
                                    </div>
                                    <div class="form-grp mt-3">
                                        <label for="">Doses:</label>
                                        
                                        <input type="text" value="<?php echo $rows['doses'] ?>" name="doses" class="form-control" placeholder="Enter Number Of Doses">
                                    </div>
                                    <div class="form-grp mt-3">
                                        <label for="">Description:</label>
                                        
                                        <input type="text" value="<?php echo $rows['description'] ?>" name="description" class="form-control" placeholder="Enter Your Description">
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
    $_age = $_POST['age'];
    $_doses = $_POST['doses'];
    $_description = $_POST['description'];
    $id = $_GET['id'];
    $sql = "update suggestion set age = '$_age', doses = '$_doses' , description = '$_description' where id = $id";
    $result = mysqli_query($conn, $sql);
    echo"<script>
    alert('User Suggestions Has Been Updated!');
    window.location.href='user_suggestion.php';
     </script>";
}


include("footer.php");
?>