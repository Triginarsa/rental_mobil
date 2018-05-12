<div class="header2">
    <div class="bar_atas">
            <a href="<?php echo site_url('c_beranda_user/riwayatPesanan/'.$this->session->userdata('id'));?>" class="jarak">RIWAYAT</a>
            <a href="<?php echo site_url('c_beranda_user/dataPesanan/'.$this->session->userdata('id'));?>" class="jarak">PESANAN</a>
            <a href="#" class="jarak head1" style="text-transform: uppercase;><?php echo $this->session->userdata('nama'); ?></a>
            <a href="#" class="jarak" data-toggle="modal" data-target="#ModalKeluar">LOGOUT</a>
            <div class="modal fade" id="ModalKeluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOGOUT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Anda Yakin Ingin Keluar?
                  </div>
                  <div class="modal-footer">
                    <form action="<?php echo site_url('c_logout')?>" method="post">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-info">Ya</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand edit_logo" href="<?php echo site_url('c_beranda_user/');?>">
                <!-- Logo icon -->
                <b><img src="<?php echo base_url('assets/images/logo.png')?>" alt="homepage" class="dark-logo" /></b>
                <!--End Logo icon -->
                <!-- Logo text -->
            </a>
        </div>
        <form method="get" action="<?php echo base_url('c_beranda_user/getDataByKota/'); ?>">
            <table>
                <tr>
                    <td>
                        <select class="form-control provinsiku" id="val-provinsi" name="val-provinsi" required="">
                            <option value="">Lokasi Provinsi Anda</option>
                                <?php foreach($provinsi as $a){ ?>
                                    <option value="<?php echo $a['id_provinsi']; ?>"><?php echo $a['provinsi']; ?></option>
                                <?php } ?>
                        </select>
                    </td>
                    <td>
                        <select class="form-control kotaku" id="val-kota" name="val-kota" disabled="" required="">
                            <option>Lokasi Kota Anda</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit" class="btn col-lg-12 btn-success tombolku"><i class="ti-search"></i>CARI</button>
                    </td>
                </tr>
            </table>
        </form>
    </nav>
    <div class="header3">
        <table>
            <tr>
                <td width="400"></td>
                <td><a href="<?php echo base_url()."c_beranda_user/hlm_bantuan/";?>"><i class="fa fa-list-alt"></i> Pusat Bantuan</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda_user/hlm_syarat/";?>"><i class="fa fa-list-alt"></i> Syarat & Ketentuan</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda_user/hlm_about/";?>"><i class="fa fa-tasks"></i> Tentang RentCar</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda_user/hlm_cara/";?>"><i class="fa fa-user"></i> Cara Pemesanan</a></td>
            </tr>
        </table>
    </div>
</div>