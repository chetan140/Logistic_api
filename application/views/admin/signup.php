<!DOCTYPE html>

<html dir="ltr">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

    <title>Logistic website</title>



    <link href="dist/css/style.min.css" rel="stylesheet">

   

</head>



<body>

    <div class="main-wrapper">

        <!-- ============================================================== -->

        <!-- Preloader - style you can find in spinners.css -->

        <!-- ============================================================== -->

        <div class="preloader">

            <div class="lds-ripple">

                <div class="lds-pos"></div>

                <div class="lds-pos"></div>

            </div>

        </div>

        <!-- ============================================================== -->

        <!-- Preloader - style you can find in spinners.css -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Login box.scss -->

        <!-- ============================================================== -->

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(assets/images/big/auth-bg.jpg) no-repeat center center;">

            <div class="auth-box">

                <div id="loginform">

                    <div class="logo">

                        <span class="db"><img src="assets/images/logo-icon.png" alt="logo" /></span>

                        <h5 class="font-medium m-b-20">Sign In to User Panel</h5>

                    </div>

                    <!-- Form -->

                    <div class="row">

                        <div class="col-12">

                            <form class="form-horizontal m-t-20" id="loginform" action="https://wrappixel.com/demos/admin-templates/nice-admin/html/ltr/index.html">

                                <div class="input-group mb-3">

                                  

                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">

                                </div>

                                <div class="input-group mb-3">

                                    

                                    <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">

                                </div>



                                <div class="input-group mb-3">

                                    

                                    <input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Password" aria-describedby="basic-addon1">

                                </div>



                                <div class="input-group mb-3">

                                    

                                    <input type="text" class="form-control form-control-lg" placeholder="Contact" aria-label="Password" aria-describedby="basic-addon1">

                                </div>



                                <div class="input-group mb-3">

                                    

                                    <input type="text" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">

                                </div>



                                 <div class="input-group mb-3">

                                    

                                    <input type="text" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1">

                                </div>

                               

                                <div class="form-group text-center">

                                    <div class="col-xs-12 p-b-20">

                                        <button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>

                                    </div>

                                </div>

                              

                              

                            </form>

                        </div>

                    </div>

                </div>

                <div id="recoverform">

                    <div class="logo">

                        <span class="db"><img src="assets/images/logo-icon.png" alt="logo" /></span>

                        <h5 class="font-medium m-b-20">Recover Password</h5>

                        <span>Enter your Email and instructions will be sent to you!</span>

                    </div>

                    <div class="row m-t-20">

                        <!-- Form -->

                        <form class="col-12" action="https://wrappixel.com/demos/admin-templates/nice-admin/html/ltr/index.html">

                            <!-- email -->

                            <div class="form-group row">

                                <div class="col-12">

                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Username">

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

        <!-- ============================================================== -->

        <!-- Login box.scss -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Page wrapper scss in scafholding.scss -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Page wrapper scss in scafholding.scss -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Right Sidebar -->

        <!-- ============================================================== -->

        <!-- ============================================================== -->

        <!-- Right Sidebar -->

        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->

    <!-- All Required js -->

    <!-- ============================================================== -->

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->

    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>

    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- ============================================================== -->

    <!-- This page plugin js -->

    <!-- ============================================================== -->

    <script>

    $('[data-toggle="tooltip"]').tooltip();

    $(".preloader").fadeOut();

    // ============================================================== 

    // Login and Recover Password 

    // ============================================================== 

    $('#to-recover').on("click", function() {

        $("#loginform").slideUp();

        $("#recoverform").fadeIn();

    });

    </script>

</body>





<!-- Mirrored from wrappixel.com/demos/admin-templates/nice-admin/html/ltr/authentication-login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Sep 2018 05:09:43 GMT -->

</html>