<?php  
 require('db_connection.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_login` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
header("Location:Main/index.html");

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
header("Location:login.php");
//echo "Invalid Login Credentials";
}
}