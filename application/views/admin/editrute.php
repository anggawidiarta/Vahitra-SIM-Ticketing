<div class="container-fluid">
<div class="card shadow mb-4">
<?php foreach($rute as $k) { ?>
  <?php echo $this->session->flashdata('gagal'); ?>
  
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
            </div>
            <div class="card-body">

             <form action="<?php echo base_url().'admin/updaterute';?>" method="post">
              <input type="hidden" name="id_rute" value="<?php echo $k->id_rute?>">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="asal_tujuan">Asal & Tujuan</label>
                    <input type="text" class="form-control form-control-user" name="asal_tujuan" value="<?php echo $k->asal_tujuan ?>">
                    <?php echo form_error('asal_tujuan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
               </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="ubah">Ubah Data</button>
                <button type="reset" class="btn btn-primary btn-user btn-block" name="ubah">Reset</button> 
</form>     
  <?php } ?>   
              </div>
    </div>

 </div>           