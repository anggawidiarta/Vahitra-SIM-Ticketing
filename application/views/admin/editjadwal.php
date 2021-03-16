<div class="container-fluid">
<div class="card shadow mb-4">
  
  <?php echo $this->session->flashdata('gagal'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">

             <form class="user" method="post" action="">
              <input type="hidden" name="id_jadwal" value="<?php echo $jadwal['id_jadwal']; ?>">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="Nama_kapal" value="<?php echo $jadwal['Nama_kapal']; ?>">
                    
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="date" class="form-control" name="hari" value="<?php echo $jadwal['hari']; ?>">
                    
                  </div>
               </div>
                <div class="form-group">
                  <input type="time" class="form-control" name="waktu" value="<?php echo $jadwal['waktu']; ?>" >
                  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="asal"  value="<?php echo $jadwal['asal']; ?>">

                </div>
                <div class="form-group">
                   <input type="text" class="form-control" name="tujuan"  value="<?php echo $jadwal['tujuan']; ?>">
                </div>

                <div class="form-group">
                  <!-- <input type="text" class="form-control" name="asal" placeholder="Asal.."> -->
                  <select method="post" class ="form-control" name="harga" action="system/database/DB_driver.php" value="<?php echo $jadwal['harga']; ?>">
                    <?php foreach ($kelas as $k): ?>
                  <option value="<?= $k['harga'] ?>"><?= $k['harga'] ?></option>
                  <?php endforeach ?>
                    </select>
                </div>
            
                <button type="submit" class="btn btn-primary">Update Data Jadwal</button>
        </div>
    </div>

 </div>           