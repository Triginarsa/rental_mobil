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
            <style type="text/css">
                .small-box{
                    background-color: white;
                    text-align: center;
                    margin-right: 100px;
                }
                #hehe{
                    margin-right: 100px;
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
                <?php include 'header.php'; ?>
                
                <!-- End header header -->

                <!-- <h1 align="center"> Selamat datang ke fitur Rentcar Partner Centre</h1>

                <div class="container-fluid edit_form">
                    <div class="card_edit2 col-lg-9">
                            <form class="form-valide" action="<?php echo base_url()."controller_pemilik_mobil/hlm_data_mobil";?>" method="post">
                                <div class="col-lg-5">
                                    <button type="submit" class="btn col-lg-5 btn-success">MOBIL SAYA</button>
                                </div>
                            </form>
                        </div>
                </div> -->



                <div class="container-fluid">
                    <div class="cell">
                        <h1>   </h1>
                        <h1 align="center">Selamat datang ke fitur Rentcar Partner Centre</h1>
                        <div class="subtitle" align="center">Kelola penyewaan mobilmu dengan mudah. Dirancang khusus untuk memudahkanmu mengatur mobil, melacak transaksi, mengatur pelanggan mengukur performa toko - semua dalam satu langkah!</div>
                    </div>
                    <div class="container-fluid edit_form">
                        <div class="card_edit2 col-lg-9" align="center">
                            <form class="form-valide" action="<?php echo base_url()."controller_pemilik_mobil/hlm_data_mobil";?>" method="post">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn col-lg-5 btn-success">MOBILKU</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="container-fluid edit_form">
                        <div class="card_edit2 col-lg-9" align="center">
                            <form class="form-valide" action="<?php echo base_url()."controller_pemilik_mobil/hlm_data_mobil";?>" method="post">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn col-lg-5 btn-success">TRANSAKSIKU</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="container-fluid edit_form">
                        <div class="card_edit2 col-lg-9" align="center">
                            <form class="form-valide" action="<?php echo base_url()."controller_pemilik_mobil/hlm_data_mobil";?>" method="post">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn col-lg-5 btn-success">PENGATURAN</button>
                                </div>
                            </form>
                        </div>
                    </div>


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
                                url:"<?php echo base_url()?>controller_register/get_kota",
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

            <!-- Form validation -->
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
        </body>
</html>