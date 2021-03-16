 <div class="container">
        <div class="col-sm-12 m-auto">
          <div class="card shadow mb-4" style="margin-top: 100px;">
          <div class="card-body">
            <div class="col-sm-4 text-center float-left" style="background-color: #f7f7f7;">
              <img src="<?= base_url('assets/img/') . $user['image']; ?>" alt="" style="width: 50%; margin: 10px;">
              <!-- <div class="input-group mb-3">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button submit" id="button-addon2">Unggah</button>
                </div>
                <input type="text" class="form-control" placeholder="Pilih Foto..." aria-label="Recipient's username" aria-describedby="button-addon2">
              </div> -->
              <input type="file" name="gambar">
              <small class="muted text-secondary">
                Besar file: maksimum 10.000.000 bytes (10 Megabytes)
                <br>
                Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
              </small>
            </div>
            <div class="col-sm-8 float-right">
              <h3>Ubah Profil</h3>
              <div>
                <table>
                  <tr>
                    <th>Nama</th>
                    <td><input type="text" class="form-control bg-light" placeholder="nama sebelumnya" aria-label="Username" aria-describedby="basic-addon1"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>E-Mail</th>
                    <td><input type="text" class="form-control bg-light" placeholder="email sebelumnya" aria-label="Username" aria-describedby="basic-addon1"></td>
                  </tr>
                  <tr>
                    <th>NIK</th>
                    <td><input type="text" class="form-control bg-light" placeholder="nik sebelumnya" aria-label="Username" aria-describedby="basic-addon1"></td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td><input type="text" class="form-control bg-light" placeholder="alamat sebelumnya" aria-label="Username" aria-describedby="basic-addon1"></td>
                  </tr>
                  <tr>
                    <th>Bergabung Sejak</th>
                    <td>date</td>
                  </tr>
                </table>
              </div>
              <td colspan="2"><input type="submit" name="submit" value="Simpan">
                      <input type="reset" name="Hapus" value="Hapus">
                    </td>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>