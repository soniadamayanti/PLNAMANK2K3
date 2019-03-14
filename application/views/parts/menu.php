
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
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</a>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Project SOP </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="data-sop.html">Data Project <span class="label label-rounded label-primary">1</span></a></li>
                                <li><a href="app-chat.html">Ditolak <span class="label label-rounded label-warning">2</span></a></li>
                                <li><a href="app-chat.html">Selesai</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="#" aria-expanded="false"><i class="mdi mdi-chart-timeline"></i><span class="hide-menu">Single Line Diagram</span></a>
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
                        <h3 class="text-themecolor mb-0 mt-0"><?php echo strtoupper($this->uri->segment(2)) ?></h3>
                        <ol class="breadcrumb">
                            <li><?php echo anchor('Index','Home','class="breadcrumb-item"'); ?></li>
                            <li><?php echo anchor('Index/'.$this->uri->segment(2),strtoupper($this->uri->segment(2)),'class="breadcrumb-item active"'); ?></li>
                        </ol>
                    </div>
                    