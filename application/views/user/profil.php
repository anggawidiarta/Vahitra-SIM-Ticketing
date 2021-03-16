 <!-- isi -->

    <div class="container">
        <div class="col-sm-12 m-auto">
          <div class="card shadow mb-4" style="margin-top: 120px;">
          <div class="card-body">
            <div class="col-sm-4 text-center float-left" style="background-color: #f7f7f7;">
              <img src="<?= base_url('assets/img/') . $user['image']; ?> " alt="" style="width: 50%; margin: 10px;">
            </div>
            <div class="col-sm-8 float-right">
              <h3>Biodata Diri</h3>
              <div>
                <table>
                  <tr>
                    <th>Nama</th>
                    <td><input class="form-control bg-transparent" type="text" id="nama" name="nama" value="Nama ana" disabled> </td>
                  </tr>
                  <tr>
                    <th>E-Mail</th>
                    <td><input class="form-control bg-transparent" type="text" id="email" name="email" value="email ana" disabled> </td>
                  </tr>
                  <tr>
                    <th>NIK</th>
                    <td><input class="form-control bg-transparent" type="text" id="nik" name="nik" value="NIK ana" disabled> </td>
                  </tr>
                  <tr>
                    <th>Alamat</th>
                    <td><input class="form-control bg-transparent" type="text" id="alamat" name="alamat" value="alamat ana" disabled> </td>
                  </tr>
                  <tr>
                    <th>Bergabung Sejak</th>
                    <td><input class="form-control bg-transparent" type="text" id="tanggal" name="tanggal" value="tanggal" disabled> </td>
                  </tr>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- end isi -->
