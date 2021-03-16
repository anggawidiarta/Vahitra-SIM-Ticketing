
<div class="container-fluid">
<div class="card shadow mb-4">
  <?php echo $this->session->flashdata('hapuspelabuhan'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">
              <a href="" class="btn btn-outline-primary mb-3 font-weight-bold "data-toggle="modal" data-target="#exampleModal"> Tambah Data</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">No</th>
                      <th scope="col">Nama Pelabuhan</th>
                      <th scope="col">Foto Pelabuhan</th>
                      <th scope="col">Lokasi</th>
                      <th scope="col">Edit</th> 
                      
                    </tr>
                  </thead>

                  <?php $i = 1; ?>
                  <?php foreach ($pelabuhan as $p) { ?>
                  <tbody>
                    <tr  class="text-center">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $p['nama_pelabuhan']; ?></td>
                      <td><img src="<?= base_url('./assets/foto/') . $p['foto']; ?> "  alt="Gambar Profile" height="300px" width="300px"></td>
                      <td><?php echo $p['letak']; ?></td>
                      <td>
                        <a href="<?= base_url('admin/hapuspelabuhan/') . $p['no_pelabuhan']; ?>" OnClick="return confirm('anda yakin ingin menghapus data?');"><i class="fa fa-trash ml-3" aria-hidden="true"></i></a>
                        <a href=""><i class="fas fa-edit ml-3"></i></a>
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
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Pelabuhan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambahpelabuhan'); ?>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="nama_pelabuhan" placeholder="Masukkan Nama Pelabuhan.." >
                    
                  </div>
               </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="letak" placeholder="Masukkan Lokasi Pelabuhan.." >
                  </div>
                
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" class="form-control " name="foto">
                    </div>

                    <div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                    
            <?php echo form_close();?>
      </div>
      </div>
    </div>
  </div>
</div>