<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>

<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols1 = 4;
$rowCount1 = 0;
$bootstrapColWidth1 = 12 / $numOfCols1;
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

 <!-- Open Jumbotron -->
    <div class="jumbotron" style="background-image: url(<?= base_url('assets/img/bg1.jpg'); ?>); font-family: 'Squada One', cursive;text-shadow: 2px 2px 2px 2px black;
">
      <div class="container">
        <h1 class="display-4" style="font-family: 'Squada One', cursive; font-size: text-shadow: 2px 2px 2px 2px black;"><br>MARI MENJELAJAH BERSAMA <br> <span class="font-weight-bold">VAHITRA</span> <br></h1>
        <hr>
        <p class="text-light" style="font-size: 14pt;">Layanan E-Ticketing Pelabuhan Terbaik Se Bali-NUSRA</p>
        <a class="btn btn-primary btn-lg" href="<?= base_url('user/pemesanan'); ?>" role="button" style="box-shadow: 1px 1px 1px 1px black;">Pesan Tiket</a>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <section class="berita">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 style="color: #0162B7;font-family: cursive;"><a href="berita.html"><b>| BERITA</b></a></h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($berita as $b) { ?>
          <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <h3 class="text-primary text-center"><?php echo $b['judul'] ?></h3>
            <img src="<?= base_url('assets/img/') . $b['foto_berita']; ?>" class="img-thumbnail" style="width: 100%;">
            <small><?php echo $hari_indonesia[ date('l', strtotime($b['tanggal_berita']))] ." | ". date('d-m-Y', strtotime($b['tanggal_berita'] )) ?> </small>
            <p class="text-justify"><?php $limit_word = word_limiter($b['isi_berita'], 40); echo $limit_word; ?> </p>
          </div>
        <?php
          $rowCount++;
          if($rowCount % $numOfCols == 0) echo '</div><div class="row">'; 
        }
        ?>
        </div>
        <div class="text-right" style="margin-right: 15px;">
          <a href="<?= base_url('user/berita'); ?>" class="ml-auto"><i>lihat semua →</i></a>
        </div>
      </div>
    </section>
    <!-- Tutup Konten -->



    <!-- tentang Kapal -->
    <section class="class kapal" id="kapal">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 style="color: #0162B7; font-family: cursive;"><a href="kapal.html"><b>| KAPAL</b></a></h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($kapal as $b) { ?>
            <div class="col-md-<?php echo $bootstrapColWidth1; ?>">
          <button type="button"  class="btn ml-auto" data-toggle="modal" data-target="#exampleModalKapal">
          
            <h3 class="text-primary text-center"><?php echo $b['nama'] ?></h3>
            <img src="<?= base_url('assets/foto/') . $b['foto']; ?>" class="img-thumbnail" style="width: 100%;">
          </div>
        <?php
          $rowCount1++;
          if($rowCount1 % $numOfCols1 == 0) echo '</div><div class="row">'; 
        }
        ?>
        </button>
        </div>
        <div class="text-right" style="margin-right: 15px;">
          <a href="<?= base_url('user/kapal'); ?>" class="ml-auto"><i>lihat semua →</i></a>
        </div>
      </div>
    </section>



            <!-- Modal -->
            <div class="modal fade" id="exampleModalKapal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Detail Kapal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, perspiciatis?
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <!-- Tutup Kapal -->

    <!-- tentang Pelabuhan -->
    <section class="class pelabuhan" id="pelabuhan" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 style="color: #0162B7;font-family: cursive;"><a href="pelabuhan.html"><b>| PELABUHAN</b></a></h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($pelabuhan as $p) { ?>
            <div class="col-md-<?php echo $bootstrapColWidth1; ?>">
          <button type="button" class="btn ml-auto" data-toggle="modal" data-target="#exampleModalCenter">
          
            <h3 class="text-primary text-center"><?php echo $p['nama_pelabuhan'] ?></h3>
            <img src="<?= base_url('assets/foto/') . $p['foto']; ?>" class="img-thumbnail" style="width: 100%;">
          </div>
        <?php
          $rowCount1++;
          if($rowCount1 % $numOfCols1 == 0) echo '</div><div class="row">'; 
        }
        ?>
        </button>
        </div>
        <div class="text-right" style="margin-right: 15px;">
          <a href="<?= base_url('user/pelabuhan'); ?>" class="ml-auto"><i>lihat semua →</i></a>
        </div>
      </div>
    </section>         

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, perspiciatis?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
    </section>

    <!-- Tutup Pelabuhan -->

    <!-- tentang Lintasan -->
    <section class="class lintasan" id="lintasan" style="font-family: 'Pathway Gothic One', sans-serif;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 style="color: #0162B7;font-family: cursive;"><a href="lintasan.html"><b>| LINTASAN</b></a></h2>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-4"><br><br>
            <h2> LOMBOK  </h2> <br> 
            <p> LEMBAR - PADANG BAI</p>
            <p> LEMBAR - SUMBAWA</p>
          </div>

          <div class="col-lg-4"><br><br>
            <h2> SUMBAWA  </h2> <br> 
            <p> SUMBAWA - PADANG BAI</p>
            <p> SUMBAWA - LEMBAR</p>
          </div>

          <div class="col-lg-4"><br><br>
            <h2> BALI  </h2> <br> 
            <p> PADANG BAI - LEMBAR</p>
            <p> PADANG BAI - SUMBAWA</p>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Tutup Lintasan -->


    <br> 