<div class="header2">
    <div class="bar_atas">
        <a href="#" class="jarak"><?php echo $this->session->userdata('nama'); ?></a>
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
            <a class="navbar-brand edit_logo" href="<?php echo base_url('c_beranda_mitra')?>">
                <!-- Logo icon -->
                <img src="<?php echo base_url('assets/images/join_rentcar.png')?>" alt="homepage" class="dark-logo" />
                <!--End Logo icon -->
                <!-- Logo text -->
            </a>
        </div>

    </nav>
    <div class="header3">
        <table>
            <tr>
                <td width="400"></td>
                <td><a href="<?php echo site_url('c_beranda_mitra/dataMobil/'.$this->session->userdata('id'));?>"><i class="fa fa-car"></i> Data Mobil</a></td>
                <td width="50"></td>
                <td><a href="<?php echo site_url('c_beranda_mitra/dataOrder/'.$this->session->userdata('id'));?>"><i class="fa fa-list-alt"></i> Data Order</a></td>
                <td width="50"></td>
                <td><a href="<?php echo site_url('c_beranda_mitra/dataValOrder/'.$this->session->userdata('id'));?>"><i class="fa fa-tasks"></i> Validasi Data Order</a></td>
                <td width="50"></td>
                <td><a href="#"><i class="fa fa-user"></i> Edit Profil</a></td>
            </tr>
        </table>
    </div>
</div>