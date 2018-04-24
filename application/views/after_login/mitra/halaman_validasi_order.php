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
            <title>RentCar | Validasi Data Order</title>
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
                                <h2><b><i class="fa fa-list-alt""></i> Validasi Data Mobil</b></h2>
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
                                                <th>Atas Nama</th>
                                                <th>Tgl Rental</th>
                                                <th>Tgl Kembali</th>
                                                <th>Merk</th>
                                                <th>Nomor Polisi</th>
                                                <th>Waktu Order</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID Order</th>
                                                <th>Atas Nama</th>
                                                <th>Tgl Rental</th>
                                                <th>Tgl Kembali</th>
                                                <th>Merk</th>
                                                <th>Nomor Polisi</th>
                                                <th>Waktu Order</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach($dvalid as $dt){?>
                                            <tr>
                                                <td><?php echo $dt['id_pemesanan']; ?></td>
                                                <td><?php echo $dt['nama']; ?></td>
                                                <td><?php echo $dt['tgl_rental']; ?></td>
                                                <td><?php echo $dt['tgl_pengembalian']; ?></td>
                                                <td><?php echo $dt['merk']; ?></td>
                                                <td><?php echo $dt['nomor_polisi']; ?></td>
                                                <td><?php echo $dt['created_at']; ?></td>
                                                <td><span class="badge badge-primary"><?php echo $dt['status']; ?></span></td>
                                                <td>
                                                    <center>
                                                        <button type="button" class="btn col-lg-6 btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-check-square-o"></i>
                                                        </button>

                                                        <button type="button" class="btn col-lg-6 m-t-5 btn-warning" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="fa fa-warning"></i>
                                                        </button>
                                                    </center>
                                                        <!--Button 1-->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-check-square-o"></i> Validasi Order</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Menyetujui hal ini berarti Anda <b>memberi Izin rental</b> kepada pihak yang berkaitan. Anda tidak dapat membatalkan apabila telah menyetujui izin. *s&k</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda dapat memberi pesan mengenai kelangsungan rental mobil, nomor telepon dan alamat Anda akan kami berikan.</label>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Pesan:</label>
                                                                    <textarea class="form-control" id="message-text" placeholder="(optional)"></textarea>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <form action="<?php echo base_url('c_beranda_mitra/validYesMobil/'.$dt['id_pemesanan']); ?>" method="GET">
                                                                    <button type="submit" class="btn btn-success">Kirim</button>
                                                                </form>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <!--Button 2-->
                                                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-warning"></i> Validasi Order</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <form>
                                                                  <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Anda <b>Tidak memberikan izin</b> untuk memberikan rental kepada pihak yang bersangkutan. Anda tidak dapat mengubah keputusan ini. *s&k</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda dapat memberi pesan mengenai alasan tidak memberikan izin.</label>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Pesan:</label>
                                                                    <textarea class="form-control" id="message-text" placeholder="(optional)"></textarea>
                                                                  </div>
                                                                </form>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-success">Kirim</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                </td>
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