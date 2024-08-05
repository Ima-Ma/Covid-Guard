<?php
include("connection.php");
$id = $_GET['id'];
$sql = "delete from login where id = $id";
$result = mysqli_query($conn , $sql);

echo"<script> 
alert('Admin Has Been Deleted Successfully!');
window.location.href='admin.php';
</script>";
?>