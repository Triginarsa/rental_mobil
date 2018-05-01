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
            <title>RentCar | Daftar Mitra RentCar</title>
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
                
            <div class="container-fluid edit_form">
            <!-- Start Page Content -->
            <div class="card_edit2 col-lg-9">
                <div class="card">
                    <div class="card-body"> 
                        <center> 
                            <h2><b><i class="fa fa-user"></i> Edit Profil</b></h2>
                            <span>Ini halaman edit profil mitra! </span>
                        </center>
                    </div>
                </div>
            </div>
                    <!-- page content -->
                    <div class="card_edit2 col-lg-9">
                <div class="card">
                    <div class="card-body">
                     <form class="form-valide" enctype='multipart/form-data' action="<?php echo base_url('c_beranda_mitra/updateProfil');?>" method="post">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Nama lengkap
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" value="<?php echo  $profils->nama; ?>" class="form-control" id="val-nama" name="val-nama" placeholder="Nama Lengkap">
                                                    </div> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Alamat Email
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" value="<?php echo $profils->email; ?>" class="form-control" id="val-email" name="val-email" placeholder="Mohon isi alamat email Anda">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">NIK
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input value="<?php echo $profils->nik; ?>" type="text" class="form-control" id="val-nik" name="val-nik" placeholder="Nomor Induk Kependudukan" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Nomor Handphone
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" value="<?php echo $profils->no_hp; ?>" class="form-control" id="val-phone" name="val-phone" placeholder="Mohon isi nomor handphone Anda">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Alamat
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" value="<?php echo $profils->alamat; ?>" id="val-alamat" name="val-alamat" placeholder="Mohon isi alamat Anda">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <button type="submit" name="btnUpdate" value="update" class="btn col-lg-4 btn-info">Edit</button>
                                                <a href="<?php echo base_url('c_beranda_mitra/index/'.$this->session->userdata('id')); ?>" class="btn col-lg-3 btn-warning" onclick="return confirm('Apakah anda yakin tidak melakukan edit?');">Cancel</a>
                                            </div>
                                            <!--/span-->
                                        </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /page content -->

                    <!-- End Page Content -->
                </div>
                <!-- End Container fluid  -->
                <!-- footer -->
                <?php include 'footer_mitra.php';?>
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
            

            <!-- Form validation -->
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>?"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
        </body>
</html>
