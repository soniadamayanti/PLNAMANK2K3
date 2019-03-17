<?php foreach ($sld as $data): ?>
    

<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="mb-0 text-white">SINGLE LINE (SLP)  </h4>
            </div>
            <div class="card-body">
                <?php echo form_open('Rencana/working_permit/'.$this->uri->segment(3)) ?>
                    <div class="form-body">
                        <h4><b><?php echo $data['nama_sld'] ?></b> <span class="float-right"></span></h4>
                        <hr class="mt-0 mb-5">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pilih SLP</label>
                                    <div class="col-md-8">
                                        <input type="text" class="custom-control-input" value="<?php echo $data['nama_sld'] ?>">
                                        <br><br>
                                        <img id="imageToSwap" class="profile" src="<?php echo base_url() ?>assets/arsip/sld/<?php echo $data['kode_sld'] ?>.jpg">
                                        
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>

                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Lanjut</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->