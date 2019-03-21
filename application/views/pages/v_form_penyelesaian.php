<?php 
$a = array();
foreach ($kode_project as $data) {
    $a[] = $data;
}
$kode = $a[0]['kode_project'];
foreach ($detail_project as $data_project) {
}
?>
    

<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="mb-0 text-white">FORM PENYELESAIAN</h4>
            </div>
            <div class="card-body">
                <?php echo form_open('Rencana/working_permit/'.$this->uri->segment(3)) ?>
                    <div class="form-body">
                        <h4><b><?php echo $data['kode_project'] ?></b> <span class="float-right"></span></h4>
                        <input type="hidden" class="form-control" id="kode_project" value="<?php echo  $a[0]['kode_project'] ?>">
                        <input type="hidden" class="form-control" id="type" value="<?php echo  $this->uri->segment(3) ?>"> 
                        <?php echo substr($a[0]['tgl_selesai'], 0, 10) ?>
                        <br>
                        <hr class="mt-0 mb-5">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Keterangan Pemberitahuan</label>
                                    <div class="col-md-8">
                                    <textarea class="form-control" rows=6 id="ketPemberitahuan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">&nbsp;</label>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-success" id="btnSimpanPenyelesaian">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->