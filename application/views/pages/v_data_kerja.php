
<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex no-block">
                    <h4 class="card-title">Selamat Datang Riky</h4>
                    <div class="ml-auto">
                        <select class="custom-select">
                            <option selected="">Maret   </option>
                            <option value="1">February</option>
                            <option value="2">May</option>
                            <option value="3">April</option>
                        </select>
                    </div>
                </div>
                <h6 class="card-subtitle">Data Projectmu </h6>
            </div>
            <div class="card-body bg-light">
                <div class="row">
                    <div class="col-6">
                        <h2 class="mb-0">Maret   2019</h2>
                        <h4 class="font-light mt-0">Project SOP Pemadaman</h4></div>
                    <div class="col-6 align-self-center display-6 text-info text-right"><?php echo $jml_project ?></div>
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
                                if ($this->session->userdata('kode_divisi') == 1) {
                                    if ($data['status'] == 'new') {
                                        echo '<button class="btn btn-info" uniqid="'.$data['uniqid'].'" id="btnTolak">Kirim & TTD</button>';  
                                    }else{
                                        echo anchor('#','Pending','class="btn btn-secondary disabled"');  
                                    }
                                }else{
                                    echo '<button class="btn btn-danger" uniqid="'.$data['uniqid'].'" id="btnTolak">Tolak</button>';   
                                    echo '<button class="btn btn-info" uniqid="'.$data['uniqid'].'" id="btnSetuju">Setuju & TTD</button>'; 
                                }
                                   ?>
                                
                            </td>
                        </tr>    
                        <?php 
                        $i++;
                        endforeach ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- ============================================================== -->
<!-- End PAge Content