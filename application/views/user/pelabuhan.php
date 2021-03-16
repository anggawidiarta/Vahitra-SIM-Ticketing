<div class="container kontakan pelabuhan" style="margin-top: 100px;">
      <div class="row">
        <div class="col-sm-12" style="margin-top: 5px;">
          <h2 style="color:#0162B7; font-size:24px;"><b>| Pelabuhan</b></h2>
          <div class="row">
            <?php foreach($pelabuhan as $p) { ?>
            <div class="col-sm-6">
              <img src="<?= base_url('./assets/foto/'). $p['foto']; ?>" alt="" class="img-thumbnail" style="width: 100%;">
            </div>
            <div class="col-sm-6">
              <p><span><?php echo $p['nama_pelabuhan'] ?></span> <?php echo $p['letak'] ?></p>
            </div>
            <?php
            }
        ?>
          </div>
          
         