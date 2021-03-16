<div class="container-fluid">
<div class="card shadow mb-4">
  
  <?php echo $this->session->flashdata('gagal'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">

             <form class="user" method="post" action="">
              <input type="hidden" name="id_berita" value="<?php echo $berita['id_berita']; ?>">
              <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="judul">judul</label>
                    <input type="text" name="judul" required="" class="form-control form-control-user"  value="<?php echo $berita['judul']; ?>">
                  </div>
               </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama">Tanggal Publish Berita</label>
                    <input type="date" name="tanggal_berita" required=""class="form-control form-control-user" value="<?php echo $berita['tanggal_berita']; ?>" >
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="gambar">Gambar</label>
                    <input type="text" name="gambar" required=""class="form-control form-control-user" value="<?php echo $berita['foto_berita']; ?>">
                  </div>
               </div>
                <div class="form-group">
                   <label for="isi_berita">Berita</label>
                   <textarea name="isi_berita" id="" class="form-control" cols="30" rows="10" value="<?php echo $berita['isi_berita']; ?>">
                     <?php echo $berita['isi_berita']; ?>
                   </textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="inputberita">
                  Update
                </button> 
        </div>
    </div>

 </div>           


