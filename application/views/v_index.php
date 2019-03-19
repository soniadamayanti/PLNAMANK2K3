<!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-inverse">
                            <div class="box bg-primary text-center">
                                <h1 class="font-light text-white">1</h1>
                                <h6 class="text-white">Pending</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-info card-info">
                            <div class="box text-center">
                                <h1 class="font-light text-white">0</h1>
                                <h6 class="text-white">Berjalan</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h1 class="font-light text-white">10</h1>
                                <h6 class="text-white">Selesai</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h1 class="font-light text-white">2</h1>
                                <h6 class="text-white">Di Tolak</h6>
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
                                    <div class="col-6 align-self-center display-6 text-info text-right">1</div>
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
                                                <i class="fa fa-circle mr-1 <?php echo ($data['kode_jenis_pekerjaan'] == '')? 'text-secondary' : 'text-success' ?>"></i>
                                                <i class="fa fa-circle mr-1 <?php echo ($data['kode_line'] == '')? 'text-secondary' : 'text-success' ?>"></i>
                                                <i class="fa fa-circle mr-1 text-secondary"></i>
                                                <i class="fa fa-circle mr-1 text-secondary"></i>
                                                <i class="fa fa-circle mr-1 text-secondary"></i>
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
                                                ?></td>
                                        
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
                                <!-- Comment Row -->
                                <?php 
                                $i =1;
                                foreach ($history_project as $his): ?>
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="<?php echo site_url(); ?>assets/images/users/2.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text active w-100">
                                        <h5><?php echo $his['kode_user'] ?></h5>
                                        <b class="mb-1"><?php echo $his['kode_project'] ?></b>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right"><?php echo substr($his['tgl'], 0,10) ?></span>
                                                <?php 
                                                if( $his['type'] == 'send'){
                                                    echo '
                                                    <span class="label label-light-info">
                                                    Dikirim
                                                    </span>';
                                                }elseif($his['type'] == 'pending'){
                                                    echo '
                                                    <span class="label label-light-primary">
                                                    Menunggu Approval
                                                    </span>';
                                                }elseif($his['type'] == 'approve'){
                                                    echo '
                                                    <span class="label label-light-success">
                                                    Disetujui
                                                    </span>';
                                                }
                                                 ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>  
                                <?php 
                                $i++;
                                endforeach ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->