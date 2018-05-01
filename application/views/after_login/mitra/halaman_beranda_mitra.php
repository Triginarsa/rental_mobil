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
            <title>RentCar | Beranda Mitra RentCar</title>
            <!-- Bootstrap Core CSS -->
            <link href="<?php echo base_url('assets/css/lib/bootstrap/bootstrap.css')?>" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?php echo base_url('assets/css/helper.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
            <!--[if lt IE 9]>
            <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
            <link href="<?php echo base_url('assets/css/front.css')?>" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css')?>"> 
            <!-- untuk css footer -->
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
                
                <!-- End header header -->
                <!-- Left Sidebar  -->
                
                <!-- End Left Sidebar  -->
                <!-- Page wrapper  -->
                    <!-- Bread crumb -->
                    
                    <!-- End Bread crumb -->
                    <!-- Container fluid  -->
                <div class="container-fluid edit_form">
                    <!-- Start Page Content -->
                    <div class="card_edit3 col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <center> 
                                <h2><b>Selamat datang <?php echo $this->session->userdata('nama'); ?> ke fitur Mitra RentCar</b></h2>
                                    <span>Kelola mobil Anda bersama kami. Dirancang khusus untuk memudahkan Anda mengatur pelanggan, mobil dalam satu langkah!</span>
                                </center>
                            </div>
                        </div>
                        <!-- ALERT BERHASIL TAMBAH DATA-->
                        <?php 
                            if($this->session->flashdata('success_msg')){
                        ?>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-check"></i><?php echo $this->session->flashdata('success_msg'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            }
                        ?>
                        <!-- ALERT GAGAL TAMBAH DATA-->
                        <?php 
                            if($this->session->flashdata('error_msg')){
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-close"></i><?php echo $this->session->flashdata('error_msg'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            }
                        ?>
                        <!-- ALERT WARNING-->
                        <?php 
                            if($this->session->flashdata('warning_msg')){
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle"></i><?php echo $this->session->flashdata('warning_msg'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="card_edit3 col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <table border="0">
                                    <thed>
                                        <tr>
                                            <th width="400"></th>
                                            <th width="400"></th>
                                            <th width="400"></th>
                                        </tr>
                                    </thed>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <button type="submit" class="tombol1 btn-primary1">
                                                    <a href="<?php echo site_url('c_beranda_mitra/dataMobil/'.$this->session->userdata('id'));?>">
                                                    <img src="<?php echo base_url('assets/images/icon_mitra1.png')?>" width="156" height="156"></a>
                                                </button>
                                            </td>
                                            <td>
                                                <button type="submit" class="tombol1 btn-primary1">
                                                    <a href="<?php echo site_url('c_beranda_mitra/dataOrder/'.$this->session->userdata('id'));?>">
                                                    <img src="<?php echo base_url('assets/images/icon_mitra2.png')?>" width="100" height="166"></a>
                                                </button>
                                            </td>
                                            <td><center>
                                                <button type="submit" class="tombol1 btn-primary1 edit_letak">
                                                    <a href="<?php echo site_url('c_beranda_mitra/editProfil/'.$this->session->userdata('id'));?>">
                                                    <img src="<?php echo base_url('assets/images/icon_mitra3.png')?>" width="180" height="180"></a></center>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><center>Data Mobil</center></td>
                                            <td><center>Data Order</center></td>
                                            <td><center>Edit Profil</center></td>
                                        </tr>
                                        <tr height='50'></tr>
                                        <tr>
                                            <td>
                                                <button type="submit" class="tombol1 btn-primary1">
                                                    <a href="<?php echo site_url('c_beranda_mitra/dataValOrder/'.$this->session->userdata('id'));?>">
                                                    <img src="<?php echo base_url('assets/images/icon_data_order.png')?>" width="136" height="136"></a>
                                                </button>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><center>Validasi Data Order</center></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- page content -->
                    
                    <!-- /page content -->

                    <!-- End Page Content -->
                </div>
                <!-- End Container fluid  -->
                <!-- footer -->
                <?php include 'footer_mitra.php'; ?>
                <!-- End footer -->
                
                <!-- End Page wrapper  -->
            </div>
            <!-- End Wrapper -->
            <!-- All Jquery -->
            <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js')?>"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.js')?>"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
            <!--Menu sidebar -->
            <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
            <!--stickey kit -->
            <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>

            <!-- Form validation -->
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
            <!--Date Picker-->
            <script src="<?php echo base_url('assets/css/lib/datepicker/lib/zebra_datepicker.js')?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/datepicker/lib/css/default.css')?>" />
            <script>
                $(document).ready(function(){
                    $('#tanggal').Zebra_DatePicker({
                        direction: true,
                        pair: $('#tanggal1'),
                        format: 'd-F-Y',
                        months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
                        days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
                    });
                    $('#tanggal1').Zebra_DatePicker({
                        direction: [1,10],
                        format: 'd-F-Y',
                        months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
                        days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
                    });
                });
            </script>
            <!--End Date Picker-->
        </body>
</html>