<?php foreach ($detail_project as $data): ?>
    
<?php endforeach ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="mb-0 text-white">JOB SAFETY ANALYSIS</h4>
            </div>
            <div class="card-body">
                <form action="#" class="form-horizontal">
                    <div class="form-body">
                        <h4><b><?php echo $data['nama_sld'] ?></b> <span class="float-right"><?php echo $data['kode_project'] ?></span></h4>
                        <hr class="mt-0 mb-5">


                    <h4 class="box-title">A. INFORMASI PEKERJAAN</h4>
                    <hr class="mt-2 mb-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Tanggal Pengajuan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo $data['tgl_project'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Jenis Pekerjaan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo $data['nama_jenis_pekerjaan'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Lokasi</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo $data['nama_sld'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Perusahaan Pelaksana Pekerjaan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="PT. Mahiza Karya Mandiri" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pengawas Pekerjaan</label>
                                    <div class="col-md-8">
                                            <input type="text" class="form-control" value="Ainul Yaqin" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pelaksana Pekerjaan</label>
                                    
                                    <div class="col-md-8">

                                        <div class="form-group row">
                                            <?php for ($i=0;$i<$data['jml_tenaga_kerja'];$i++){
                                                echo '
                                                <div class="col-md-6 mb-3">
                                                    <input type="text" class="form-control">
                                                    <div class="custom-control custom-switch">
                                                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                      <label class="custom-control-label" for="customSwitch1">Tanda Tangan Pekerja</label>
                                                    </div>
                                                </div>
                                                ';
                                            } ?>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!--/span-->

                    

                    <h4 class="box-title">B. PERALATAN KELESALAMATAN</h4>
                    <hr class="mt-2 mb-3">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Alat Pelindungan Diri</label>
                                    
                                    <div class="col-md-8">

                                        <div class="form-group row">            
                                        <?php foreach ($perlindungan as $data): ?>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="p">
                                                    <label class="custom-control-label" for="customCheck1"><?php echo $data['nama_perlengkapan_kerja'] ?></label>
                                                </div>
                                            </div>  
                                        <?php endforeach ?>
                                        </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Perlengkapan Keselamatan & Darurat</label>
                                    
                                    <div class="col-md-8">

                                        <div class="form-group row">
                                                    
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Pemadam Api</label>
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Rambu Keselamatan</label>
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">LOTO</label>
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Radio</label>
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Lain-lain</label>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                    <h4 class="box-title"> C. ANALISA KESELAMATAN KERJA</h4>
<!--                     <hr class="mt-2 mb-3">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <embed src="<?php echo site_url(); ?>assets/JSA.pdf" width="600" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                            </div>
                        </div>
                    <hr> -->
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->