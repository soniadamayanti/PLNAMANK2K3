<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block">
                    <h4 class="card-title">Gardu Induk</h4>
                    <div class="ml-auto">
                        <?php 
                        $kode_divisi = $this->session->userdata('kode_divisi');
                        if ( $kode_divisi == '1' ) {
                            echo '
                            <button class="btn float-right hidden-sm-down btn-success" data-toggle="modal"  data-target="#ModalTambahGardu"><i class="mdi mdi-plus-circle"></i> Tambah Gardu Induk</button>';
                        }else {
                            echo '';
                        }
                         ?>
                    </div>
                </div>
                <h6 class="card-subtitle"></h6>
                <hr>
                <div class="table-responsive m-t-40">
                    <table id="table_arsip_gardu_induk" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Gardu Induk</th>
                                <th>Tanggal</th>
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

                <div id="ModalTambahGardu" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Tambah Gardu Induk</h4>
                                <button type="button" class="close" id="btnCancelGarduInduk" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" >Nama Gardu</label>
                                            <input type="text" class="form-control" id="a_kode_gardu" hidden>
                                            <input type="text" class="form-control" id="a_gardu_induk">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success waves-effect" id="btnTambahGarduInduk" status="insert">Simpan</button>
                                <button type="button" class="btn btn-info waves-effect" id="btnCancelGarduInduk">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
</div>