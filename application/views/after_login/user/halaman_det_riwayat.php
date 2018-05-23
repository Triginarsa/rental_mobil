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
            <title>RentCar | Detail Order Mobil</title>
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
            <!-- untuk css footer -->
            <style type="text/css">
                #warna_teks{
                    color: #444444; 
                }
                #warna_teks2{
                    color: white; 
                }
                #warna_teks3{
                    color: #8F8F8F;
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
                <?php include 'header_user.php'; ?>
                
                <div class="container-fluid edit_form">
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body"> 
                                    <table border="0">
                                        <tbody>
                                            <tr>
                                                <td style="font-size: 20pt">
                                                    <?php if ($driwayat->status == "Berhasil") {?>
                                                        <i class="fa fa-check-circle" style="color: #3374BA"></i></td>
                                                    <?php } ?>
                                                    <?php if ($driwayat->status == "Ditolak") {?>
                                                        <i class="fa fa-times-circle" style="color: #EF5451"></i></td>
                                                    <?php } ?>
                                                <td width="10"></td>
                                                <td width="300"><h2 style="font-weight: bold;">Pemesanan <?php echo $driwayat->status; ?></h2></td>
                                                <td width="400"></td>
                                                <td width="280" id="warna_teks" style="font-size: 15pt">ID. Pesanan <b> <?php echo $driwayat->id_pemesanan; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2" id="warna_teks"><?php echo $driwayat->hari_b; ?>, <?php echo $driwayat->tgl_b; ?> <?php echo $driwayat->bulan_b; ?> <?php echo $driwayat->tahun_b; ?>, <?php echo $driwayat->waktu; ?></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12">
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
                                            <td height="30" align="left" colspan="6"><h2 style="font-weight: bold;">Detail Pesanan</h2></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Dipesan oleh</td>
                                            <td colspan="3" id="warna_teks"><b> <?php echo $driwayat->nama; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Tanggal Pemesanan</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->hari_b; ?>, <?php echo $driwayat->tgl_b; ?> <?php echo $driwayat->bulan_b; ?> <?php echo $driwayat->tahun_b; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Detail Kontak</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->email; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">No. Kontak</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->no_hp_pengguna; ?></b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12">
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
                                            <td bgcolor="#12505E"></td>
                                            <td height="30" align="left" colspan="6"><h2 style="font-weight: bold;">Rental Mobil - <?php echo $driwayat->merk; ?></h2></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#093645" height="50"></td>
                                            <td colspan="2" rowspan="3" align="center"><img src="<?=base_url()?>uploads/<?=$driwayat->gbr_mobil;?>" alt="homepage" class="dark-logo" width="280" /></td>
                                            <td colspan="4" id="warna_teks3">Biaya Rental Mobil ini</td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td bgcolor="#093645" height="50"></td>
                                            <td colspan="4" id="warna_teks"><b>Rp <?php echo format_ribuan($driwayat->biaya); ?></b>/hari</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#093645" height="50"></td>
                                            <td colspan="4" style="font-size: 15pt">
                                                <?php if ($driwayat->status == "Berhasil") {?>
                                                    <b><span class="badge badge-info"><i class="fa fa-check-circle"></i> Pemesanan <?php echo $driwayat->status; ?></span></b></td>
                                                <?php } ?>
                                                <?php if ($driwayat->status == "Ditolak") {?>
                                                    <b><span class="badge badge-danger"><i class="fa fa-times-circle"></i> Pemesanan <?php echo $driwayat->status; ?></span></b></td>
                                                <?php } ?>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12">
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
                                            <td height="30" align="left" colspan="6"><h2 style="font-weight: bold;">Detail Pesanan</h2></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Nama Produk</td>
                                            <td colspan="3" id="warna_teks"><b>Rental Mobil - <?php echo $driwayat->merk; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <?php if ($driwayat->status == "Berhasil") {?>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Nama Pemilik</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->pemilik; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Alamat</td>
                                            <td colspan="3" id="warna_teks"><b> <?php echo $driwayat->alamat; ?> - <?php echo $driwayat->kota; ?>, <?php echo $driwayat->provinsi; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">No. Kontak</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->no_hp; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Tanggal Rental</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->hari_r; ?>, <?php echo $driwayat->tgl_r; ?> <?php echo $driwayat->bulan_r; ?> <?php echo $driwayat->tahun_r; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Tanggal Pengembalian</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->hari_p; ?>, <?php echo $driwayat->tgl_p; ?> <?php echo $driwayat->bulan_p; ?> <?php echo $driwayat->tahun_p; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Lama Rental</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->selisih; ?> Hari</b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Total Biaya Rental</td>
                                            <td colspan="3" id="warna_teks"><b>Rp <?php echo format_ribuan($driwayat->total); ?></b></td>
                                            <td></td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Deskripsi Produk</td>
                                            <td colspan="3" id="warna_teks"><b>Transmisi yang digunakan: <?php echo $driwayat->transmisi; ?>, Jumlah CC:<?php echo $driwayat->jlh_cc; ?>, Bahan Bakar yang digunakan: <?php echo $driwayat->bahan_bakar; ?>, Jumlah penumpang maksimal: <?php echo $driwayat->jlh_penumpang; ?> Orang</b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Catatan</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $driwayat->ket; ?></b></td>
                                            <td></td>
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