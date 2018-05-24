<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
            <title>RentCar | Login Mitra RentCar</title>
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
            <link href="<?php echo base_url('assets/css/log_mitra.css')?>" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/respon.css')?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css')?>"> 
            <!-- untuk css footer -->
             <style type="text/css">
                .teks_footer{
                    color: white;
                    /*untuk membuat warna h4 footer menjadi berwarna putih*/
                }
            </style>
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
                <?php include 'header_mitra.php'; ?>
                <div class="container-fluid edit_form res3">
                    <table border="0" class="card_edit">
                        <tbody>
                            <tr>
                                <td width="500">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h2><b>Login Mitra RentCar</b></h2>
                                        </div>
                                    </div>
                                    <div class="card card-outline-primary">
                                        <div class="card-body ">
                                            <!-- ALERT BERHASIL TAMBAH DATA-->
                                            <?php 
                                                if($this->session->flashdata('success_msg')){
                                            ?>
                                                <div class="alert alert-info">
                                                    <?php echo $this->session->flashdata('success_msg'); ?>
                                                </div>
                                            <?php
                                                }
                                            ?>

                                            <!-- ALERT GAGAL LOGIN-->
                                            <?php 
                                                if($this->session->flashdata('info')){
                                            ?>
                                                <div class="alert alert-danger">
                                                    <?php echo $this->session->flashdata('info'); ?>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                        </div>

                                        <form class="form-valide" method="post" action="<?php echo base_url()."index.php/auth_mitra/cek_login";?>">
                                            <div class="form-body">
                                                <div class="row p-t-20">
                                                    <div class="col-md-12">
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
                                                        
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div>
                                                                <label class="control-label"></label>
                                                        <button type="submit" class="btn btn-success col-md-12" name="login">LOGIN</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <!--/span-->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                                <td width="30"></td>
                                <td width="1000">
                                    <h2> Dear Mitra <br> Selamat Datang di Mitra RentCar </h2>
                                    <a>Mari bergabung bersama kami <a href="<?php echo base_url()."index.php/c_register_mitra";?>" class="link">Daftar</a> disini<br><br></a>
                                    <h2 style="font-weight: bold;">Hanya butuh 5 menit untuk mulai membuka rental mobil!<br></h2>
                                    <label>Langkah 1: Daftar <br> Masuk ke halaman daftar mitra dan lengkapi data diri Anda <br><br></label>
                                    <label>Langkah 2: Daftar <br> Masuk ke halaman daftar mitra dan lengkapi data diri Anda <br><br></label>
                                    <label>Langkah 3: Daftar <br> Masuk ke halaman daftar mitra dan lengkapi data diri Anda <br><br></label>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <img height="360" class="d-block w-100" src="<?php echo base_url('assets/images/login.png')?>" alt="First slide">
                                </td>
                            </tr>
                        </tbody>
                    </table>
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