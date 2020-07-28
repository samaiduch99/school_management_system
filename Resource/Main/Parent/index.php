<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/student_image.jpg">
    <title>Student Management System</title>
    <!-- Custom CSS -->
    <link href="../../../dist/css/style.min.css" rel="stylesheet">

    <script type= "text/javascript" src="../../../dist/js/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="../../../dist/css/bootstrap.min.css" /> -->
    <script type= "text/javascript" src="../../../dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../dist/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="../../../dist/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../../dist/js/bootstrap-filestyle.min.js"> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
    $(document).ready(function() {
        $('#empTable').dataTable();

    });
</script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand" style="height: 0px; margin-left: auto;">
                        <a href="../index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="../../../assets/images/student_image.jpg" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../../../assets/images/student_image.jpg" alt="homepage" class="light-logo" style="height: 61px; width:250px; margin-left: -11px" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../../assets/images/student_image.jpg" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                               
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right" style="margin-top: 15px;">
                        <a href="../../logout.php" class="btn btn-danger btn-xs" style="margin-right: 12px;">Log Out</a>
                        <a href="../../reset-password.php" class="btn btn-warning btn-xs">Rest</a>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../index.html" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Teacher/index.php" aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">Teacher</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Student/index.php" aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Student</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Parent/index.php" aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">Parent</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../Classroom/index.php" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Classroom</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../contact_us.php" aria-expanded="false">
                                <i class="mdi mdi-alert-outline"></i>
                                <span class="hide-menu">Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="Center">
                <div class="List" style="text-align: center;">
                   <h1>List Of Parents</h1>
                </div>
            </div>

            <div class="container-fluid">

                <!-- <div class="row header col-sm-6"> -->
                <span class="pull-left" >
                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-plus"></span> Add New
                </a></span><br><br>
               <!-- </div>     -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                

            <div style="height: -20px;"  ></div>
            <table class="table table-striped table-bordered table-hover " style="text-align:center" id="empTable">
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
                        <center>Province</center>
                    </th>
                    <th>
                        <center>Phone</center>
                    </th>
                
                    <th>
                        <center>Action</center>
                    </th>
                </thead>
                <tbody>
                    <?php
include('connection.php');
$result=$mysqli->query("select * from parent");
while($row=$result->fetch_assoc()){

?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['province'] ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        
                        <!-- <td> <img src='?php echo $img ?>' height="50px" width="70px" /></td> -->
                        <td>
                            <a href="#detail<?php echo $row['id']; ?>" data-toggle="modal"
                                class="btn btn-success btn-sm">
                                <span class="glyphicon glyphicon-floppy-open"></span> Detail</a>&nbsp;

                            <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</a>&nbsp;

                            <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm">
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
             <?php include('show_add_modal.php'); ?>
            
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Team. Designed and Developed by
                <a href="https://www.passerellesnumeriques.org/en/">PNC</a>.
            </footer>
           
    </div>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../../dist/js/custom.min.js"></script>
</body>

</html>
