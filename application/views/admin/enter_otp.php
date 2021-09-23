<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/assets/admin/assets/images/favicon.png">
    <title>Logistic Login</title>

    <link href="<?= base_url(); ?>/assets/admin/dist/css/style.min.css" rel="stylesheet">
   
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url(); ?>/assets/admin/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="<?= base_url(); ?>/assets/admin/assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Enter Otp</h5>
                        <span>Enter Otp That Has Been Sent On Your Email!</span>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <?php if ($this->session->flashdata('msg')){ ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('msg'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }elseif($this->session->flashdata('error_otp')){  ?>
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('error_otp'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>            <form class="form-horizontal m-t-20" method="post" id="loginform" action="<?= base_url("Admin/otp_controller") ?>">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter 4 Digit OTP" name="otp" minlength="4" maxlength="4" aria-label="Username" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  aria-describedby="basic-addon1">
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg btn-warning" type="submit">Enter Otp</button>
                                    </div>
                                </div>
 <div class="form-group m-b-0 m-t-10">
                                    <div class="col-sm-12 text-center">
                                        Wanna Go To The Login Page? <a href="<?= base_url("Admin/login"); ?>" class="text-info m-l-5"><b>Sign In</b></a>
                                    </div>
                                </div>
                                    
                            </form>
                        </div>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="<?= base_url(); ?>/assets/admin/assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" method="post" action="<?= base_url("Admin/forget_controller"); ?>">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" name="email" placeholder="Username">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="<?= base_url(); ?>/assets/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url(); ?>/assets/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    </script>
</body>
</html>