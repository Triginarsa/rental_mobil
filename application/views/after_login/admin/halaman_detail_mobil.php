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
            <title>RentCar | Data Mobil</title>
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
                    color: #444444; 
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
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12" id="hehe">
                                    <thead>
                                        <tr>
                                            <th width="20"></th>
                                            <th width="130"></th>
                                            <th width="400"></th>
                                            <th width="30"></th>
                                            <th width="200"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="10"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td height=60 id="warna_teks" align="left" colspan="6" style="font-size: 25pt"><b><?php echo $mobil->merk; ?>/<?php echo $mobil->tipe_mobil; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris9-->
                                            <td colspan="7"><hr></td>
                                        </tr>
                                        <tr>
                                            <td height="300" colspan="7">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                  <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                  </ol>
                                                  <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="<?=base_url()?>uploads/<?=$mobil->gbr_mobil; ?>" alt="First slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 style="color: #EC5E24"><?php echo $mobil->merk; ?>/<?php echo $mobil->tipe_mobil; ?></h3>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?=base_url()?>uploads/<?=$mobil->gbr_bpkb; ?>" alt="Second slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 style="color: #EC5E24">BPKB Mobil</h3>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="<?=base_url()?>uploads/<?=$mobil->gbr_stnk; ?>" alt="Third slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 style="color: #EC5E24">STNK Mobil</h3>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                  </a>
                                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                  </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr> <!--Baris1-->
                                            <td></td>
                                            <td height="50" id="warna_teks" rowspan="2" colspan="2" style="font-size: 20pt">Pemilik :<b> <?php echo $mobil->nama; ?></b></td>
                                            <td id="warna_teks" colspan="4">Daerah:<b> <?php echo $mobil->kota; ?>,<b> <?php echo $mobil->provinsi; ?></b></b></td>
                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks" colspan="2">NIK :<b> <?php echo $mobil->nik; ?></b></td>
                                            <td id="warna_teks" colspan="4">Alamat:<b> <?php echo $mobil->alamat; ?></b></td>
                                        </tr>
                                        <tr height="10"></tr>
                                         <tr><!--Baris2-->
                                            <td id="warna_teks2" bgcolor="#093645" align="center" colspan="3">Data Mobil</td>
                                            <td id="warna_teks2" bgcolor="12505E" colspan="4" align="center">Spesifikasi</td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris3-->
                                            <td height="30"></td>
                                            <td id="warna_teks">ID Mobil</td>
                                            <td id="warna_teks"><b><?php echo $mobil->id_mobil; ?></b></td>
                                            <td style="color: #EC5E24" align="center" width="70"><i class="fa fa-male"></i>/<i class="fa fa-female"></i>/<i class="fa fa-child"></i></td>
                                            <td id="warna_teks" colspan="2"><?php echo $mobil->jlh_penumpang; ?> orang(maks)</td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td id="warna_teks">Tahun Rakit</td>
                                            <td id="warna_teks"><b><?php echo $mobil->tahun_rakit; ?></b></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-drivers-license"></i></td>
                                            <td id="warna_teks" colspan="2"><?php echo $mobil->nomor_polisi; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td id="warna_teks">Nomor Mesin</td>
                                            <td id="warna_teks"><b><?php echo $mobil->nomor_mesin; ?></b></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-dashboard"></i></td>
                                            <td id="warna_teks" colspan="2"><?php echo $mobil->transmisi; ?></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td id="warna_teks">Nomor Rangka</td>
                                            <td id="warna_teks"><b><?php echo $mobil->nomor_rangka; ?></b></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-creative-commons"></i></td>
                                            <td id="warna_teks" colspan="2"><?php echo $mobil->jlh_cc ?> cc</td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td id="warna_teks">Status</td>
                                            <td id="warna_teks" style="text-transform: uppercase;"><b><?php echo $mobil->status; ?></b></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-filter"></i></td>
                                            <td id="warna_teks" colspan="2"><?php echo $mobil->bahan_bakar ?></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris4-->
                                            <td height="30"></td>
                                            <td></td>
                                            <td></td>
                                            <td style="color: #EC5E24" id="warna_teks" align="center"><i class="fa fa-money"></i></td>
                                            <td id="warna_teks" colspan="2">Rp <?php echo $mobil->biaya ?></td>
                                            <td></td>
                                        </tr>
                                        <tr><!--Baris5-->
                                            <td height="60"></td>
                                            <td rowspan="2" colspan="4">
                                                <center>
                                                        <button type="button" class="btn col-lg-10 btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class=" fa fa-exclamation-circle"></i> Batalkan Izin</button>
                                                        <form action="<?php echo base_url('c_beranda_admin/get_blokir/'.$mobil->id_mobil); ?>" class="form-valide" method="post">
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-exclamation-circle"></i> Blokir</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Menyetujui hal ini berarti Anda <b>Menarik Izin Rental Mobil ini</b> kepada pihak yang berkaitan. *s&k berlaku</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda yakin ingin Menarik Izin Rental?</label>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Ya</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </form>
                                                </center>
                                            </td>
                                            <td colspan="2">
                                                <center>
                                                    <button type="button" class="btn col-lg-10 btn-danger" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class=" fa fa-trash"></i> Hapus Data</button>
                                                    <form action="<?php echo base_url('c_beranda_admin/delete/'.$mobil->id_mobil); ?>" class="form-valide" method="post">
                                                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-trash"></i> Hapus Data Mobil</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Menyetujui hal ini berarti Anda <b>Menghapus Data Mobil ini</b> tanpa izin dari pemilik. *s&k berlaku</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda yakin ingin Menghapus Data Mobil?</label>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Ya</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </form>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr><!--Baris6--></tr>
                                        <tr>
                                            <td height="60"></td>
                                            <td rowspan="2" colspan="4">
                                                <center>
                                                    <button type="button" class="btn col-lg-10 btn-info" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class=" fa fa-check-circle"></i> Buka Blokir</button>
                                                    <form action="<?php echo base_url('c_beranda_admin/get_verifiedBlok/'.$mobil->id_mobil); ?>" class="form-valide" method="post">
                                                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-check-circle"></i> Buka Blokir</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Menyetujui hal ini berarti Anda <b>Memberi Izin Rental Mobil ini</b>. *s&k berlaku</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda yakin ingin Memberi Izin Rental Mobil?</label>
                                                                  </div>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Ya</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </form>
                                                </center>
                                            </td>
                                            <td colspan="2"></td>
                                        </tr>
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
                <?php include 'footer_admin.php'; ?>
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