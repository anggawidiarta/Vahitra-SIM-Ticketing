<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>


 


<div class="container-fluid">
<div class="card shadow mb-4">
  <?php echo $this->session->flashdata('pesan'); ?>
  <?php echo $this->session->flashdata('hapus'); ?>
  <?php echo $this->session->flashdata('ubah'); ?>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            
            <div class="card-body">
          
           <a href="<?= base_url('admin/inputberita')?>" class="btn btn-outline-primary mb-3 font-weight-bold "> Tambahkan Berita</a> <br>

           <div class="row">
          <?php foreach ($berita as $b) { ?>

          <div class="col-md-<?php echo $bootstrapColWidth; ?>">

           
          <a href="<?= base_url('admin/hapusberita/') . $b->id_berita ?>" OnClick="return confirm('anda yakin ingin menghapus data?');" class="float-right ml-3"><i class="fa fa-trash ml-3" aria-hidden="true"></i></a>
          <a href="<?= base_url('admin/editberita/') . $b->id_berita ?>" class="float-right ml-3"><i class="fas fa-edit ml-3"></i></a> <br> <br>
          <h3 class="text-center"> <?php echo $b->judul ?></h3>
          <img src="<?= base_url('assets/img/') . $b->foto_berita ?> " class="img-fluid">
          <small><?php echo $b->tanggal_berita ?></small>
          <p class="text-justify"><?php echo $b->isi_berita ?> </p>
          
          </div>
        <?php
          $rowCount++;
          if($rowCount % $numOfCols == 0) echo '</div><div class="row">'; 
        }
        ?>
      </div>
      </div>
      <div class="row">
                  <div class="col">
                    <?php echo $pagination ?>
   
      </div>
  </div>




   







