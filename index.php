<?php
include 'controllers/auth/session.php';
include 'config/koneksi.php';
include 'inc/title.php';
?>

<!DOCTYPE html>
<html dir="ltr" lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>E-Arsip Surat <?= isset($title) ? '| ' . $title : '' ?></title>
    <!-- Custom CSS -->
    <!-- <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet"> -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <?php include 'inc/navbar.php'; ?>
        <!-- End Topbar header -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <?php include 'inc/sidebar.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar-->

        <!-- Page wrapper  -->
        <div class="page-wrapper">

        <?php
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
            
            switch ($page) {
                case 'dashboard':
                    include 'pages/dashboard.php';
                    break;
                case 'surat-masuk':
                    include 'pages/surat-masuk/index.php';
                    break;
                case 'tambah-surat-masuk':
                    if ($_SESSION['role'] == 'admin') {
                        include 'pages/surat-masuk/create.php';
                    } else {
                        include 'pages/error-404.php';
                    }
                    break;
                case 'edit-surat-masuk':
                    if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user') {
                        include 'pages/surat-masuk/edit.php';
                    } else {
                        include 'pages/error-404.php';
                    }
                    break;
                case 'surat-keluar':
                    include 'pages/surat-keluar/index.php';
                    break;
                case 'tambah-surat-keluar':
                    if ($_SESSION['role'] == 'admin') {
                        include 'pages/surat-keluar/create.php';
                    } else {
                        include 'pages/error-404.php';
                    }
                    break;
                case 'edit-surat-keluar':
                    if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user') {
                        include 'pages/surat-keluar/edit.php';
                    } else {
                        include 'pages/error-404.php';
                    }
                    break;
                case 'user':
                    include 'pages/user/index.php';
                    break;
                case 'tambah-user':
                    if ($_SESSION['role'] == 'admin') {
                        include 'pages/user/create.php';
                    } else {
                        include 'pages/error-404.php';
                    }
                    break;
                case 'edit-user':
                    if ($_SESSION['role'] == 'admin') {
                        include 'pages/user/edit.php';
                    } else {
                        include 'pages/error-404.php';
                    }
                    break;
                default:
                    include 'pages/error-404.php';
                    break;
            }
        }
        else
        {
            include 'pages/dashboard.php';
        }
        ?>

            <!-- footer -->
            <footer class="footer text-center">
                All Rights Reserved.
            </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <?php include 'inc/customizer.php'; ?>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include 'inc/script.php' ?>

</body>

</html>