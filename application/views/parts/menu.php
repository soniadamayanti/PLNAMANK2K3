
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo site_url(); ?>assets/images/users/1.jpg" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo $this->session->userdata('nama_user') ?><span class="caret"></span></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a href="<?php echo base_url() ?>index" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</a>
                        </li>
                        <li>
                            <a class="has-arrow " href="<?php echo base_url() ?>rencana" aria-expanded="false" ><i class="mdi mdi-book"></i><span class="hide-menu">Rencana Kerja </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url() ?>rencana">Data Pekerjaan <span class="label label-rounded label-primary">1</span></a></li>
                                <li><a href="<?php echo base_url() ?>rencana/ditolak">Pekerjaan Ditolak <span class="label label-rounded label-warning">2</span></a></li>
                                <li><a href="<?php echo base_url() ?>rencana/dibatalkan">Pembatalan Pekerjaan</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Rekap Bulanan</span></a>
                        </li>
                        <li>
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Pencapaian Kinerja</span></a>
                        </li>
                        <li>
                            <a class="" href="<?php echo base_url() ?>rencana/selesai" aria-expanded="false"><i class="mdi mdi-checkbox-multiple-marked-outline"></i><span class="hide-menu">Penyelesaian Pekerjaan</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-archive"></i><span class="hide-menu">Arsip</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url() ?>arsip/gardu_induk">Gardu Induk</a></li>
                                <li><a href="<?php echo base_url() ?>arsip/penyulang">Penyulang</a></li>
                                <li><a href="<?php echo base_url() ?>arsip/gardu_distribusi">Gardu Distribusi</a></li>
                                <li><a href="<?php echo base_url() ?>arsip/sld">Single Line Diagram (SLD)</a></li>
                                <li><a href="<?php echo base_url() ?>arsip/jenis_pekerjaan">HIRARC</a></li>
                                <li><a href="<?php echo base_url() ?>arsip/jenis_pekerjaan">Jenis Pekerjaan</a></li>
                                <li><a href="<?php echo base_url() ?>arsip/perusahaan_pelaksana">Perusahaan Pelaksana Pekerjaan</a></li>
                                <li><a href="<?php echo base_url() ?>arsip/pelaksana_pekerjaan">Pelaksana Pekerjaan</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                    </ul>
                </nav>

                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <?php echo anchor('Login/logout','<i class="mdi mdi-power"></i>','class="link" data-toggle="tooltip" title="Logout"') ?>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor mb-0 mt-0"><?php 
                        echo $judul;
                         ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo anchor('Index','Home','class="breadcrumb-item"'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo anchor('Index/'.$this->uri->segment(2),strtoupper(str_replace('_', ' ', $this->uri->segment(2))),'class="breadcrumb-item active"'); ?></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <?php 
                        echo $new;
                         ?>
                        
                        <div class="dropdown float-right mr-2 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2019 </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2019</a> <a class="dropdown-item" href="#">Maret     2019</a> <a class="dropdown-item" href="#">Maret 2019</a> </div>
                        </div>
                    </div>
                </div>
                    
                <div id="BuatRencanaKerja" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Buat Rencana Kerja</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <?php echo anchor('Rencana/insert_project/Preventif','Preventif','class="btn btn-block btn-lg btn-info"') ?>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <?php echo anchor('Rencana/insert_project/Korektif','Korektif','class="btn btn-block btn-lg btn-success"') ?>
                                </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
