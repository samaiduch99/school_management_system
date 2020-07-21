<?php
include('connection.php');
$id=$_GET['tea_id'];
$mysqli->query("delete from teacher where tea_id=$id");
// unlink("profile_images/".$id.".jpg");
header('location:index.php');
?>