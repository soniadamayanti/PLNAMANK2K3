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
 ?>
<div class="row" id="sop_pemadaman">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="mb-0 text-white">SOP PEMADAMAN  </h4>
            </div>
            <div class="card-body">
                <form action="#" class="form-horizontal">
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
                                        <input type="text" class="form-control" value="<?php echo $nama_atasan ?>"disabled> </div>
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
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy"></div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Sistem Tegangan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control"> </div>
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
                                        <div class="col-md-10">
                                        <select class="form-control custom-select" tabindex="1">
                                            <?php 
                                            foreach ($nama_jenis_pekerjaan as $a) {
                                                echo  "<option value='".$a['kode_jenis_pekerjaan']."'>".$a['nama_jenis_pekerjaan']."</option>";
                                            }
                                             ?>
                                        </select>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="btn-group">
                                            <button type="button" id="btnSimpanTempPelaksana" class="btn btn-info" aria-haspopup="true" aria-expanded="false">
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
                        <h3 class="box-title">KESIAPAN PEMBORONG</h3>
                        <hr class="mt-2 mb-3">
                        <!--/row-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Material</label>
                                    <div class="col-md-8">
                                        
                                    <select class="form-control custom-select" tabindex="1">
                                        <option value="Lengkap">Lengkap</option>
                                        <option value="Belum Lengkap">Belum Lengkap</option>
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
                                        <input type="text" class="form-control"> </div>
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
                                        
                                    <select class="form-control custom-select" tabindex="1">
                                        <option value="Lengkap">Lengkap</option>
                                        <option value="Belum Lengkap">Belum Lengkap</option>
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
                                            <button type="button" id="btnTambahPelaksana"class="btn btn-info" aria-haspopup="true" aria-expanded="false">
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
                                    <input type="text" class="form-control">
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
                                    <input type="text" class="form-control">
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
                                    
                                    <textarea class="form-control" rows=2></textarea>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Pelaksana Pembebasan</label>
                                <div class="col-md-8">
                                        <input type="text" class="form-control" value="PT. Mahiza Karya Mandiri dan ULP KOTA" disabled> 
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