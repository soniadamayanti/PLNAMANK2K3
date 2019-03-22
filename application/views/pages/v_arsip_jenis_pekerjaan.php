<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block">
                    <h4 class="card-title">Arsip Jenis Pekerjaan</h4>
                    <div class="ml-auto">
                        <?php 
                        $kode_divisi = $this->session->userdata('kode_divisi');
                        if ( $kode_divisi == '2' ) {
                            echo '
                            <button class="btn float-right hidden-sm-down btn-success" data-toggle="modal"  data-target="#ModalJenisPekerjaan"><i class="mdi mdi-plus-circle"></i> Tambah Jenis Pekerjaan</button>';
                        }else {
                            echo '';
                        }
                         ?>
                    </div>
                </div>
                <h6 class="card-subtitle">5 Jenis Pekerjaan </h6>
                <hr>
                <div class="table-responsive m-t-40">
                    <table id="table_arsip_jenis_pekerjaan" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Jenis Pekerjaan</th>
                                <th>HIRARC</th>
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

</div>