<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "DELETE FROM `students` WHERE std_id = $id";
mysqli_query($conn,$sql);
header('Location: read.php');

?>