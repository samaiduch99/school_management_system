<?php
include('connection.php');
$id=$_GET['id'];
$class_name=$_POST['class_name'];
$floor=$_POST['floor'];
$description=$_POST['description'];

 
$mysqli->query("update classroom set class_name='$class_name', floor='$floor', 
description='$description' where id=$id");
 
header('location:index.php');
 
?>