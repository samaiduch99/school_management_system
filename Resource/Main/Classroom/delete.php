<?php
include('connection.php');
$id=$_GET['id'];
$mysqli->query("delete from classroom where id=$id");
// unlink("profile_images/".$id.".jpg");
header('location:index.php');
?>