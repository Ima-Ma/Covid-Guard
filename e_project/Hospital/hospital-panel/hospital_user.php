<?php
    include("header.php");
    include("connection.php");

?>
<!-- modal work start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">Add Available Vaccine Here </h3>
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
        <label for=""><h3>Vaccine Name:</h3></label>
        <input type="text" name="vaccine_name" class="form-control" placeholder="Enter New Vaccine Name">
    </div>
    <div class="form-grp mt-3">
        <label for=""><h3>Numbers Of Vaccine Available:</h3></label>
        <input type="number" name="vaccine_qauntity" class="form-control" placeholder="Enter New Vaccine Name">
    </div>
    <button type="submit" name="submit" class="btn btn-secondary mt-3 fw-bold"><i class="fa-solid fa-plus"></i>Add!</button>
</form>
</div>
<?php
if(isset($_POST['submit'])){
$_vaccineName = $_POST['vaccine_name'];
$_vaccineQauntity = $_POST['vaccine_qauntity'];
$sql = "insert into vaccine_list (vaccine_name, vaccine_qauntity ) values ('$_vaccineName','$_vaccineQauntity')";

$result = mysqli_query($conn, $sql);

echo"<script>
swal('Vaccine Register successfully!', 'success')
setTimeout(function(){
    window.location.href='vaccine.php';
},3000)
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

<?php
    include("footer.php");

?>