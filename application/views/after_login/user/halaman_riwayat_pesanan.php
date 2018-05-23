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
            <title>RentCar | Riwayat Pesanan</title>
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
            <link href="<?php echo base_url('assets/css/fronter.css')?>" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css')?>"> 
            <!-- untuk css footer -->
            <style type="text/css">
                #warna_teks{
                    color: #444444; 
                }
                #warna_teks2{
                    color: white; 
                }
            </style>
            <?php function format_ribuan ($nilai){
                return number_format ($nilai, 0, ',', '.');
            } ?>
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
                                    <h2><b><i class="fa fa-navicon"></i> Riwayat Pesanan </b></h2>
                                </center>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($order as $order) { ?>
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12">
                                    <thead>
                                        <tr>
                                            <th width="20"></th>
                                            <th></th>
                                            <th width="154"></th>
                                            <th width="140"></th>
                                            <th width="200"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td></td>
                                            <td height="40" id="warna_teks" align="left" colspan="2" style="font-size: 15pt">Dipesan: <b><?php echo $order['tgl_b']; ?> <?php echo $order['bulan_b']; ?> <?php echo $order['tahun_b']; ?></b></td>
                                            <td id="warna_teks" align="center" colspan="3"><i class="fa fa-reorder"></i></td>
                                        </tr>
                                         <tr>
                                            <td height="40" id="warna_teks2" bgcolor="#093645" ></td>
                                            <td id="warna_teks2" bgcolor="#093645" align="left" colspan="2">Rental Mobil - <b><?php echo $order['nomor_polisi']; ?> - <?php echo $order['merk']; ?></b></td>
                                            <td id="warna_teks2" bgcolor="12505E" colspan="3" align="right">
                                                <b>Rp <?php echo number_format($order['total']);?></b>
                                            </td>
                                            <td id="warna_teks2" bgcolor="12505E" width="10"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                             <td colspan="2" style="font-size: 15pt" id="warna_teks" align="left">
                                                <?php if ($order['status'] == "Berhasil") {?>
                                                    <b><span class="badge badge-info"><i class="fa fa-check-circle"></i> Pemesanan <?php echo $order['status']; ?></span></b>
                                                <?php } ?>
                                                <?php if ($order['status'] == "Ditolak") {?>
                                                    <b><span class="badge badge-danger"><i class="fa fa-times-circle"></i> Pemesanan <?php echo $order['status']; ?></span></b>
                                                <?php } ?>
                                                <?php if ($order['status'] == "Masih di proses") {?>
                                                    <b><span class="badge badge-warning"><i class="fa fa-exclamation-circle"></i> Pemesanan <?php echo $order['status']; ?></span></b>
                                                <?php } ?>
                                            </td>
                                            <td rowspan="1" colspan="4">
                                                <center>
                                                    <a href="<?php echo base_url('c_beranda_user/det_riwayatPesanan/'.$order['id_pemesanan']); ?>" class="m-t-5 btn col-lg-4 btn-success">Lihat Detail</a>
                                                </center>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.js')?>"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
            <!--Menu sidebar -->
            <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
            <!--stickey kit -->
            <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
            <!--Header Data Kota -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#val-provinsi').on('change', function(){
                        var id_provinsi = $(this).val();
                        if(id_provinsi==''){
                            $('#val-kota').prop('disabled', true);
                        }else{
                            $('#val-kota').prop('disabled', false);
                            $.ajax({
                                url:"<?php echo base_url()?>c_get_kota",
                                type: "POST",
                                data: {'id_provinsi' : id_provinsi},
                                dataType: 'json',
                                success: function(data){
                                    $('#val-kota').html(data);
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

            <!--Date Picker-->
            <script src="<?php echo base_url('assets/css/lib/datepicker/lib/zebra_datepicker.js')?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/datepicker/lib/css/default.css')?>" />
            <script>
                $(document).ready(function(){
                    $('#val-tglMulai').Zebra_DatePicker({
                        direction: [true,20],
                        pair: $('#val-tglKembali'),
                        format: 'Y-m-d',
                        months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
                        days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
                    });
                    $('#val-tglKembali').Zebra_DatePicker({
                        direction: [1,10],
                        format: 'Y-m-d',
                        months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
                        days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
                    });
                });
            </script>
            <!--End Date Picker-->
        </body>
</html>