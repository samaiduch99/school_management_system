<!DOCTYPE html>

<html>

<head>

    <title>PHP/MySQLi CRUD Operation using Bootstrap/Modal</title>
    <script type= "text/javascript" src="../../../dist/js/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../dist/css/bootstrap.min.css" />
    <script type= "text/javascript" src="../../../dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../dist/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="../../../dist/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../../dist/js/bootstrap-filestyle.min.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script>
    $(document).ready(function() {
        $('#empTable').dataTable();

    });
    </script>
</head>

<body style="margin:20px auto">
    <center>
        <h2><span style="font-size:25px; color:blue">
                List Of Friendship At University </span>
        </h2>
    </center>

    <div class="container">
        <br /><br />
        <div class="row header col-sm-12" style="text-align:center;color:black">
            <span class="pull-left">
                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Add New
                </a></span>

            <div style="height:50px;"></div>
            <table class="table table-striped table-bordered table-responsive table-hover" id="empTable">
                <thead>
                    <th>
                        <center>ID</center>
                    </th>
                    <th>
                        <center>Full-Name</center>
                    </th>
                    <th>
                        <center>Gender</center>
                    </th>
                    <th>
                        <center>Age</center>
                    </th>
                    <th>
                        <center>Phone</center>
                    </th>
                    <th>
                        <center>Email</center>
                    </th>
                    <!-- <th>
                        <center>Picture</center>
                    </th> -->
                    <th>
                        <center>Action</center>
                    </th>
                </thead>
                <tbody>
                    <?php
include('connection.php');
$result=$mysqli->query("select * from teacher");
while($row=$result->fetch_assoc()){
// $img = "http://localhost/php-crud-student/profile_images/".$row['id']. ".jpg";
?>
                    <tr>
                        <td><?php echo $row['tea_id']; ?></td>
                        <td><?php echo $row['tea_name']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['tea_email']; ?></td>
                        <!-- <td> <img src='?php echo $img ?>' height="50px" width="70px" /></td> -->
                        <td>
                            <a href="#detail<?php echo $row['tea_id']; ?>" data-toggle="modal"
                                class="btn btn-success btn-sm">
                                <span class="glyphicon glyphicon-floppy-open"></span> Detail</a>&nbsp;

                            <a href="#edit<?php echo $row['tea_id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</a>&nbsp;

                            <a href="#del<?php echo $row['tea_id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">
                                <span class="glyphicon glyphicon-trash"></span> Delete</a>

                            <!-- include edit modal -->
                            <?php include('show_detail_modal.php'); ?>
                            <!-- End -->
                            <!-- include edit modal -->
                            <?php include('show_edit_modal.php'); ?>
                            <!-- End -->
                            <!-- include delete modal -->
                            <?php include('show_delete_modal.php'); ?>
                            <!-- End -->
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p style="text-align:center">@Copyright by virak <a
                    href="https://www.passerellesnumeriques.org/en/">https://www.passerellesnumeriques.org</a></p>
        </div>
        <!-- include insert modal -->
        <?php include('show_add_modal.php'); ?>
        <!-- End -->
    </div>
</body>

</html>