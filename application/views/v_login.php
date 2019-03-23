<!DOCTYPE html>
<html lang="en" class="bg-login">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>assets/images/favicon.png">
    <title>Login | AMANK2K3</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo site_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo site_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo site_url(); ?>assets/css/login.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo site_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<!--     <header>
         <div class="head">
            <a href="index"><img src="<?php echo site_url(); ?>assets/images/logo.png" class="img-responsive logo" url="www.amank2k3.web.id" alt='Logo AMANK2K3'  title='AMANK2K3'></a>
         </div>
    </header> -->
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" >        
            <div class="login-box card">
                <div class="card-head">
                    <a href="index"><img src="<?php echo site_url(); ?>assets/images/logo.png" class="img-responsive logo" url="www.amank2k3.web.id" alt='Logo AMANK2K3'  title='AMANK2K3'></a>
                </div>
            <div class="card-body">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" id="username" required="" placeholder="Username"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" id="password" placeholder="Password"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary float-left pt-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div> <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i> Lupa pwd?</a> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="btnLogin">Log In</button>
                        </div>
                    </div>
                <form class="form-horizontal" id="recoverform" action="https://wrappixel.com/demos/admin-templates/monster-admin/main/index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Ganti Password</h3>
                            <p class="text-muted">
                              Masukkan Username & No Telp Anda dan Permohonan pengubahan password akan dikirimkan kepada Admin!
                            </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Username"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="No Telp"> </div>
                    </div>
                    <div class="form-group text-center mt-3">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo site_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo site_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo site_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo site_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo site_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.toast.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo site_url(); ?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo site_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript">
        $('#btnLogin').click(function(){
            var username = $('#username').val();
            var password = $('#password').val();
            var data = {
                username:username,
                password:password
            };
            $.ajax({
                url:'<?php echo base_url() ?>Login/login',
                type:'POST',
                data:data,
                success:function(data){
                    if (data ==1) {
                        window.location='<?php echo base_url(); ?>Index'
                    }else{
                        alert(data);
                    }
                }
            })
        });
    </script>
</body>

</html>