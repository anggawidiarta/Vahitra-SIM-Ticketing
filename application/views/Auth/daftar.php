 <div class="container">
    <div class="col-xl-6 col-lg-12 col-md-9 mx-auto">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">DAFTAR</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/daftar'); ?>">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda.." value="<?php echo set_value('nama'); ?>">
                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
               </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email anda.." value="<?php echo set_value('email'); ?>">
                  <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                    <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Ulangi Kata sandi">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Daftar
                </button>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth'); ?>">Anda sudah Memiliki Akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  </div>

