<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block">
                    <h4 class="card-title">Penyulang</h4>
                    <div class="ml-auto">

                        <?php 
                        $kode_divisi = $this->session->userdata('kode_divisi');
                        if ( $kode_divisi == '1' ) {
                            echo '
                            <button class="btn float-right hidden-sm-down btn-success" data-toggle="modal"  data-target="#ModalTambahPenyulang"><i class="mdi mdi-plus-circle"></i> Tambah Penyulang</button>';
                        }else {
                            echo '';
                        }
                         ?>
                    </div>
                </div>
                <h6 class="card-subtitle">5 SLD </h6>
                <hr>
                <div class="table-responsive m-t-40">
                    <table id="table_arsip_sld" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Gardu Induk</th>
                                <th>Penyulang</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

        <div id="ModalTambahPenyulang" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Tambah Penyulang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" >Gardu Induk</label>
                                    <select class="form-control custom-select" tabindex="1" id="kode_jenis_pekerjaan">
                                            <option 
                                            value="">CIANJUR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" >Penyulang</label>
                                    <input type="text" class="form-control" id="nama_sld">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="input-file-now">Upload SLD</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success waves-effect" id="btnTambahPerusahaanPelaksana">Simpan</button>
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

</div>