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
            <title>RentCar | Halaman Login</title>
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
            <div class="container-fluid edit_form">
            <!-- Start Page Content -->
            <div class="card_edit">
                <div class="card">
                    <div class="card-body"> 
                        <h2><b>Selamat datang di RentCar Silahkan login</b></h2>
                            <span>sudah menjadi member?
                                <a href="<?php echo base_url()."index.php/welcome/hlm_daftar";?>"> Daftar </a>disini</span>
                    </div>
                </div>
            </div>
            <!-- page content -->
            <div class="card_edit"><!--mengganti ukuran form-->
                <div class="card card-outline-primary">
                    <div class="card-body ">
                        <form class="form-valide" method="post" action="<?php echo base_url()."index.php/controller_login/ceklogin";?>">
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div>
                                                <label class="control-label">Alamat Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Mohon isi alamat email Anda">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="">
                                        <label class="control-label"></label>
                                        <input type="submit" class="btn btn-success edit_btn" name="login" value="LOGIN"/>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div>
                                                <label class="control-label">Kata Sandi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Minimal 6 karakter">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                    <!--/span-->
                                    <!--/span-->
                                <!--/row-->
                                    <!--/span-->
                                    <!--/span-->
                        </form>
                    </div>
                </div>
            </div>
                <!-- /page content -->

                <!-- End Page Content -->
        </div>
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