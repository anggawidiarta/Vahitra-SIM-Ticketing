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
  <?php echo $this->session->flashdata('hapusjadwal'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">
              <a href="" class="btn btn-outline-primary mb-3 font-weight-bold "data-toggle="modal" data-target="#tambahjadwal"> Tambah Data</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th scope="col">No.</th>
                      <th scope="col">Nama Kapal</th>
                      <!-- <th scope="col"></th> -->
                      <!-- <th scope="col">Foto</th> -->
                      <th scope="col">Hari/tanggal</th>
                      <th scope="col">Asal</th>
                      <th scope="col">Tujuan</th>
                      <th scope="col">harga</th>
                      <th scope="col">Edit</th>
                      
                    </tr>
                  </thead>

                  <?php $i = 1; ?>
                  <?php foreach ($jadwal as $j) { ?>
                  <tbody>
                    <tr  class="text-center">
                      <td><?php echo $i; ?></td>
                      <td><?php echo $j['Nama_kapal'] ?></td>
                      <td><?php echo $hari_indonesia[ date('l', strtotime($j['hari']))] ." | ". date('d-m-Y', strtotime($j['hari'])) . " | " . $j['waktu'] ?></td>
                      <td><?php echo $j['asal'] ?></td>
                      <td><?php echo $j['tujuan']?></td>
                      <td>
                      <?php echo $j['harga']?> 
                      </td>
                      <td>
                        <a href="<?= base_url('admin/hapusjadwal/') . $j['id_jadwal']; ?>" OnClick="return confirm('anda yakin ingin menghapus data?');"><i class="fa fa-trash ml-3" aria-hidden="true"></i></a>
                        <a href="<?= base_url('admin/editjadwal/') . $j['id_jadwal']; ?>"><i class="fas fa-edit ml-3"></i></a>
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
<div class="modal fade" id="tambahjadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Jadwal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambahjadwal'); ?>
                
              <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="Nama_kapal" placeholder="Masukan Nama Kapal" >
                    
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="date" class="form-control" name="hari" placeholder="Masukkan Hari/Tanggal" >
                    
                  </div>
               </div>
                <div class="form-group">
                  <input type="time" class="form-control" name="waktu" placeholder="Masukkan Waktu" >
                  
                </div>
                <div class="form-group">
                  <!-- <input type="text" class="form-control" name="asal" placeholder="Asal.."> -->
                  <select method="post" class ="form-control" name="asal" action="system/database/DB_driver.php" placeholder="Asal...">
                    <?php foreach ($pelabuhan as $plb): ?>
                  <option value="<?= $plb['nama_pelabuhan'] ?>"><?= $plb['nama_pelabuhan'] ?></option>
                  <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                  <!-- <input type="text" class="form-control" name="asal" placeholder="Asal.."> -->
                  <select method="post" class ="form-control" name="tujuan" action="system/database/DB_driver.php" placeholder="Asal...">
                    <?php foreach ($pelabuhan as $plb): ?>
                  <option value="<?= $plb['nama_pelabuhan']?>"><?= $plb['nama_pelabuhan'] ?></option>
                  <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                  <!-- <input type="text" class="form-control" name="asal" placeholder="Asal.."> -->
                  <select method="post" class ="form-control" name="harga" action="system/database/DB_driver.php" placeholder="Asal...">
                    <?php foreach ($kelas as $k): ?>
                  <option value="<?= $k['harga'] ?>"><?= $k['harga'] ?></option>
                  <?php endforeach ?>
                    </select>
                </div>
               
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
            <?php echo form_close();?>
      </div>
      </div>
    </div>
  </div>
</div>

