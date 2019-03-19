
<div class="row" id="">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="mb-0 text-white">SOP PEMADAMAN  </h4>
            </div>
            <div class="card-body">
                    <div class="form-body">
                        <h4><b>PERMOHONAN PEMBEBASAN TEGANGAN</b> <span class="float-right" id="kode_project_view">K.001</span></h4>
                        <hr class="mt-0 mb-5">
                        <input type="hidden" class="form-control" id="kode_project" value="">
                        <input type="hidden" class="form-control" id="type" value=""> 
                    </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pengawas Pekerjaan</label>
                                    <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="Ainul" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" value="019310" disabled>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Pengawas K3</label>
                                    <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="Virgea" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" value="0293587867" disabled>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Tegangan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="tegangan" value="20 KV"> </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Untuk Keperluan</label>
                                    
                                    <div class="col-md-8">
                                            
                                        <select class="form-control custom-select" tabindex="1" id="kode_jenis_pekerjaan">
                                            <?php foreach ($jenis_pekerjaan as $a): ?>

                                                <option 
                                                value="" 
                                                    <?php echo (isset($data_project['kode_jenis_pekerjaan']) == $a['kode_jenis_pekerjaan'])? 'selected="selected"' : ""  ?>
                                                    ><?php echo $a['nama_jenis_pekerjaan'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h4 class="box-title mb-3">KESIAPAN PEMBORONG</h4>
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
                                    <label class="col-sm-4 text-left col-form-label">Perusahaan Pelaksana</label>
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
                                        <table class="table" id="">
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
                        <!--/row-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Tenaga Kerja</label>
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

                            </div>

                        <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">&nbsp;</label>
                                <div class="col-md-8">
                                    
                                    <div class="table-responsive">
                                        <table class="table" id="">
                                            <thead class="bg-info text-white">
                                                <tr>
                                                    <th>Nama Tenaga Kerja</th>
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
                        <!--/row-->
                    <h4 class="box-title mt-3">JADWAL PEKERJAAN</h4>
                    <hr class="mt-2 mb-3">
                    <!--/row-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-4 text-left col-form-label">Tanggal Pengajuan</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="tgl_project" value="<?php echo date('Y-m-d'); ?>"></div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="control-label text-left col-md-4">Tanggal Mulai</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="tgl_mulai">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="control-label text-left col-md-4">Tanggal Selesai</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="tgl_selesai">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="control-label text-left col-md-4">Jam Mulai</label>
                                <div class="col-md-8">
                                        <input type="time" class="form-control" id="jam_mulai">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group row">
                                <label class="control-label text-left col-md-4">Jam Selesai</label>
                                <div class="col-md-8">
                                    <input type="time" class="form-control" id="jam_selesai">
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <table class="table" id="">
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



                    <h4 class="box-title mt-3">PENYULANG</h4>
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


                    <h4 class="box-title mt-3">PERALATAN KESELAMATAN</h4>
                    <hr class="mt-2 mb-3">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 text-left col-form-label">Alat Pelindungan Diri</label>
                                    
                                    <div class="col-md-8">

                                        <div class="form-group row">            
                                        <?php $i=0;foreach ($perlindungan as $data): ?>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input peralatan" value="<?php echo $data['kode_peralatan_kerja'] ?>" name="perlindungan" id="p<?php echo $i; ?>">
                                                    <label class="custom-control-label" for="p<?php echo $i; ?>"><?php echo $data['nama_peralatan_kerja'] ?></label>
                                                </div>
                                            </div>  
                                        <?php $i++;endforeach ?>
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
                                            <?php $i=0;foreach ($keselamatan as $data): ?>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input peralatan" value="<?php echo $data['kode_peralatan_kerja'] ?>" name="keselamatan" id="k<?php echo $i; ?>">
                                                    <label class="custom-control-label" for="k<?php echo $i; ?>"><?php echo $data['nama_peralatan_kerja'] ?></label>
                                                </div>
                                            </div>  
                                        <?php $i++;endforeach ?>
                                        </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="box-title mt-3">KLASIFIKASI PEKERJAAN</h4>
                        <hr class="mt-2 mb-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group row">
                                        
                                            <?php $i = 0;foreach ($klasifikasi_kerja as $klasifikasi): ?>
                                                <div class="col-md-4">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input klasifikasi" id="k<?php echo $i ?>" name="klasifikasi" value="<?php echo $klasifikasi['kode_klasifikasi_kerja'] ?>">
                                                        <label for="k<?php echo $i ?>" class="custom-control-label"><?php echo $klasifikasi['nama_klasifikasi_kerja'] ?></label>
                                                    </div>
                                                </div>
                                            <?php $i++;endforeach ?>
                                    </div>
                                </div>
                            </div>
                        <h4 class="box-title">PROSEDUR PEKERJAANYANG TELAH DIJELASKAN KEPADA PEKERJA</h4>
                        <hr class="mt-2 mb-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group row">
                                        
                                            <?php $i=0;foreach ($prosedur_kerja as $prosedur_kerja): ?>
                                                <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input prosedur_kerja" name="prosedur_kerja" id="p<?php echo $i ?>" value="<?php echo $prosedur_kerja['kode_prosedur_kerja'] ?>">
                                                    <label class="custom-control-label" for="p<?php echo $i ?>"><?php echo $prosedur_kerja['nama_prosedur_kerja'] ?></label>
                                                </div>
                                                </div>   
                                            <?php $i++;endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <h4 class="box-title">LAMPIRAN IZIN KERJA (WAJIB DILAMPIRKAN)</h4>
                        <hr class="mt-2 mb-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group row">
                                        <?php $i=0;foreach ($lampiran_izin_kerja as $lampiran_izin_kerja): ?>
                                            <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input lampiran_izin" name="lampiran_izin" id="l<?php echo $i ?>" value="<?php echo $lampiran_izin_kerja['kode_lampiran_izin_kerja'] ?>">
                                                    <label class="custom-control-label" for="l<?php echo $i ?>"><?php echo $lampiran_izin_kerja['nama_lampiran_izin_kerja'] ?></label>
                                                </div>
                                            </div>
                                        <?php $i++;endforeach ?>
                                    </div>
                                </div>
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