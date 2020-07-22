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
 
 
// // Set a constant
// define ("FILEREPOSITORY","profile_images/");
 
// // Make sure that the file was POSTed.
// if (is_uploaded_file($_FILES['pimage']['tmp_name']))
// {
// // Was the file a JPEG?
// if ($_FILES['pimage']['type'] != "image/jpeg") {
// echo "<p>Profile image must be uploaded in JPEG format.</p>";
// } else {
 
// //$tea_name = $_FILES['classnotes']['tea_name'];
// $filename=$tea_id.".jpg";
 
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
