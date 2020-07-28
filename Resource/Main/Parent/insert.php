<?php
include('connection.php');
 
$name=$_POST['name'];
$gender=$_POST['gender'];
$province=$_POST['province'];
$phone=$_POST['phone'];
$mysqli->query("insert into parent (name, gender, province,phone) 
values ('$name', '$gender', '$province','$phone')");
 
$res = $mysqli->query("select id from parent order by id desc");
header('location:index.php');
?>