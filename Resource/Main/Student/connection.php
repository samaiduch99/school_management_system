<?php
//Create database connection
$mysqli = mysqli_connect("localhost","root","","php_crud");

if (!$mysqli) {

die("Connection error: " . mysqli_connect_error());

}
?>