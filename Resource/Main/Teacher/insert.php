<?php
include('connection.php');
 
$tea_name=$_POST['tea_name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$tea_email=$_POST['tea_email'];
$mysqli->query("insert into teacher (tea_name, gender, age,phone,tea_email) 
values ('$tea_name', '$gender', '$age','$phone','$tea_email')");
 
$res = $mysqli->query("select id from teacher order by id desc");
header('location:index.php');
?>