<div class="container-fluid">
<div class="card shadow mb-4">
  
  <?php echo $this->session->flashdata('gagal'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">

             <?php echo form_open_multipart('admin/inputberita');?>
              <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="judul">judul</label>
                    <input type="text" name="judul" required=""class="form-control form-control-user">
                  </div>
               </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama">Tanggal Publish Berita</label>
                    <input type="date" name="tanggal_berita" required=""class="form-control form-control-user">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="foto" required=""class="form-control-user">
                  </div>
               </div>
                <div class="form-group">
                   <label for="isi_berita">Berita</label>
                   <textarea name="isi_berita" id="" class="form-control" cols="30" rows="10">
                     
                   </textarea>
                </div>
                <button type="submit" value="upload" class="btn btn-primary btn-user btn-block" name="inputberita">
                  Kirim
                </button> 

            <?= form_close(); ?>
        </div>
    </div>

 </div>           