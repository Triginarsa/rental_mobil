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
            <title>RentCar | Cara Pemesanan RentCar</title>
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
            <style type="text/css">
                .edit_1{
                    margin-left: -350px;
                }
                #banner{
                    margin-left: -220px;
                }
                #tabel_tanya{
                    margin-left: 125px;
                }
            </style>
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
                
                <div class="container-fluid edit_form">
                    <!-- Start Page Content -->
                    <div class="col-lg-15 edit_1">
                        <div class="card">
                            <div class="card-body">
                                    <center>
                                    <img src="<?php echo base_url('assets/images/banner_help.png')?>" width=1300px id="banner">
                                    </center>
                                    <table border="0" id="tabel_tanya">
                                        <tbody>
                                            <tr height="30"></tr>
                                            <tr>
                                                <td>
                                                   <label style="font-size: 17pt">Pertanyaan yang sering diajukan</label> 
                                                </td>
                                                <td></td>
                                                <td rowspan="4" width="300" style="background-color: #093645"><center><img src="<?php echo base_url('assets/images/logo.png')?>"></center></td>
                                                <td></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <td>
                                                    <label>Bagaimana cara membatalkan pesanan?</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="1000">
                                                    <label>Proses pembatalan pesanan dapat dilakukan dengan cepat dan mudah melalui formulir Pembatalan Online.Untuk dapat menggunakan formulir pembatalan, anda harus memiliki akun di RentCar.co.id (silahkan daftar disini jika anda belum memiliki akun) atau jika anda memesan dengan akun "pelanggan baru", silahkan daftar akun anda menggunakan email yang sama saat pemesanan dilakukan.<br>Berikut adalah langkah-langkah pembatalan online:</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <td>
                                                    <label>1. Login dengan akun anda <br> 2. Pada tampilan header, klik "PESANAN" <br> 3. Pastikan status pesanan anda belum di konfirmasi, apabila telah dikonfirmasi anda tidak dapat melakukan pembatalan pesanan.<br> 4. Apabila status pesanan masih di proses maka anda dapat melakukan pembatalan</label>
                                                </td>
                                                <td></td>
                                                <td rowspan="4" width="300" style="background-color: #093645"><center><img src="<?php echo base_url('assets/images/join_rentcar.png')?>" width=200></center></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Bagaimana cara mengecek status pesanan?</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="1000">
                                                    <label>Anda cukup mengklik "PESANAN" pada header halaman setelah anda login dengan akun, lihat daftar pesanan yang anda lakukan, cek status apakah masih diproses atau telah di konfirmasi. Apabila status pesanan telah dikonfirmasi maka pesanan anda telah berhasil, namun apabila masih di proses maka anda masih dapat melakukan pembatalan pesanan Anda.</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <hr>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
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
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
            <!--Menu sidebar -->
            <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
            <!--stickey kit -->
            <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
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
            <!--Header Data Kota -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#val-provinsi1').on('change', function(){
                        var id_provinsi = $(this).val();
                        if(id_provinsi==''){
                            $('#val-kota1').prop('disabled', true);
                        }else{
                            $('#val-kota1').prop('disabled', false);
                            $.ajax({
                                url:"<?php echo base_url()?>c_get_kota",
                                type: "POST",
                                data: {'id_provinsi' : id_provinsi},
                                dataType: 'json',
                                success: function(data){
                                    $('#val-kota1').html(data);
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