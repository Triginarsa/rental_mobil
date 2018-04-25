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
            <title>RentCar | Detail Validasi Mobil</title>
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
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                
                                <table border="0" class="col-lg-12" id="hehe">
                                    <thead>
                                        <tr>
                                            <th width="20"></th>
                                            <th width="130"></th>
                                            <th width="400"></th>
                                            <th width="130"></th>
                                            <th width="200"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="10"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td height=60 id="warna_teks" align="left" colspan="6" style="font-size: 25pt">ID Order :<b> <?php echo $valid->id_pemesanan; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris9-->
                                            <td colspan="7"><hr></td>
                                        </tr>
                                        <tr> <!--Baris1-->
                                            <td></td>
                                            <td height="50" id="warna_teks" rowspan="2" colspan="2" style="font-size: 20pt">Pemesan :<b> <?php echo $valid->nama; ?></b></td>
                                            <td id="warna_teks" colspan="4">Alamat :<b> <?php echo $valid->alamat; ?></b></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="4" id="warna_teks">Kota :<b><?php echo $valid->kota; ?></b></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks" colspan="2">No.HP:<b> <?php echo $valid->no_hp; ?></b></td>
                                            <td id="warna_teks" colspan="4">Provinsi:<b> <?php echo $valid->provinsi; ?></b></td>
                                        </tr>
                                        <tr height="10"></tr>
                                         <tr><!--Baris2-->
                                            <td id="warna_teks2" bgcolor="#093645" align="center" colspan="3">Data Mobil</td>
                                            <td id="warna_teks2" bgcolor="12505E" colspan="4" align="center">Data Order</td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris3-->
                                            <td height="30"></td>
                                            <td id="warna_teks">ID Mobil</td>
                                            <td id="warna_teks"><b><?php echo $valid->id_pemesanan; ?></b></td>
                                            <td style="color: #EC5E24" align="center" width="70">Waktu Order</td>
                                            <td id="warna_teks" colspan="2"><b><?php echo $valid->created_at; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td id="warna_teks">Merk</td>
                                            <td id="warna_teks"><b><?php echo $valid->merk; ?></b></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center">Mulai Rental</td>
                                            <td id="warna_teks" colspan="2"><b><?php echo $valid->tgl_rental; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td id="warna_teks">Tipe</td>
                                            <td id="warna_teks"><b><?php echo $valid->tipe_mobil; ?></b></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center">Akhir Rental</td>
                                            <td id="warna_teks" colspan="2"><b><?php echo $valid->tgl_pengembalian; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td id="warna_teks">Biaya Sewa</td>
                                            <td id="warna_teks"><b>Rp <?php echo format_ribuan($valid->biaya); ?></b>/hari</td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center">Total Biaya</td>
                                            <td id="warna_teks" colspan="2"><b>Rp <?php echo format_ribuan($valid->total); ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris5-->
                                            <td height="60"></td>
                                            <td rowspan="1" colspan="6">
                                                <center>
                                                       <button type="button" class="btn col-lg-6 btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-check-square-o"></i> Setuju
                                                        </button>
                                                        <!--Button 1-->
                                                        <form action="<?php echo base_url('c_beranda_mitra/validasiOrder1/'.$valid->id_pemesanan); ?>" class="form-valide" method="post">
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
                                                                    <textarea class="form-control" id="message-text"  name="pesan" placeholder="Masukkan pesan Anda (optional)"></textarea>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Kirim</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </form>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr><!--Baris5-->
                                            <td height="60"></td>
                                            <td rowspan="1" colspan="6">
                                                <center>
                                                       <button type="button" class="btn col-lg-6 btn-danger" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="fa fa-warning"></i> Tidak Setuju
                                                        </button>
                                                        <!--Button 2-->
                                                        <form action="<?php echo base_url('c_beranda_mitra/validasiOrder2/'.$valid->id_pemesanan); ?>" class="form-valide" method="post">
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
                                                                  <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Anda <b>Tidak memberikan izin</b> untuk memberikan rental kepada pihak yang bersangkutan. Anda tidak dapat mengubah keputusan ini. *s&k</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda dapat memberi pesan mengenai alasan tidak memberikan izin.</label>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Pesan:</label>
                                                                    <textarea class="form-control" id="message-text" placeholder="Masukkan pesan Anda (optional)" name="pesan"></textarea>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Kirim</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </form>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr><!--Baris6--></tr>
                                        <tr><!--Baris7--></tr>
                                        <tr><!--Baris8--></tr>
                                        <tr><!--Baris9-->
                                            <td colspan="7"><hr></td>
                                        </tr>
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