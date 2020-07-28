<?php
include('connection.php');
$id=$_GET['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$post=$_POST['post'];
 
$mysqli->query("update student set name='$name', gender='$gender', 
address='$address', phone='$phone', post='$post' where id=$id");
 
header('location:index.php');
 
?>