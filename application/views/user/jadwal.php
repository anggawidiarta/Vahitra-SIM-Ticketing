  <?php 
 $hari_indonesia = array('Monday'  => 'Senin',
    'Tuesday'  => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu');
 ?>
 

  <div class="container">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h2 style="color:#0162B7; font-size:24px; font-family:  'Pathway Gothic One', sans-serif;"><b>| Jadwal</b></h2>
        </div>
        <div class="card-body text-center">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-family:  'Pathway Gothic One', sans-serif;">
              <thead class="text-primary">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Kapal</th>
                  <th scope="col">Asal</th>
                  <th scope="col">Tujuan</th>
                  <th scope="col">Hari/Tanggal</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Jumlah Penumpang</th>
                  <th scope="col"></th>
                </tr>
              </thead>

                  <?php $i = 1; ?>
                  <?php foreach ($jadwal as $j) { ?>
              <tbody>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $j['Nama_kapal'] ?></td>
                    <td><?php echo $j['asal'] ?></td>
                    <td><?php echo $j['tujuan']?></td>
                    <td><?php echo $hari_indonesia[ date('l', strtotime($j['hari']))] ." | ". date('d-m-Y', strtotime($j['hari'])) ?></td>
                    <td> <?= $j['waktu'] ?></td>
                    <td>
                     <select method="post" class ="form-control" name="harga" action="system/database/DB_driver.php">
                    <?php foreach ($kelas as $k): ?>
                  <option value="<?= $k['kelas'] ?>"><?= $k['kelas'] ?></option>
                  <?php endforeach ?>
                    </select>
                    </td>
                    <td>
                      <select class="form-control">
                        <option>Jumlah Penumpang</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </td>
                    <td><a class="btn btn-outline-primary" href="<?= base_url('user/pemesanan') ?>" >Pesan Tiket</a></td>
                  </tr>
                  <tr>
                  </tr>

                  <?php $i++; ?>
                  <?php } ?>
                </tbody>
              </tbody>
              </table>
            </div>
            <p class="text-black-50 text-left">*Kelas: 1 = Individu, 2 = Motor, 3 = Mobil, 4 = Truk, 5 = Kontainer</p>
          </div>
        </div>
      </div>
      </div>
    </div>