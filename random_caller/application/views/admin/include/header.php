<!doctype html>
<html lang="en">

<head>
<title>Navigate Dashboard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/sweetalert/sweetalert.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/main.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/color_skins.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src=" <?= base_url(); ?>assets/user/images//logo/navi-logo.png" alt="Lucid Logo" class="img-responsive logo"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a  href="<?php echo base_url('admin/index');?>"><img style="width: 130px!important;height: 70px!important;" src=" <?= base_url(); ?>assets/user/images//logo/navi-logo.png" alt="Lucid Logo" class="img-responsive logo"></a>                
            </div>
            
          
        </div>
    </nav>
