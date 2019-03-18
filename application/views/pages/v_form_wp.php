<?php foreach ($detail_project as $data): ?>
    
<?php endforeach ?>
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="mb-0 text-white">WORKING PERMIT</h4>
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
                                        <label class="col-sm-4 text-left col-form-label">Detail Pekerjaan</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  value="<?php echo $data['nama_jenis_pekerjaan'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-left col-form-label">Lokasi Pekerjaan</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" value="<?php echo $data['nama_sld'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 text-left col-form-label">Pengawas Pekerjaan</label>
                                        <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="Ainul Yaqin" disabled>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" value="087742359100" disabled>
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
                                                <input type="text" class="form-control" value="Virgea Krismanda" disabled>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" value="082175551733" disabled>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!--/span-->
                        </div>

                        <h4 class="box-title">B. DURASI PEKERJAAN</h4>
                        <hr class="mt-2 mb-3">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-4">Tanggal Mulai</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" placeholder="<?php echo $data['tgl_pelaksanaan'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-4">Tanggal Selesai</label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" placeholder="14/03/2019">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-4">Jam Mulai</label>
                                        <div class="col-md-8">
                                                <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-left col-md-4">Jam Selesai</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <h4 class="box-title">C. KLASIFIKASI PEKERJAAN</h4>
                        <hr class="mt-2 mb-3">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <?php foreach ($klasifikasi_kerja as $klasifikasi): ?>
                                            <div class="custom-control custom-checkbox col-lg-4 col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" value="<?php echo $klasifikasi['kode_klasifikasi_kerja'] ?>">
                                                <label class="custom-control-label" for="customCheck2"><?php echo $klasifikasi['nama_klasifikasi_kerja'] ?></label>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>

                        <h4 class="box-title"> D. PROSEDUR PEKERJAANYANG TELAH DIJELASKAN KEPADA PEKERJA</h4>
                        <hr class="mt-2 mb-3">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                    <?php foreach ($prosedur_kerja as $prosedur_kerja): ?>
                                            <div class="custom-control custom-checkbox col-lg-4 col-md-4">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" value="<?php echo $prosedur_kerja['kode_prosedur_kerja'] ?>">
                                                <label class="custom-control-label" for="customCheck2"><?php echo $prosedur_kerja['nama_prosedur_kerja'] ?></label>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        <h4 class="box-title">E. LAMPIRAN IZIN KERJA (WAJIB DILAMPIRKAN)</h4>
                        <hr class="mt-2 mb-3">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                    <?php foreach ($lampiran_izin_kerja as $lampiran_izin_kerja): ?>
                                        <div class="custom-control custom-checkbox col-lg-4 col-md-4">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" value="<?php echo $lampiran_izin_kerja['kode_lampiran_izin_kerja'] ?>">
                                            <label class="custom-control-label" for="customCheck2"><?php echo $lampiran_izin_kerja['nama_lampiran_izin_kerja'] ?></label>
                                        </div>
                                    <?php endforeach ?>
                                    </div>
                                </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->