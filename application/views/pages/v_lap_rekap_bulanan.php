
<div class="row">
    <div class="col-lg-12">
        <div class="row pt-3">
            <!--/span-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">KAB</label>
                    
                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" id="gardu">
                        <?php foreach ($gardu as $gardu): ?>
                            <option value="<?php echo $gardu['nama_gardu'] ?>"><?php echo $gardu['nama_gardu'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <!--/span-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">TGL MULAI</label>
                    <input type="date" class="form-control" id="tgl_awal">
                </div>
            </div>
            <!--/span-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">TGL AKHIR</label>
                    <input type="date" class="form-control" id="tgl_akhir">
                </div>
            </div>
            <!--/span-->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="control-label">&nbsp;</label>
                    	<button type="button" class="btn waves-effect waves-light btn-block btn-info" id="btnGenerateLaporan">Generate</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table" id="table_rekap_bulanan">
                <thead class="bg-info text-white">
                    <tr>
                        <th class="text-center">#</th>
                        <th>ULP</th>
                        <th>KAB</th>
                        <th>KODE PEKERJAAN</th>
                        <th>PEKERJAAN</th>
                    </tr>
                </thead>
                <tbody id="table_data_rekap">
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->