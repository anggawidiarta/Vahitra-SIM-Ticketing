
<div class="container-fluid">
<div class="card shadow mb-4">
  <?php echo $this->session->flashdata('hapusrute'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">
              <a href="" class="btn btn-outline-primary mb-3 font-weight-bold "data-toggle="modal" data-target="#exampleModal"> Tambah Data</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">Id Rute</th>
                      <th scope="col">Asal Dan Tujuan</th>
                      <th scope="col">Edit</th>
                      <!-- <th scope="col">Lokasi</th>
                      <th scope="col">Edit</th>  -->
                    </tr>
                  </thead>

                  <?php $i = 1; ?>
                  <?php foreach ($rute as $r) { ?>
                  <tbody>
                    <tr  class="text-center">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $r['asal_tujuan'] ?></td>
                      <td>
                        <a href="<?= base_url('admin/hapusrute/') . $r['id_rute']; ?>" OnClick="return confirm('anda yakin ingin menghapus data?');"><i class="fa fa-trash ml-3" aria-hidden="true"></i></a>
                        <a href="<?= base_url('admin/editrute/') . $r['id_rute']; ?>"><i class="fas fa-edit ml-3"></i></a>
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
        <h4 class="modal-title" id="exampleModalLabel">Form Input Rute</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambahrute'); ?>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-3">
                  <label>Asal & Tujuan</label>
                  <select method="post" class ="form-control" name="asal_tujuan" action="system/database/DB_driver.php" placeholder="Asal & Tujuan...">
                    <option value="Lembar - Padangbai">Lembar - Padangbai</option>
                    <option value="PadangBai - Lembar">PadangBai - Lembar</option>
                    <option value="Kayangan - Pototano">Kayangan - Pototano</option>
                    <option value="Pototano - Kayangan">Pototano - Kayangan</option>
                    </select>
                  </div>
    
                <!-- </div>
                <div class="form-group">
                  <input type="date" class="form-control" name="date_masuk" placeholder="Tanggal Kapal Masuk.." >
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nahkoda" placeholder="Masukkan Nama Nahkoda.." >
                  
                </div> -->
                <!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Upload Foto</label>
                    <input type="file" class="form-control " name="foto" action>
                    </div> -->
                   
                    <br>
                    <div class="col-sm-12 mb-3 mb-sm-3">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                    
            <?php echo form_close();?>
      </div>
      </div>
    </div>
  </div>
</div>