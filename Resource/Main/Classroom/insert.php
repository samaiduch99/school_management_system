<?php
include('connection.php');
 
$class_name=$_POST['class_name'];
$floor=$_POST['floor'];
$description=$_POST['description'];

$mysqli->query("insert into classroom (class_name, floor, description) 
values ('$class_name', '$floor', '$description')");
 
$res = $mysqli->query("select id from classroom order by id desc");
header('location:index.php');
?>