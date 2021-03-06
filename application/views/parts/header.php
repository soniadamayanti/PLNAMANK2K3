<?php
$kode_user =  $this->session->userdata('kode_user');
if (!isset($kode_user)) {
    redirect('Login');
}
 ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>assets/images/favicon.png">
    <title>AMANK2K3</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo site_url(); ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo site_url() ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.toast.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/dropify/dist/css/dropify.min.css">
    <!--This page css - Morris CSS -->
<link rel='stylesheet' href='https://cdn.oesmith.co.uk/morris-0.5.1.css'>
    <style type="text/css">
        a.disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo site_url(); ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo site_url(); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <img src="<?php echo site_url(); ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo site_url(); ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><img src="<?php echo site_url(); ?>assets/arsip/ttd/<?php echo $this->session->userdata('ttd') ?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo site_url(); ?>assets/arsip/ttd/<?php echo $this->session->userdata('ttd')  ?>"  alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php echo $this->session->userdata('nama_user') ?></h4>
                                                <p class="text-muted"><?php echo $this->session->userdata('nama_divisi') ?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Project</a></li>   
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                <?php echo anchor('Login/logout','<i class="fa fa-power-off"></i> Logout','class="link" data-toggle="tooltip" title="Logout"') ?>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>