<?php
include("connection.php");
include("header.php");

$ID = $_GET["id"];
$sql = "select * from login where id = $ID";
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
                                        <label for="">Login Name:</label>
                                        <input type="text" value="<?php echo $rows['login_name'] ?>" name="login_name" class="form-control" placeholder="Enter New Name">
                                    </div>
                                    <div class="form-grp mt-3">
                                        <label for="">Login Email:</label>
                                        
                                        <input type="email" value="<?php echo $rows['login_email'] ?>" name="login_email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-grp mt-3">
                                        <label for="">Login Password:</label>
                                        
                                        <input type="password" value="<?php echo $rows['login_password'] ?>" name="login_password" class="form-control" placeholder="Enter Your Password">
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
    $_name = $_POST['login_name'];
    $_email = $_POST['login_email'];
    $_password = $_POST['login_password'];
    $id = $_GET['id'];
    $sql = "update login set login_name = '$_name', login_email = '$_email' , login_password = '$_password' where id = $id";
    $result = mysqli_query($conn, $sql);
    echo"<script>
    alert('Your Admin Record Has Been Updated!');
    window.location.href='admin.php';
     </script>";
}

include("footer.php");
?>