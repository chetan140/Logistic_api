
<!doctype html>
<html lang="en">

<head>
<title>Navigate Forgot Password</title>
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
                      <img style="width: 250px;" src=" <?= base_url(); ?>assets/user/images//logo/navi-logo.png" alt="Lucid Logo" class="img-responsive logo">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Recover my password</p>
                        </div>
                        <div class="body">
                            <p>Please enter your email address below to receive instructions for resetting password.</p>

                        
                                </div>    
                      
                            <form class="form-auth-small" action="<?= base_url().'admin/forget_controller' ?>" method="POST">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" id="signup-password" placeholder="Email" name="email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
                                <div class="bottom">
                                    <span class="helper-text">Know your password? <a href="<?php echo base_url('admin/login'); ?>">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>
</html>

