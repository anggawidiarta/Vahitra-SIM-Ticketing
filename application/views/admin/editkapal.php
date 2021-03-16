<div class="container-fluid">
<div class="card shadow mb-4">
<?php foreach($kapal as $k) { ?>
  <?php echo $this->session->flashdata('gagal'); ?>
  
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">

             <form action="<?php echo base_url().'admin/updatekapal';?>" method="post">
              <input type="hidden" name="id_kapal" value="<?php echo $k->id_kapal ?>">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nama">Nama Kapal</label>
                    <input type="text" class="form-control form-control-user" name="nama" value="<?php echo $k->nama ?>">
                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
               </div>
                <div class="form-group">
                   <label for="perusahaan">Nama Perusahaan</label>
                  <input type="perusahaan" class="form-control form-control-user"  name="perusahaan" value="<?php echo $k->perusahaan ?>">
                  <?php echo form_error('perusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                   <label for="nahkoda">Nama Nahkoda</label>
                  <input type="text" class="form-control form-control-user" name="nahkoda" value="<?php echo $k->nahkoda ?>">
                  <?php echo form_error('nahkoda', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                   <label for="date_masuk">Tanggal Masuk Galangan Kapal</label>
                  <input type="date" class="form-control form-control-user" name="date_masuk" value="<?php echo $k->date_masuk ?>">
                  <?php echo form_error('date_masuk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="ubah">Ubah Data</button>
                <button type="reset" class="btn btn-primary btn-user btn-block" name="ubah">Reset</button> 
</form>     
  <?php } ?>   
              </div>
    </div>

 </div>           