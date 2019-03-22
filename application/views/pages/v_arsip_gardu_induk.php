<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block">
                    <h4 class="card-title">Gardu Induk</h4>
                    <div class="ml-auto">
                        
                        <button class="btn float-right hidden-sm-down btn-success" data-toggle="modal"  data-target="#ModalTambahPerusahaan"><i class="mdi mdi-plus-circle"></i> Tambah Gardu Induk</button>
                    </div>
                </div>
                <h6 class="card-subtitle"></h6>
                <hr>
                <div class="table-responsive m-t-40">
                    <table id="table_arsip_gardu_induk" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gardu Induk</th>
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

                <div id="ModalTambahPerusahaan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Tambah Perusahaan Pelaksana</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" >Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="a_nama_perusahaan">
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