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
            <title>RentCar | Pesanan</title>
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
            <link href="<?php echo base_url('assets/css/front.css')?>" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css')?>"> 
            <!-- untuk css footer -->
            <style type="text/css">
                #warna_teks{
                    color: black; 
                }
                #warna_teks2{
                    color: white; 
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
                <?php include 'header_user.php'; ?>
                
                <!-- End header header -->
                <!-- Left Sidebar  -->
                
                <!-- End Left Sidebar  -->
                <!-- Page wrapper  -->
                    <!-- Bread crumb -->
                    
                    <!-- End Bread crumb -->
                    <!-- Container fluid  -->
                <div class="container-fluid edit_form">
                    <!-- Start Page Content -->
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body"> 
                                <center> 
                                    <h2><b><i class="fa fa-navicon"></i> Daftar Pesanan </b></h2>
                                    <span>Ini adalah daftar pesanan atas nama <?php echo $this->session->userdata('nama'); ?> yang masih di proses, Anda masih dapat melakukan pembatalan pesanan </span>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12" id="hehe">
                                    <thead>
                                        <tr>
                                            <th width="220"></th>
                                            <th></th>
                                            <th width="154"></th>
                                            <th width="140"></th>
                                            <th width="200"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($order as $order) { ?>
                                        <tr>
                                            <td rowspan="4" height="100"><img src="<?=base_url()?>uploads/<?=$order['gbr_mobil']?>" alt="homepage" class="dark-logo" width="210" /></td>
                                            <td width="10"></td>
                                            <td id="warna_teks" align="left" colspan="2" style="font-size: 15pt"><b><?php echo $order['nomor_polisi']; ?></b></td>
                                            <td></td>
                                            <td id="warna_teks" align="center">Harga</td>
                                            <td id="warna_teks" width="150" colspan="1" align="center"><b>Rp <?php echo $order['biaya']; ?></b>/hari</td>
                                            <td></td>
                                        </tr>
                                         <tr>
                                            <td></td>
                                            <td id="warna_teks2" bgcolor="#093645" align="left" colspan="3"><i class="fa fa-user-circle"></i><i> <?php echo $order['pemilik']; ?></i></td>
                                            <td id="warna_teks2" bgcolor="12505E" colspan="2" align="center">
                                                <i class="fa fa-location-arrow"></i> <b><?php echo $order['kota']; ?>,<?php echo $order['provinsi']; ?></b>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks"><i class="fa fa-calendar"></i> Tanggal Rental</td>
                                            <td id="warna_teks" align="left"><b><?php echo $order['tgl_rental']; ?></b></td>
                                            <td id="warna_teks" align="center"><i class="fa fa-calendar"></i> Tanggal Kembali</td>
                                            <td id="warna_teks" align="left"><b><?php echo $order['tgl_pengembalian']; ?></b></td>
                                            <td rowspan="2">
                                                <center>
                                                    AAA
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks" colspan="2"><b><?php echo $order['merk']; ?>/<?php echo $order['tipe_mobil']; ?></b></td>
                                            <td id="warna_teks" align="center"><i class="fa fa-home"></i><b> <?php echo $order['alamat']; ?></b></td>
                                            <td id="warna_teks" align="center"><b><span class="badge badge-primary"><?php echo $order['status']; ?></span></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="7"><hr></td>
                                        </tr>
                                        <?php } ?>
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
                <?php include 'footer_user.php'; ?>
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
            <!--Header Data Kota -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#provinsi').on('change', function(){
                        var id_provinsi = $(this).val();
                        if(id_provinsi==''){
                            $('#kota').prop('disabled', true);
                        }else{
                            $('#kota').prop('disabled', false);
                            $.ajax({
                                url:"<?php echo base_url()?>c_get_kota",
                                type: "POST",
                                data: {'id_provinsi' : id_provinsi},
                                dataType: 'json',
                                success: function(data){
                                    $('#kota').html(data);
                                },
                                error: function(){
                                    alert('data kota tidak ada...');
                                }
                            });
                        }
                    });
                });
            </script>
            <!--End Header Data Kota -->

            <!-- Form validation -->
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
        </body>
</html>