<div class="header2">
    <div class="bar_atas">
        <a href="#" class="jarak" style="text-transform: uppercase;><?php echo $this->session->userdata('nama'); ?></a>
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
            <a class="navbar-brand edit_logo" href="<?php echo base_url('c_beranda_admin')?>">
                <!-- Logo icon -->
                <img src="<?php echo base_url('assets/images/admin_rentcar.png')?>" alt="homepage" class="dark-logo" />
                <!--End Logo icon -->
                <!-- Logo text -->
            </a>
    </nav>
    <div class="header3">
        <table>
            <tr>
                <td width="400"></td>
                <td><a href="<?php echo base_url()."c_beranda_admin/dataMobil";?>"><i class="fa fa-car"></i> Data Mobil</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda_admin/dataUser";?>"><i class="fa fa-users"></i> Data User</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda_admin/dataMitra";?>"><i class="fa fa-user-circle"></i> Data Mitra</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda_admin/dataOrder";?>"><i class="fa fa-list-alt"></i> Data Order</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda_admin/validasiMobil";?>"><i class="fa fa-tasks"></i> Validasi Data Mobil</a></td>
                <td width="50"></td>
                <td><a href="#"><i class="fa fa-user"></i> Edit Profil</a></td>
            </tr>
        </table>
    </div>
</div>