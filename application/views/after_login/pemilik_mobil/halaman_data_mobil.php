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
                                <h2><b>Data Mobil</b></h2>
                             </div>
                         </div>
                    </div>
                    <div class="card_edit2 col-lg-9">
                        <form class="form-valide" action="<?php echo base_url()."controller_mobil/hlm_tambah";?>" method="post">
                            <div class="col-lg-5">
                                <button type="submit" class="btn col-lg-5 btn-success">TAMBAH MOBIL</button>
                            </div>
                        </form>
                    </div>
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12" id="hehe">
                                    <thead>
                                        <tr>
                                            <th width="220"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="190"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="3" height="100">
                                            <img src="<?php echo base_url('assets/images/logo.png')?>" alt="homepage" class="dark-logo" /></td>
                                            <td align="left" colspan="3">SMALL : ECONOMY</td>
                                            <td>Price: $80.00/day</td>
                                        </tr>
                                         <tr>
                                            <td bgcolor="orange" align="left" colspan="3"><i>EXAMPLE OF THIS RANGE: FORD FIESTA</i></td>
                                            <td bgcolor="orange">Available to book now</td>
                                        </tr>
                                        <tr>
                                            <td>Transmisi : Automatic</td>
                                            <td>Bahan Bakar : Bensin</td>
                                            <td>Jumlah Penumpang : 4</td>
                                            <td>Nomor Polisi : BK 1777 WE</td>
                                        </tr>
                                        <tr>
                                            <td height="20">
                                            <button type="submit" class="btn col-lg-4 btn-success">Detail</button>
                                            <button type="submit" class="btn col-lg-3 btn-warning">Edit</button>
                                            <button type="submit" class="btn col-lg-4 btn-danger">Delete</button>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><hr></td>
                                        </tr>
                                        <!-- @if(count($data_insert ->all()) > 0)
                                        @foreach($data_insert ->all() as $data_insert )
                                        <tr>
                                            <td>{{$data_insert ->nama_pembeli}}</td>
                                            <td>{{$data_insert ->alamat_pembeli}}</td>
                                            <td>{{$data_insert ->no_hp}}</td>
                                            <td>
                                                <a href="/member/{{$member->id_pembeli}}/edit" class="btn btn-info"> EDIT </a>
                                                <form action="/member/{{$member->id_pembeli}}" method="post" style="display:inline-block;">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                    <button type="submit" class="btn btn-danger"> DELETE </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif -->
                                        
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