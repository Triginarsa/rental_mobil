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
            <title>RentCar | Beranda</title>
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
            <style type="text/css">
                #warna_teks{
                    color: black; 
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
            <div class="preloader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
            </div>
            <!-- Main wrapper  -->
            <div id="main-wrapper">
                <!-- header header  -->
                <?php include 'header_user.php'; ?>
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img height="360" class="d-block w-100" src="<?php echo base_url('assets/images/banner_2.png')?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img height="360" class="d-block w-100" src="<?php echo base_url('assets/images/banner_1.png')?>" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img height="360" class="d-block w-100" src="<?php echo base_url('assets/images/banner_3.png')?>" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="container-fluid edit_form">
                    <!-- Start Page Content -->
                    <div class="card_edit2 col-lg-9">
                        <table border="0">
                            <tr height="20"></tr>
                            <tr>
                                <td>
                                    <a style="font-size:17pt">Daftar Kendaraan</a>
                                </td>
                            </tr>
                        </table>
                        <?php foreach ($mobil as $mobil) { ?>
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12" id="hehe">
                                    <thead>
                                        <tr>
                                            <th width="220"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="140"></th>
                                            <th width="160"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                            <td>
                                                
                                            
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td rowspan="4" height="100"><img src="<?=base_url()?>uploads/<?=$mobil['gbr_mobil']?>" alt="homepage" class="dark-logo" width="210" /></td>
                                            <td width="10"></td>
                                            <td id="warna_teks" align="left" colspan="2" style="font-size: 15pt"><b><?php echo $mobil['merk']; ?>/<?php echo $mobil['tipe_mobil']; ?></b></td>
                                            <td></td>
                                            <td id="warna_teks" align="center">Harga</td>
                                            <td id="warna_teks" width="150" colspan="1" align="center"><b>Rp <?php echo format_ribuan($mobil['biaya']); ?></b>/hari</td>
                                            <td></td>
                                        </tr>
                                         <tr>
                                            <td></td>
                                            <td id="warna_teks2" bgcolor="#093645" align="left" colspan="3"><i class="fa fa-user-circle"></i><i> <?php echo $mobil['nama']; ?></i></td>
                                            <td id="warna_teks2" bgcolor="12505E" colspan="2" align="center">
                                                <i class="fa fa-location-arrow"></i> <b><?php echo $mobil['kota']; ?>,<?php echo $mobil['provinsi']; ?></b>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks">Transmisi</td>
                                            <td id="warna_teks" align="left"><b><?php echo $mobil['transmisi']; ?></b></td>
                                            <td id="warna_teks">Penumpang</td>
                                            <td id="warna_teks" align="left"><b><?php echo $mobil['jlh_penumpang']; ?> orang(maks)</b></td>
                                            <td rowspan="2">
                                                <center>
                                                    <form method="post" action="<?php echo base_url('c_beranda_user/orderMobil/'.$mobil['id_mobil']); ?>">
                                                        <button type="submit" class="btn col-lg-12 btn-success"><i class="fa fa-cart-plus"></i> Book Now</button>
                                                    </form>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks">Bahan Bakar</td>
                                            <td id="warna_teks"><b><?php echo $mobil['bahan_bakar']; ?></b></td>
                                            <td id="warna_teks">Nomor Polisi</td>
                                            <td id="warna_teks"><b><?php echo $mobil['nomor_polisi']; ?></b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- page content -->
                    
                    <!-- /page content -->

                    <!-- End Page Content -->
                </div>
                <!-- End Container fluid  -->
                <!-- footer -->
                <?php include 'footer.php'; ?>
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