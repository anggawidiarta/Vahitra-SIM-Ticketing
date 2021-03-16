

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6 mx-auto">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">MASUK</h1>
                  </div>

                  <?php echo $this->session->flashdata('pesan'); ?>
                  <form class="user" action="<?php echo base_url('auth'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Silahkan Masukkan Email Anda..." value="<?php echo set_value('email'); ?>">
                      <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi" >
                      <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/daftar'); ?>">Daftar Akun Baru!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
