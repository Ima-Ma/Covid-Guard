<?php
include("connection.php");
$id = $_GET['id'];
$sql = "delete from vaccine_list where id = $id";
$result = mysqli_query($conn , $sql);

echo"<script> 
alert('Vaccine Has Been Deleted Successfully!');
window.location.href='add_vaccine.php';
</script>";
?>