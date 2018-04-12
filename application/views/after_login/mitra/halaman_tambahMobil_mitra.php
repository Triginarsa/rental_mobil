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
            <title>RentCar | Beranda Mitra RentCar</title>
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
                <?php include 'header_mitra.php'; ?>



                
                <!-- End header header -->
                <!-- Left Sidebar  -->
                <div class="container-fluid edit_form">
            <!-- Start Page Content -->
            <div class="card_edit2 col-lg-9">
                <div class="card">
                    <div class="card-body"> 
                        <h2><b>Tambahkan Mobil Anda</b></h2>
                    </div>
                </div>
            </div>
            <!-- page content -->
            <div class="card_edit2 col-lg-9"><!--mengganti ukuran form-->
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form class="form-valide" action="<?php echo base_url()."c_beranda_mitra/tambahMobil";?>" method="post">
                            <div class="form-body">
                                <div class="row p-t-20">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <div>
                                                <label class="control-label">Nomor Polisi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <input type="text" class="form-control" id="val-nomorPolisi" name="val-nomorPolisi" placeholder="Nomor Polisi">
                                                </div> 
                                            </div>
                                        </div>
                                        <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Merk Mobil
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-merkMobil" name="val-merkMobil">
                                                            <option value="">Pilih Merk Mobil Anda</option>
                                                                <?php foreach($merk as $ab){ ?>
                                                                    <option value="<?php echo $ab['id_merk']; ?>"><?php echo $ab['merk']; ?></option>
                                                                <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                <label class="control-label">Tipe Mobil
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <input type="text" class="form-control" id="val-tipeMobil" name="val-tipeMobil" placeholder="Masukkan tipe mobil anda">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Tahun Rakit
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="val-tahunRakit" name="val-tahunRakit" placeholder="Masukkan tahunrakit mobil anda">
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
                                                <label class="control-label">Nomor Rangka
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <input type="text" class="form-control" id="val-nomorRangka" name="val-nomorRangka" placeholder="Masukkan nomor rangka mobil anda">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Nomor Mesin
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="val-nomorMesin" name="val-nomorMesin" placeholder="Masukkan nomor mesin mobil anda">
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
                                                        <label class="control-label">Bahan Bakar
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-bahanBakar" name="val-bahanBakar">
                                                            <option value="">Pilih bahan bakar mobil</option>
                                                            <option>Premium</option>
                                                            <option>Solar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                            <!--/span-->
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                <div>
                                                    <label class="control-label">Jumlah CC Mobil
                                                         <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="val-jumlahCC" name="val-jumlahCC" placeholder="Masukkan jumlah CC mobil anda">
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
                                                        <label class="control-label">Transmisi
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-transmisi" name="val-transmisi">
                                                            <option value="">Pilih transmisi mobil</option>
                                                            <option>Automatic</option>
                                                            <option>Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                            <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                    <label class="control-label">Biaya Sewa
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="val-biayaSewa" name="val-biayaSewa" placeholder="Masukkan biaya sewa mobil">
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
                                                <label class="control-label">Jumlah Penumpang
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-jumlahPenumpang" name="val-jumlahPenumpang">
                                                            <option value="">Pilih jumlah penumpang mobil</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                 <div>
                                                    <label for="exampleInputFile">Gambar STNK</label>
                                                    <input type="file" class="form-control-file" id="val-gambarSTNK" name="val-gambarSTNK" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Pilih gambar STNK mobil</small>
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
                                                    <label for="exampleInputFile">Gambar Mobil</label>
                                                    <input type="file" class="form-control-file" id="val-gambarMobil" name="val-gambarMobil" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Pilih gambar mobil</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="">
                                                    <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                        <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                        <span class="css-control-indicator">Saya mengisi data dengan BENAR</span> 
                                                        <a href="#">Kebijakan Privasi RentCar
                                                            <span class="text-danger">*</span>
                                                        </a>
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit" class="btn col-lg-12 btn-success">TAMBAH</button>
                                        </div>
                                        <!--/span-->
                                    </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="exampleInputFile">Gambar BPKB</label>
                                                    <input type="file" class="form-control-file" id="val-gambarBPKB" name="val-gambarBPKB" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Pilih gambar BPKB mobil</small>
                                                </div>
                                            </div>
                                        </div>


                                        <!--/row-->
                                    
                            </form>
                        </div>
                    </div>
                </div>
                </form>
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
            <!--Header Data Kota -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#provinsi').on('change', function(){
                        var id_provinsi = $(this).val();
                        if(id_provinsi==''){
                            $('#kota').prop('disabled', true);
                        }else{
                            $('#kota').prop('disabled', false);
                            $.ajax({
                                url:"<?php echo base_url()?>c_get_kota",
                                type: "POST",
                                data: {'id_provinsi' : id_provinsi},
                                dataType: 'json',
                                success: function(data){
                                    $('#kota').html(data);
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