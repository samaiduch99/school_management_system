<!DOCTYPE html >
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
</head>
<style>
/* body, html {
 // height: 100%;
} */
#body_bg
{ 

  /* The image used */
  background-image: url("../assets/images/bg.jpg");

  /* Full height */
  /* //height: 100%; */

  /* Center and scale the image nicely */
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


h2,span{
    color:white;
    /* margin-top: 240px; */
}
form{
    border:1px red;
}
.card{
    margin-top:50%;
}
.card-body{
    padding:5%;
    border: 2px solid white;
    border-radius: 5%;
    border-style: dotted;
    
}

</style>
<body id="body_bg">
<!-- <div  div align="center"> -->

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <div class="card-header text-white text-center">
                    <h2>Login Form</h2>
                    <br>
                </div>
                <div class="card-body ">
                <br>
                    <form  method="post" action="authen_login.php" class="form-group">
                        <div class="form-group">
                            <span class="text-white" for="user_id">User Name</span>
                            <input class="form-control" type="text" name="user_id" id="user_id">
                        </div>
                        <div class="form-group">
                            <span class="text-white" for="user_pass">Password</span>
                            <input class="form-control" type="password" name="user_pass" id="user_pass"></input>
                        </div>

                        <div class="form-group">
                        <input class="btn text-white" type="submit" value="Login" />
                       
                    </form>
                </div>
            </div>
        
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>
    
	<!-- </div> -->
</body>
</html>

