<?php
include('connection.php');
$id=$_GET['tea_id'];
$mysqli->query("delete from teacher where tea_id=$id");
header('location:index.php');
?>