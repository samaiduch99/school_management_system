<?php
include('connection.php');
$id=$_GET['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$province=$_POST['province'];
$phone=$_POST['phone'];

 
$mysqli->query("update parent set name='$name', gender='$gender', 
province='$province', phone='$phone' where id=$id");
 
header('location:index.php');
 
?>