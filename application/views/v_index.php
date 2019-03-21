<!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-inverse">
                            <div class="box bg-primary text-center">
                                <h1 class="font-light text-white"><?php echo $pending; ?></h1>
                                <h6 class="text-white">Pending</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-info card-info">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo $berjalan; ?></h1>
                                <h6 class="text-white">Berjalan</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo $selesai; ?></h1>
                                <h6 class="text-white">Selesai</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo $revisi; ?></h1>
                                <h6 class="text-white">Revisi</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-7">
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
                                    <div class="col-6 align-self-center display-6 text-info text-right"><?php echo $jml_project; ?></div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>PENYULANG</th>
                                            <th>APPROVAL</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $i =1;
                                        foreach ($data_project as $data): ?>
                                        <tr>

                                            <td class="text-center"><?php echo $i; ?></td>
                                            <td class="txt-oflo"><?php echo $data['kode_project'] ?>
                                                <br> <small>Tanggal : <?php echo substr($data['tgl_project'], 0, 10)  ?></small>
                                                
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
                                                    $kode = $data['kode_project'] ;
                                                    $sql = "SELECT * FROM tb_approval WHERE kode_project = '$kode' ORDER BY tgl DESC LIMIT 1";
                                                    $result = $this->db->query($sql);
                                                    foreach ($result->result() as $r) {
                                                        if( $r->type == 'new'){
                                                            echo '
                                                            <span class="label label-light-warning">
                                                            Belum Selesai
                                                            </span>';
                                                        }elseif($r->type == 'send'){
                                                            echo '
                                                            <span class="label label-light-primary">
                                                            Dikirim
                                                            </span>';
                                                        }elseif($r->type == 'pending'){
                                                            echo '
                                                            <span class="label label-light-primary">
                                                            Menunggu Approval
                                                            </span>';
                                                        }elseif($r->type == 'approve'){
                                                            echo '
                                                            <span class="label label-light-success">
                                                            Disetujui
                                                            </span>';
                                                        }
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
                    <!-- Column -->
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">History Approval</h4>
                                <h6 class="card-subtitle">24 new support ticket request generate</h6>
                            </div>
                            <div class="comment-widgets">
                                
                                <ul class="timelinemini">
                                    <li class="timelinemini-inverted">
                                        <div class="timelinemini-badge info"><?php echo $berkas_staff; ?></div>
                                        <div class="timelinemini-panel">
                                            <div class="timelinemini-heading">
                                                <h5 class="timelinemini-title"><b>Staff Teknisi ULP</b></h5>
                                                <small class="text-muted"><?php echo $berkas_staff; ?> Berkas Menunggu Approval</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timelinemini-inverted">
                                        <div class="timelinemini-badge info"><?php echo $berkas_k3; ?></div>
                                        <div class="timelinemini-panel">
                                            <div class="timelinemini-heading">
                                                <h5 class="timelinemini-title"><b>PPK3U ULP</b></h5>
                                                <small class="text-muted"><?php echo $berkas_k3; ?> Berkas Menunggu Approval</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timelinemini-inverted">
                                        <div class="timelinemini-badge info"><?php echo $berkas_spvulp; ?></div>
                                        <div class="timelinemini-panel">
                                            <div class="timelinemini-heading">
                                                <h5 class="timelinemini-title"><b>SPV. ULP</b></h5>
                                                <small class="text-muted"><?php echo $berkas_spvulp; ?> Berkas Menunggu Approval</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timelinemini-inverted">
                                        <div class="timelinemini-badge info"><?php echo $berkas_mulp; ?></div>
                                        <div class="timelinemini-panel">
                                            <div class="timelinemini-heading">
                                                <h5 class="timelinemini-title"><b>MULP</b></h5>
                                                <small class="text-muted"><?php echo $berkas_mulp; ?> Berkas Menunggu Approval</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timelinemini-inverted">
                                        <div class="timelinemini-badge info"><?php echo $berkas_harjar; ?></div>
                                        <div class="timelinemini-panel">
                                            <div class="timelinemini-heading">
                                                <h5 class="timelinemini-title"><b>SPV.HARJAR</b></h5>
                                                <small class="text-muted"><?php echo $berkas_harjar; ?> Berkas Menunggu Approval</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timelinemini-inverted">
                                        <div class="timelinemini-badge info"><?php echo $berkas_opoist; ?></div>
                                        <div class="timelinemini-panel">
                                            <div class="timelinemini-heading">
                                                <h5 class="timelinemini-title"><b>SPV.OPOIST</b></h5>
                                                <small class="text-muted"><?php echo $berkas_opoist; ?> Berkas Menunggu Approval</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timelinemini-inverted">
                                        <div class="timelinemini-badge info"><?php echo $berkas_mbjaringan; ?></div>
                                        <div class="timelinemini-panel">
                                            <div class="timelinemini-heading">
                                                <h5 class="timelinemini-title"><b>MB.JARINGAN</b></h5>
                                                <small class="text-muted"><?php echo $berkas_mbjaringan; ?> Berkas Menunggu Approval</small>
                                            </div>
                                        </div>
                                    </li>   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->