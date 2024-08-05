<?php
include("connection.php");
$id = $_GET['id'];
$sql = "delete from suggestion where id = $id";
$result = mysqli_query($conn , $sql);

echo"<script> 
alert('Suggestion / Precaution Has Been Deleted Successfully!');
window.location.href='user_suggestion.php';
</script>";
?>