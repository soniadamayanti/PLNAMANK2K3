
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
                    <div class="profile-img"> <img src="<?php echo site_url(); ?>assets/arsip/ttd/<?php echo $this->session->userdata('ttd') ?>" alt="user" /> </div>
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
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-bookmark-remove"></i><span class="hide-menu">Pembatalan Pekerjaan</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>rencana" aria-expanded="false" ><i class="mdi mdi-book"></i><span class="hide-menu">Rencana Kerja </span></a>
                        </li>
                        <li>
                            <a class="" href="<?php echo base_url() ?>laporan" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Rekap Bulanan</span></a>
                        </li>
                        <li>
                            <a class="" href="<?php echo base_url() ?>laporan/pencapaian" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Pencapaian Kinerja</span></a>
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

                