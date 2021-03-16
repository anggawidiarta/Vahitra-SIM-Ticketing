<?php 
 $hari_indonesia = array('Monday'  => 'Senin',
    'Tuesday'  => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu');
 ?>

<div class="container-fluid">
<div class="card shadow mb-4">
  <?php echo $this->session->flashdata('hapuskapal'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">
              <a href="" class="btn btn-outline-primary mb-3 font-weight-bold "data-toggle="modal" data-target="#exampleModal"> Tambah Data</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">Id.</th>
                      <!-- <th scope="col"></th> -->
                      <th scope="col">Nama</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Perusahaan</th>
                      <th scope="col">Nahkoda</th>
                      <th scope="col">Tanggal Masuk Galangan Kapal</th>
                      <th scope="col">Edit</th>
                      
                    </tr>
                  </thead>

                  <?php $i = 1; ?>
                  <?php foreach ($kapal as $k) { ?>
                  <tbody>
                    <tr  class="text-center">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $k->nama ?></td>
                      <td><img src="<?= base_url('./assets/foto/') . $k->foto; ?> "  alt="Gambar Profile" height="300px" width="300px"></td>
                      <td><?php echo $k->perusahaan ?></td>
                      <td><?php echo $k->nahkoda ?></td>
                      <td><?php echo $hari_indonesia[ date('l', strtotime($k->date_masuk))] ." / ". date('d-M-Y', strtotime($k->date_masuk))?></td>
                      <td>
                        <a href="<?= base_url('admin/hapuskapal/') . $k->id_kapal ?>" OnClick="return confirm('anda yakin ingin menghapus data?');"><i class="fa fa-trash ml-3" aria-hidden="true"></i></a>
                        <a href="<?= base_url('admin/editkapal/') . $k->id_kapal ?>"><i class="fas fa-edit ml-3"></i></a>
                      </td>
                    </tr>
                  <?php $i++; ?>
                  <?php } ?>

                  </tbody>
                  
                </table>
                <div class="row">
                  <div class="col">
                    <?php echo $pagination ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Kapal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambahkapal'); ?>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Kapal.." >
                    
                  </div>
               </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="perusahaan" placeholder="Masukkan Perusahaan.." >
                  
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" name="date_masuk" placeholder="Tanggal Kapal Masuk.." >
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="nahkoda" placeholder="Masukkan Nama Nahkoda.." >
                  
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
