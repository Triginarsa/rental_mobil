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
            <title>RentCar | Syarat & Ketentuan RentCar</title>
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
            <link href="<?php echo base_url('assets/css/fronter.css')?>" rel="stylesheet">
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
                <?php include 'header_user.php'; ?>
                
                <div class="container-fluid edit_form">
                    <!-- Start Page Content -->
                    <div class="col-lg-15 edit_1">
                        <div class="card">
                            <div class="card-body">
                                    <center>
                                    <img src="<?php echo base_url('assets/images/about.png')?>" width=1300px id="banner">
                                    </center>
                                    <table border="0" id="tabel_tanya">
                                        <tbody>
                                            <tr height="30"></tr>
                                            <tr>
                                                <td>
                                                   <label style="font-size: 17pt">Syarat & Ketentuan</label> 
                                                </td>
                                                <td rowspan="4" width="300" style="background-color: #093645"><center><img src="<?php echo base_url('assets/images/logo.png')?>"></center></td>
                                                <td></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 15pt; font-weight: bold;">Syarat & Ketentuan Pengguna</label> 
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td width="1000">
                                                    <label>Akses atas password dan penggunaan password dilindungi dan/atau area tertentu yang diterlindungi pada Platform dan/atau penggunaan Layanan dibatasi hanya untuk Pelanggan yang memiliki akun saja. Anda tidak diperbolehkan memperoleh atau berusaha memperoleh akses tidak sah ke area Platform dan / atau Layanan ini, atau ke area informasi lain yang dilindungi, dengan cara apapun yang tanpa ijin penggunaan khusus oleh kami. Pelanggaran terhadap ketentuan ini merupakan pelanggaran yang didasarkan pada hukum Indonesia dan / atau undang-undang dan peraturan yang berlaku.</label>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <td>
                                                    <label><b>Jika Anda berusia di bawah 18 tahun</b>: Anda harus memperoleh persetujuan dari orang tua atau wali Anda, penerimaan ataupersetujuan orang tua/wali terhadap Persyaratan Penggunaan ini beserta persetujuan mereka untuk mengambil tanggung jawab untuk: (i) tindakan Anda; (ii) biaya yang terkait dengan penggunaan setiap Layanan atau pembelian Produk; dan (iii) penerimaan dan kepatuhan Anda sesuai dengan Syarat & Ketentuan Penggunaan ini. <b>Jika Anda tidak memiliki izin dari orang tua atau wali, Anda harus berhenti menggunakan / mengakses platform dan berhenti menggunakan Layanan ini.</b></label>
                                                </td>
                                                <td rowspan="4" width="300" style="background-color: #093645"><center><img src="<?php echo base_url('assets/images/join_rentcar.png')?>" width=200></center></td>
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