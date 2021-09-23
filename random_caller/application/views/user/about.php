
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="<?= base_url(); ?>assets/user/image/x-icon" href="<?= base_url(); ?>assets/user/images/logo/logo.png">
    <title>Navigate</title>

   <?php include('include/head.php')?> 

   <style type="text/css">
       @media screen and (max-width:1024px) {
  .my-list {
    margin-top: 130px;
   
  }
}
   </style>
</head>

<body>

    <?php include('include/header2.php')?> 

    <div class="cont">
        <div class="R-img">
            <img src="<?= base_url(); ?>assets/user/images/banner1.jpg" height="300px" width="100%">
            <div class="about-c">
                    <h2>ABOUT US</h2>
                </div>
            </div>
         <?php if (!empty($data)):  $i=0; foreach ($data as $about_data): ?>  
            <section class="rows">


                <div class="container">
                    <div class="about-content">
                        <div class="row"> 
                        
                            <div class="col-sm-6">
                                
                                    <div class="about-img">
                                         <?php echo "<img style='width: 100%; height: 250px;'   src= ".base_url().'newimage/'.$about_data->image.">";  ?>
                                    </div>
                                </div>
                
                                <div class="r-contenter" >
                             
                                    <div class="col-sm-6 my-list">
                                        <h4>ABOUT navigate</h4>
                                        <p class="r-con"><?= $about_data->about_contant ?>
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>


                <section class="rowss" style="margin-top: 100px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="r-navi">DIRECTOR'S MESSAGE</h4>
                                <p class="-con"><?= $about_data->director_contant ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="rows-cont">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="r-navi">WHY NAVIGATE</h4>
                                <p class="-con"><?= $about_data->why_navigate ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
<?php $i++; if($i>=4){break;} endforeach; endif; ?>

        <?php include('include/footer.php')?>

</body>
</html>