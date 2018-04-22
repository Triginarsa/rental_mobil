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
            <title>RentCar | Data Order</title>
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
                <?php include 'header_admin.php'; ?>
                
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
                                <h2><b><i class="fa fa-list-alt""></i> Data Order</b></h2>
                                    <span>Kelola mobil Anda bersama kami. Dirancang khusus untuk memudahkan Anda mengatur pelanggan, mobil dalam satu langkah!</span>
                                </center>
                            </div>
                        </div>
                        <!--Menu Angka Statistik -->
                        <!--akhir menu angka statistik -->
                    </div>
                    <div class="card_edit3 col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID Order</th>
                                                <th>Waktu Order</th>
                                                <th>Atas Nama</th>
                                                <th>Nomor Polisi</th>
                                                <th>Mobil</th>
                                                <th>Pemilik Mobil</th>
                                                <th>Kota</th>
                                                <th>Provinsi</th>
                                                <th>Tgl Rental</th>
                                                <th>Tgl Kembali</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID Order</th>
                                                <th>Waktu Order</th>
                                                <th>Atas Nama</th>
                                                <th>Nomor Polisi</th>
                                                <th>Mobil</th>
                                                <th>Pemilik Mobil</th>
                                                <th>Kota</th>
                                                <th>Provinsi</th>
                                                <th>Tgl Rental</th>
                                                <th>Tgl Kembali</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach($order as $dt){?>
                                            <tr>
                                                <td><?php echo $dt['id_pemesanan']; ?></td>
                                                <td><?php echo $dt['created_at']; ?></td>
                                                <td><?php echo $dt['nama']; ?></td>
                                                <td><?php echo $dt['nomor_polisi']; ?></td>
                                                <td><?php echo $dt['merk']; ?></td>
                                                <td><?php echo $dt['pemilik']; ?></td>
                                                <td><?php echo $dt['kota']; ?></td>
                                                <td><?php echo $dt['provinsi']; ?></td>
                                                <td><?php echo $dt['tgl_rental']; ?></td>
                                                <td><?php echo $dt['tgl_pengembalian']; ?></td>
                                                <th><span class="badge badge-primary"><?php echo $dt['status']; ?></span></th>
                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page content -->
                    
                    <!-- /page content -->

                    <!-- End Page Content -->
                </div>
                <!-- End Container fluid  -->
                <!-- footer -->
                <?php include 'footer_admin.php'; ?>
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
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
            
            <!--Datatables-->
            <script src="<?php echo base_url('assets/js/lib/datatables/datatables.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/datatables/datatables-init.js')?>"></script>
            <!--End Datatables-->
        </body>
</html>