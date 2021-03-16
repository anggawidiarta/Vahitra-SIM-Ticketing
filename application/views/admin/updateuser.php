<div class="container-fluid">
<div class="card shadow mb-4">
  
  <?php echo $this->session->flashdata('gagal'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">

             <form class="user" method="post" action="">
              <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control form-control-user" id="nama" name="nama"  value="<?php echo $user['nama']; ?>">
                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
               </div>
                <div class="form-group">
                   <label for="email">Email</label>
                  <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo $user['email']; ?>">
                  <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <label for="password">Password</label>
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                    <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                     <label for="password1">Konfirmasi Password</label>
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Ulangi Kata sandi">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="ubah">
                  Ubah Data
                </button> 
        </div>
    </div>

 </div>           