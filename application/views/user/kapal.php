<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;

?>

 <?php 
 $hari_indonesia = array('Monday'  => 'Senin',
    'Tuesday'  => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu');
 ?>
 
  <!-- isi -->
  <section class="kapal">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 style="color: #0162B7; margin-top: 100px"><a href=""><b><?= $judul; ?></b></a></h2>
        </div>
      </div>
      <div class="row" style="margin-top: -100px;">
        <?php foreach ($kapal as $b) { ?>

        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
          <div class="card border-left-primary shadow h-500 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  
                  <h3 class=" text-primary text-center"><?php echo $b['nama'] ?></h3>
                  <img src="<?= base_url('assets/foto/') . $b['foto']; ?>" class="img-thumbnail" style="width: 100%;">
                  <small>Mulai Beroperasional : <?php echo $hari_indonesia[ date('l', strtotime($b['date_masuk']))] ." / ". date('d-M-Y', strtotime($b['date_masuk']))?> </small>
                  <p class="text-center">Perusahaan : <?php echo $b['perusahaan']?></p>
                </div>
              </div>
            </div>
          </div>
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
  </section>
  <!-- Tutup Konten -->
