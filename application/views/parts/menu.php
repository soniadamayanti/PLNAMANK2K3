
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
                    <div class="profile-text"> <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Riky Japutra<span class="caret"></span></a>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="" href="<?php echo base_url() ?>index" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</a>
                        </li>
                        <li>
                            <a class="has-arrow " href="<?php echo base_url() ?>rencana" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Rencana Kerja </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url() ?>rencana">Data Pekerjaan <span class="label label-rounded label-primary">1</span></a></li>
                                <li><a href="rencana/tolak">Pekerjaan Ditolak <span class="label label-rounded label-warning">2</span></a></li>
                                <li><a href="app-chat.html">Pembatalan Pekerjaan</a></li>
                                <li><a href="app-chat.html">Pekerjaan Selesai</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Rekap Bulanan</span></a>
                        </li>
                        <li>
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Pencapaian Kinerja</span></a>
                        </li>
                        <li>
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-checkbox-multiple-marked-outline"></i><span class="hide-menu">Penyelesaian Pekerjaan</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-archive"></i><span class="hide-menu">Arsip</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="data-sop.html">Gardu Induk</a></li>
                                <li><a href="app-chat.html">Penyulang</a></li>
                                <li><a href="app-chat.html">Gardu Distribusi</a></li>
                                <li><a href="app-chat.html">Single Line Diagram (SLD)</a></li>
                                <li><a href="app-chat.html">HIRARC</a></li>
                                <li><a href="app-chat.html">Jenis Pekerjaan</a></li>
                                <li><a href="app-chat.html">Perusahaan Pelaksana Pekerjaan</a></li>
                                <li><a href="app-chat.html">Pelaksana Pekerjaan</a></li>
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
                <a href="#" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
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
                        <h3 class="text-themecolor mb-0 mt-0"><?php echo strtoupper($this->uri->segment(1)) ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo anchor('Index','Home','class="breadcrumb-item"'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo anchor('Index/'.$this->uri->segment(2),strtoupper($this->uri->segment(2)),'class="breadcrumb-item active"'); ?></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <button class="btn float-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Buat Rencana Kerja</button>
                        <div class="dropdown float-right mr-2 hidden-sm-down">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2019 </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2019</a> <a class="dropdown-item" href="#">Maret     2019</a> <a class="dropdown-item" href="#">Maret 2019</a> </div>
                        </div>
                    </div>
                </div>
                    