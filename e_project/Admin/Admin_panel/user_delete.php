<?php
include("connection.php");
$id = $_GET['id'];
$sql = "delete from user_register where id = $id";
$result = mysqli_query($conn , $sql);

echo"<script> 
alert('User Has Been Deleted Successfully!');
window.location.href='user.php';
</script>";
?>