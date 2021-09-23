<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 04:45:31 GMT -->
<head>
<title>Navigate Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/main.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/color_skins.css">
</head>

<body class="theme-orange">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                         <img style="width: 250px;" src="<?= base_url(); ?>assets/user/images//logo/navi-logo.png" alt="Lucid Logo" class="img-responsive logo">
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <center><span style="color: red;"><b><?= $this->session->flashdata('message');?></b></span></center>
                        <div class="body">
                            <form class="form-auth-small" method="POST" action="<?= base_url().'admin/login_controller' ?>" >
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Username</label>
                                    <input type="text" class="form-control" id="signin-email"  placeholder="Email" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password"  placeholder="Password" name="password">
                                </div>
                                
                                
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                                <div class="bottom">    
                                   
                                </div>
                            </form>

                            <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="<?php echo base_url('admin/forget_password'); ?>">Forgot password?</a></span>
                                   
                                </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/lucid/hr/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jul 2020 04:45:31 GMT -->
</html>
