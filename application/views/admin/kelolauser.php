
<div class="container-fluid">
<div class="card shadow mb-4">
  <?php echo $this->session->flashdata('hapus'); ?>
  <?php echo $this->session->flashdata('ubah'); ?>
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">
              <a href="" class="btn btn-outline-primary mb-3 font-weight-bold "data-toggle="modal" data-target="#exampleModal"> Tambah Data</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">No.</th>
                      <th scope="col">profil</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Bergabung Sejak</th>
                      <th scope="col">Edit</th>
                      
                    </tr>
                  </thead>

                  <?php $i = 1; ?>
                  <?php foreach ($user as $u) { ?>
                  <tbody>
                    <tr  class="text-center">
                      <td><?php echo $i; ?></td>
                      <td> <img src="<?= base_url('assets/img/') . $u['image']; ?> "  alt="Gambar Profile" width="50"></td>
                      <td><?php echo $u['nama'] ?></td>
                      <td><?php echo $u['email'] ?></td>
                      <td><?= date('d F Y', $u['date_buat']); ?></td>
                      <td>
                        <a href="<?= base_url('admin/hapususer/') . $u['id']; ?>" OnClick="return confirm('anda yakin ingin menghapus data?');"><i class="fa fa-trash ml-3" aria-hidden="true"></i></a>
                        <a href="<?= base_url('admin/updateuser/') . $u['id']; ?>"><i class="fas fa-edit ml-3"></i></a>
                      </td>
                    </tr>
                  <?php $i++; ?>
                  <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>






        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="user" method="post" action="">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda.." >
                    
                  </div>
               </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email anda.." >
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                    
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Ulangi Kata sandi">
                  </div>
                </div>

                
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>