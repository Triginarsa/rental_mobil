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
            <title>RentCar | Order</title>
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
                                <form action="<?php echo base_url('c_beranda_user/buatOrder/'.$mobil->id_mobil) .'/'.$this->session->userdata('id'); ?>" class="form-valide" method="post">
                                <table border="0" class="col-lg-12" id="hehe">
                                    <thead>
                                        <tr>
                                            <th width="220"></th>
                                            <th width="30"></th>
                                            <th></th>
                                            <th width="190"></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td height=60></td>
                                            <td id="warna_teks" align="left" colspan="5" style="font-size: 20pt"><b><?php echo $mobil->merk; ?>/<?php echo $mobil->tipe_mobil; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris9-->
                                            <td rowspan="11" height="100"><img src="<?=base_url()?>uploads/<?=$mobil->gbr_mobil; ?>" alt="homepage" class="dark-logo" width="410" /></td>
                                            <td colspan="6"><hr></td>
                                        </tr>
                                        <tr> <!--Baris1-->
                                            <td></td>
                                            <td id="warna_teks" colspan="2">Pemilik :<b> <?php echo $mobil->nama; ?></b></td>
                                            <td id="warna_teks" colspan="2">Daerah:<b> <?php echo $mobil->kota; ?>,<b> <?php echo $mobil->provinsi; ?></b></b></td>
                                        </tr>
                                        <tr> <!--Baris2-->
                                            <td></td>
                                            <td height="50" id="warna_teks" rowspan="2" colspan="2" style="font-size: 20pt"><b>Rp <?php echo $mobil->biaya; ?></b>/hari</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr></tr>
                                         <tr><!--Baris2-->
                                            <td></td>
                                            <td id="warna_teks2" bgcolor="#093645" align="center" colspan="2">Spesifikasi</td>
                                            <td id="warna_teks2" bgcolor="12505E" colspan="2">Kapan Anda akan menggunakan?</td>
                                        </tr>
                                        <tr><!--Baris3-->
                                            <td height="50"></td>
                                            <td style="color: #EC5E24" align="center" width="70"><i class="fa fa-male"></i>/<i class="fa fa-female"></i>/<i class="fa fa-child"></i></td>
                                            <td id="warna_teks"><?php echo $mobil->jlh_penumpang; ?> orang(maks)</td>
                                            <td colspan="2" style="font-size: 10pt">*rentang waktu pemesanan adalah 20 hari dengan batas maksimal rental 10 hari</td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="40"></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-drivers-license"></i></td>
                                            <td id="warna_teks"><?php echo $mobil->nomor_polisi; ?>
                                            <td id="warna_teks" rowspan="2" colspan="2" align="center" width="130" height="100">Tanggal Pakai
                                                <div class="form-group">
                                                    <div>
                                                        <input type="text" id="val-tglMulai" name="val-tglMulai" placeholder="Tanggal Mulai">
                                                    </div>
                                                </div>
                                            </td>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="40"></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-dashboard"></i></td>
                                            <td id="warna_teks"><?php echo $mobil->transmisi; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="40"></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-creative-commons"></i></td>
                                            <td id="warna_teks"><?php echo $mobil->jlh_cc ?> cc</td>
                                            <td id="warna_teks" rowspan="2" colspan="2" align="center" width="130" height="100">Tanggal Kembali
                                                <div class="form-group">
                                                    <div>
                                                        <input type="text" id="val-tglKembali" name="val-tglKembali" placeholder="Tanggal Kembali">
                                                    </div>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                         <tr><!--Baris4-->
                                            <td height="40"></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-filter"></i></td>
                                            <td id="warna_teks"><?php echo $mobil->bahan_bakar ?></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris5-->
                                            <td height="60"></td>
                                            <td rowspan="2" colspan="4">
                                                <center>
                                                        <button type="submit" class="btn col-lg-10 btn-success"><i class="fa fa-cart-arrow-down"></i> Pesan Sekarang</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr><!--Baris6--></tr>
                                        <tr><!--Baris7--></tr>
                                        <tr><!--Baris8--></tr>
                                        <tr><!--Baris9-->
                                            <td colspan="6"><hr></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">*order Anda akan diproses apabila pemilik mobil telah menerima pesanan Anda</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
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
            <script src="<?php echo base_url('assets/js/lib/form-validation/order.validate-init.js')?>"></script>
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
                        format: 'd-F-Y',
                        months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
                        days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
                    });
                    $('#val-tglKembali').Zebra_DatePicker({
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