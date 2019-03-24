
<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block"></h4>
                    <div class="ml-auto">
                        <select class="custom-select">
                            <option selected="">Maret   </option>
                            <option value="1">February</option>
                            <option value="2">May</option>
                            <option value="3">April</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover no-wrap">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>PENYULANG</th>
                            <th>FORM</th>
                            <th>STATUS</th>
                            <th>TANGGAL</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i =1;
                        foreach ($data_project as $data): ?>
                        <tr>
                            <td class="text-center"><?php echo $i ?></td>
                            <td class="txt-oflo">
                                <b><?php echo $data['kode_project'] ?></b><br>
                               
                                <!-- <small><?php echo $data['nama_sld'] ?><br><?php echo $data['nama_jenis_pekerjaan'] ?></small> -->
                            </td>
                            <td>
                                                <?php 
                                                    $kode = $data['kode_project'] ;
                                                    $sql = "SELECT s.*,u.nama_user,u.kode_divisi,d.nama_divisi FROM tb_status_project s INNER JOIN (tb_users u INNER JOIN tb_divisi d ON u.kode_divisi=d.kode_divisi) ON u.kode_user = s.kode_user WHERE kode_project = '$kode' ORDER BY kode_divisi ASC";
                                                    $result = $this->db->query($sql);
                                                    foreach ($result->result() as $r) {
                                                        echo '

                                                        <span class="mytooltip tooltip-effect-5">
                                                            <span class="tooltip-item">';
                                                            if ($r->status_project == 'approve') {
                                                                echo '<i class="fa fa-circle mr-1 text-success"></i>';
                                                            }elseif($r->status_project == 'pending') {
                                                                echo '<i class="fa fa-circle mr-1 text-secondary"></i>';
                                                            }elseif($r->status_project == 'denied') {
                                                                echo '<i class="fa fa-circle mr-1 text-warning"></i>';
                                                            }elseif($r->status_project == 'failed') {
                                                                echo '<i class="fa fa-circle mr-1 text-danger"></i>';
                                                            }
                                                            echo '
                                                            </span>
                                                            <span class="tooltip-content clearfix">
                                                              <span class="tooltip-text">'.$r->nama_user.'<br>('.$r->nama_divisi.')</span>
                                                            </span>
                                                        </span>
                                                        ';
                                                    }
                                                ?>
                            </td>
                            <td class="txt-oflo">
                                <?php
                                    if( $data['status'] == 'new'){
                                        echo '
                                        <span class="label label-light-warning">
                                        Belum Selesai
                                        </span>';
                                    }elseif($data['status'] == 'pending'){
                                        echo '
                                        <span class="label label-light-primary">
                                        Pending
                                        </span>';
                                    }elseif($data['status'] == 'final'){
                                        echo '
                                        <span class="label label-light-primary">
                                        Penyelesaian
                                        </span>';
                                    }elseif($data['status'] == 'success'){
                                        echo '
                                        <span class="label label-light-success">
                                        Selesai
                                        </span>';
                                    }elseif($data['status'] == 'revisi'){
                                        echo '
                                        <span class="label label-light-success">
                                        Revisi
                                        </span>';
                                    }elseif($data['status'] == 'cancel'){
                                        echo '
                                        <span class="label label-light-success">
                                        Dibatalkan
                                        </span>';
                                    }
                                ?>
                            </td>
                            <td class="txt-oflo"><?php echo $data['tgl_project'] ?></td>
                            <td class="txt-oflo">
                                <?php 
                                echo '<button class="btn btn-success" style="margin-bottom:10px;" uniqid="'.$data['uniqid'].'" id="btnReview">Lihat Data</button><br>';
                                if ($this->session->userdata('kode_divisi') == 1) {
                                    if ($data['status'] == 'denied') {
                                        echo anchor('Rencana/form/'.$data['uniqid'],'Edit','class="btn btn-warning"');  
                                    } 
                                    else{ 
                                        echo '';  
                                    }
                                }else{
                                    echo ''; 
                                }
                                   ?>
                                
                            </td>
                        </tr>    
                        <?php 
                        $i++;
                        endforeach ?>
                        
                    </tbody>
                </table>
                <div id="ModalTolak" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Tolak Rencana Kerja</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="control-label" >Keterangan</label>
                                    <textarea class="form-control"></textarea> 
                                </div>
                                <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <button class="btn btn-block btn-lg btn-warning" id="btnDenied">Revisi</button>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <button class="btn btn-block btn-lg btn-danger" id="btnFailed">Tolak</button>
                                </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
        </div>
    </div>
<!-- ============================================================== -->
<!-- End PAge Content