<?php require_once '../connection.php'; ?>



<?php

if (!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
    header("location:../login.php");

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="../assets/img/favicon.ico" rel="icon">
    <link href="../assets/img/logo.png" rel="logo">

    <title>Swat Diabetic Clinic | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/brands.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/regular.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/regular.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/solid.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/svg-with-js.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/v4-shims.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="../assets/css/customstyle.css">


    <!-- SweetAlert2 -->
    <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../assets/plugins/toastr/toastr.min.js"></script>
    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../assets/img/logo.png" alt="logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../index.php" class="brand-link">
                <img src="../assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Swat Diabetes & foot care Clinic</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-plus-square"></i>
                                <p>
                                    Manage Patients
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="addpatients.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Patients</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="viewpatients.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Patients</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon fa fa-sign-out"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>