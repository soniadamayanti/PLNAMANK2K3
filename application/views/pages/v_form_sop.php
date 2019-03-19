<?php 
$a = array();
foreach ($kode_project as $data) {
    $a[] = $data;
}
$b = array();
foreach ($atasan as $r) {
    $b[] = $r;
}
$nama_atasan = $b[0]['nama_user'];
$divisi_atasan = $b[0]['nama_divisi'];
$kode = $a[0]['kode_project'];
foreach ($detail_project as $data_project) {
    # code...
}
 ?>
<div class="row" id="sop_pemadaman">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="mb-0 text-white">SOP PEMADAMAN  </h4>
            </div>
            <div class="card-body">
                    <div class="form-body">
                        <h4><b>PERMOHONAN PEMBEBASAN TEGANGAN</b> <span class="float-right" id="kode_project_view"><?php echo $kode ?></span></h4>
                        <hr class="mt-0 mb-5">
                        <input type="hidden" class="form-control" id="kode_project" value="<?php echo $kode ?>">
                        <input type="hidden" class="form-control" id="type" value="<?php echo $this->uri->segment(3) ?>"> 
                    </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pengawas</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo $nama_atasan ?>" disabled> </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div><div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Jabatan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo $divisi_atasan ?>" disabled> </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div><div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pembebasan Jaringan Hari / Tanggal</label>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="tgl_project" value="<?php echo (isset($data_project['tgl_project']) != '')? $data_project['tgl_project'] : ""  ?>"></div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Sistem Tegangan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="tegangan" value="<?php echo (isset($data_project['tegangan']) != '')? $data_project['tegangan'] : ""  ?>"> </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Untuk Keperluan</label>
                                    
                                    <div class="col-md-8">
                                    <div class="row mb-3">
                                        <div class="col-md-11">
                                            
                                        <select class="form-control custom-select" tabindex="1" id="kode_jenis_pekerjaan">
                                            <?php foreach ($jenis_pekerjaan as $a): ?>

                                                <option 
                                                value="<?php echo $a['kode_jenis_pekerjaan'] ?>" 
                                                    <?php echo (isset($data_project['kode_jenis_pekerjaan']) == $a['kode_jenis_pekerjaan'])? 'selected="selected"' : ""  ?>
                                                    ><?php echo $a['nama_jenis_pekerjaan'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        </div>
<!--                                         <div class="col-md-1">
                                            <div class="btn-group">
                                            <button type="button" id="btnSimpanTempPelaksana" class="btn btn-info" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-plus"></i>
                                            </button>
                                            </div>

                                        </div> -->
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h3 class="box-title">KESIAPAN PEMBORONG</h3>
                        <hr class="mt-2 mb-3">
                        <!--/row-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Material</label>
                                    <div class="col-md-8">
                                        
                                    <select class="form-control custom-select" tabindex="1" id="material">
                                        <option value="Lengkap" <?php echo (isset($data_project['material']) == 'Lengkap')? 'selected="selected"' : ""  ?>>Lengkap</option>
                                        <option value="Belum Lengkap" <?php echo (isset($data_project['material']) == 'Tidak Lengkap')? 'selected="selected"' : ""  ?>>Belum Lengkap</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Jumlah Tenaga Kerja</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="jml_tenaga_kerja" value="<?php echo (isset($data_project['jml_tenaga_kerja']) != '')? $data_project['jml_tenaga_kerja'] : ""  ?>"> </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Peralatan Kerja</label>
                                    <div class="col-md-8">
                                        
                                    <select class="form-control custom-select" tabindex="1" id="peralatan_kerja">
                                        <option value="Lengkap" <?php echo (isset($data_project['peralatan_kerja']) == 'Lengkap')? 'selected="selected"' : ""  ?>>Lengkap</option>
                                        <option value="Belum Lengkap" <?php echo (isset($data_project['peralatan_kerja']) == 'Belum Lengkap')? 'selected="selected"' : ""  ?>>Belum Lengkap</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pelaksana</label>
                                    <div class="col-md-8">  

                                    <div class="row mb-3">
                                        <div class="col-md-10">
                                            <select class="form-control custom-select" tabindex="1" id="kode_pelaksana">
                                                    <?php 
                                                    foreach ($pelaksana as $data) {
                                                        echo "<option value='".$data['kode_pelaksana']."'>".$data['nama_pelaksana']."</option>";
                                                    }
                                                     ?>
                                                </select>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="btn-group">
                                            <button type="button" id="btnTambahPelaksana" class="btn btn-info" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-plus"></i>
                                            </button>
                                            </div>

                                        </div>
                                    </div>
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
                                    
                                    <div class="table-responsive">
                                        <table class="table" id="table_temp_pelaksana">
                                            <thead class="bg-info text-white">
                                                <tr>
                                                    <th>Pelaksana</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                        <!--/row--><h3 class="box-title">Jadwal Pekerjaan</h3>
                    <hr class="mt-2 mb-3">
                    <!--/row-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Uraian</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="uraian_pekerjaan">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Rencana Jam</label>
                                <div class="col-md-8">
                                    <input type="time" class="form-control" id="jam">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Keterangan</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows=2 id="keterangan"></textarea>
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
                                    <button type="button" class="btn btn-info" id="btnTambahUraianPekerjaan"><i class="ti-plus"></i>Tambah</button>
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
                                    
                                    <div class="table-responsive">
                                        <table class="table" id="table_temp_uraian_pekerjaan">
                                            <thead class="bg-info text-white">
                                                <tr>
                                                    <th>Uraian Jadwal Pekerjaan</th>
                                                    <th>Rencana Jam</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>



                    <h3 class="box-title">DI ISI PT PLN (PERSERO) CABANG CIANJUR</h3>
                    <hr class="mt-2 mb-3">
                    <!--/row-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Nama Penyulang</label>
                                <div class="col-md-8">
                                    <select class="form-control custom-select" tabindex="1" onchange="
                                        $('#imageToSwap').attr('src', '<?php echo base_url() ?>assets/arsip/sld/'+this.options[this.selectedIndex].value+'.jpg');
                                        $('#kode_line').val(this.options[this.selectedIndex].value)">
                                            <?php 
                                            foreach ($sld as $a) {
                                                echo  "<option value='".$a['kode_sld']."'>".$a['nama_sld']."</option>";
                                            }
                                             ?>
                                        </select>
                                        <input type="hidden" id="kode_line" >
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Gardu Padam</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="gardu"value="<?php echo (isset($data_project['gardu']) != '')? $data_project['gardu'] : ""  ?>">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Lokasi Padam</label>
                                <div class="col-md-8">
                                    
                                    <textarea class="form-control" rows=2 id="alamat_project"><?php echo (isset($data_project['alamat_project']) != '')? $data_project['alamat_project'] : ""  ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
<!--                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Pelaksana Pembebasan</label>
                                <div class="col-md-8">
                                        <input type="text" class="form-control" value="PT. Mahiza Karya Mandiri dan ULP KOTA" disabled> 
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    <!-- </div> -->
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success" id="btnSimpanProject">Lanjut</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>