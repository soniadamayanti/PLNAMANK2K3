<?php
$this->load->view('parts/header');
$this->load->view('parts/menu');
?>
<div class="col-md-6 col-4 align-self-center">
        <?php echo anchor('Index/sop','<i class="mdi mdi-plus-circle"></i> Buat SOP Pemadaman','class="btn float-right hidden-sm-down btn-success"'); ?>
        <div class="dropdown float-right mr-2 hidden-sm-down">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2019 </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2019</a> <a class="dropdown-item" href="#">Maret     2019</a> <a class="dropdown-item" href="#">Maret 2019</a> </div>
        </div>
    </div>
</div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-inverse">
                            <div class="box bg-primary text-center">
                                <h1 class="font-light text-white">1 </h1>
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
                                            <th>TANGGAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="txt-oflo">P.LAMPEGAN s.d REC.BLK</td>
                                            <td>
                                                <i class="fa fa-circle mr-1 text-success"></i>
                                                <i class="fa fa-circle mr-1 text-success"></i>
                                                <i class="fa fa-circle mr-1 text-success"></i>
                                                <i class="fa fa-circle mr-1 text-success"></i>
                                                <i class="fa fa-circle mr-1 text-success"></i>
                                            </td>
                                            <td class="txt-oflo">
                                            <span class="label label-light-info">Pending</span></td>
                                            <td class="txt-oflo">April 18, 2019</td>
                                        </tr>
                                        
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
                                <div class="d-flex flex-row comment-row active">
                                    <div class="p-2"><span class="round"><img src="<?php echo site_url(); ?>assets/images/users/2.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text active w-100">
                                        <h5>Ainul Yaqin</h5>
                                        <b class="mb-1">P.LAMPEGAN s.d REC.BLK</b>
                                        <p class="mb-1">Menunggu Persetujuan SPV. Teknik.</p>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-info">Pending</span>
                                            <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row ">
                                    <div class="p-2"><span class="round"><img src="<?php echo site_url(); ?>assets/images/users/2.jpg" alt="user" width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>Ainul Yaqin</h5>
                                        <b class="mb-1">P.LAMPEGAN s.d REC.BLK</b>
                                        <p class="mb-1">SOP Pemadaman & Penyulangan P.LAMPEGAN s.d REC.BLK telah disetujui & sedang di proses<P></P></p>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-light-success">Approved</span>
                                            <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
            </div>
<?php
$this->load->view('parts/footer');
?>