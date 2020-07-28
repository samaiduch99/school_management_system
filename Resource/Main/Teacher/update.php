<?php
include('connection.php');
$tea_id=$_GET['tea_id'];
$tea_name=$_POST['tea_name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$tea_email=$_POST['tea_email'];
 
$mysqli->query("update teacher set tea_name='$tea_name', gender='$gender', 
age='$age', phone='$phone', tea_email='$tea_email' where tea_id=$tea_id");
  
header('location:index.php');
 
?>