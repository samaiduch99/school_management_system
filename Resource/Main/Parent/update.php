<?php
include('connection.php');
$id=$_GET['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$province=$_POST['province'];
$phone=$_POST['phone'];

 
$mysqli->query("update parent set name='$name', gender='$gender', 
province='$province', phone='$phone' where id=$id");
 
 
// // Set a constant
// define ("FILEREPOSITORY","profile_images/");
 
// // Make sure that the file was POSTed.
// if (is_uploaded_file($_FILES['pimage']['tmp_name']))
// {
// // Was the file a JPEG?
// if ($_FILES['pimage']['type'] != "image/jpeg") {
// echo "<p>Profile image must be uploaded in JPEG format.</p>";
// } else {
 
// //$name = $_FILES['classnotes']['name'];
// $filename=$id.".jpg";
 
// unlink(FILEREPOSITORY.$filename);
// $result = move_uploaded_file($_FILES['pimage']['tmp_name'],
// FILEREPOSITORY.$filename);
// //$result = move_uploaded_file($_FILES['pimg']['tmp_name'],
// "http://localhost/php-crud-studet/profile_images/28.jpg";
// if ($result == 1) echo "<p>File successfully uploaded.</p>";
// else echo "<p>There was a problem uploading the file.</p>";
// }
// }
 
header('location:index.php');
 
?>