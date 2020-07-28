<?php
include('connection.php');
 
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$post=$_POST['post'];
$mysqli->query("insert into student (name, gender, address,phone,post) 
values ('$name', '$gender', '$address','$phone','$post')");
 
$res = $mysqli->query("select id from student order by id desc");
header('location:index.php');
?>