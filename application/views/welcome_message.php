<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Favicon icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/logo-icon.png')?>">
            <title>RentCar</title>
            <!-- Bootstrap Core CSS -->
            <link href="<?php echo base_url('assets/css/lib/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?php echo base_url('assets/css/helper.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
            <!--[if lt IE 9]>
            <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
            <link href="<?php echo base_url('assets/css/front_css.css')?>" rel="stylesheet">
        </head>
        <body class="fix-header">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">
            <!-- header header  -->
            <?php include 'header.php'; ?>
            
            <!-- End header header -->
            <!-- Left Sidebar  -->
            
            <!-- End Left Sidebar  -->
            <!-- Page wrapper  -->
                <!-- Bread crumb -->
                
                <!-- End Bread crumb -->
                <!-- Container fluid  -->
            <!--content-->
            <h3>ini halaman welcome </h3>
            <!--end content-->
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php include 'footer.php';?>
            <!-- End footer -->
            
            <!-- End Page wrapper  -->
        </div>
        <!-- End Wrapper -->

        <!-- All Jquery -->
        <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js')?>"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
        <!--stickey kit -->
        <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
        

        <!-- Form validation -->
        <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>?"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
        </body>

</html>