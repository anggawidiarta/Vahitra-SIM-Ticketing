  <div class="container">
        <div class="col-sm-12 m-auto">
        <div class="card shadow mb-4" style="margin-top: 100px;">
          <div class="card-header py-3">
            <h2 style="color:#0162B7; font-size:24px;"><b>| Pemesanan</b></h2>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="card-header">
                <p><b>Detail Pesanan</b></p>
              </div>
              <div class="card-body">
                <ul style="list-style: none;">
                  <li>
                    <label for="lname">Nama Kapal: </label>
                    <?php foreach($kapal as $k) { ?>
                    <option value="<?php $k->$id_kapal?>"><?php echo $k['nama']; ?></option>
                    <?php } ?>
                  </li>
                  <li>
                    <label for="lname">Asal: </label>
                    <input class="form-control"type="text" id="lname" name="lname" value="Lembar" disabled>
                  </li>
                  <li>
                    <label for="lname">Tujuan: </label>
                    <input class="form-control" type="text" id="lname" name="lname" value="Padang Bai" disabled>
                  </li>
                  <li>
                    <label for="lname">Hari/Tanggal, Waktu: </label>
                    <input class="form-control" type="text" id="lname" name="lname" value="Sabtu, 16 Mei 2020 10.00 WITA" disabled>
                  </li>
                  <li>
                    <label for="lname">Kelas: </label>
                    <input class="form-control" type="text" id="lname" name="lname" value="1" disabled>
                  </li>
                  <li>
                    <label for="lname">Jumlah Penumpang: </label>
                    <input class="form-control" type="text" id="lname" name="lname" value="3" disabled>
                  </li>
                  <li>
                    <label for="lname">Total Biaya: </label>
                    <input class="form-control" type="text" id="lname" name="lname" value="rp 300.000" disabled>
                  </li>
                </ul>
              </div>
              <div class="card-header">
                <p><b>Detail Penumpang</b></p>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead class="bg-primary text-light">
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">>= 17 Tahun Nomor ID (KTP, SIM, PASPORT)*</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><input type="text" name="nama" class="form-control"></td>
                      <td><input type="text" name="identitas" class="form-control"></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td><input type="text" name="nama" class="form-control"></td>
                      <td><input type="text" name="identitas" class="form-control"></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td><input type="text" name="nama" class="form-control"></td>
                      <td><input type="text" name="identitas" class="form-control"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-header">
                <p><b>Detail Pemesan</b></p>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-row">
                    <div class="col">
                      <label for="inputNama">Nama Pemesan</label>
                      <input type="text" class="form-control" placeholder="Nama Pemesan" id="inputNama">
                    </div>
                    <div class="col">
                      <label for="inputEmail">E-Mail</label>
                      <input type="text" class="form-control" placeholder="E-Mail Pemesan" id="inputEmail">
                    </div>
                    <div class="col">
                      <label for="inputTelp">No. Telp</label>
                      <input type="text" class="form-control" placeholder="Nomor Telepon Pemesan" id="inputTelp">
                    </div>
                  </div>
                  <div>
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" class="form-control" placeholder="Nomor Telepon Pemesan" id="inputAlamat">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- <button class="btn btn-primary" type="submit"> --><a class="btn-primary text-light text-center" style="padding: 5px;" href="<?= base_url('user/pesanberhasil') ?>">Submit</a><!-- </button> -->
        </div>
        </div>
      </div>
    </div>