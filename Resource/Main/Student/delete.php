<?php
include('connection.php');
$id=$_GET['id'];
$mysqli->query("delete from student where id=$id");
header('location:index.php');
?>