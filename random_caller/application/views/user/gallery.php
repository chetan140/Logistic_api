<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/user/images/logo/logo.png">
    <title>Navigate</title>

    <?php include('include/head.php')?> 

    
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

<style type="text/css">

.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 5px;
    
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
  /*  position: absolute;*/
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    /*background-color: rgba(46, 132, 206, 0.7);*/
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

h4 {
    color: #fff;
}

/*.baguetteBox-button {
    background-color: transparent !important;
}*/

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
</style>
</head>

<body>


<?php include('include/header2.php')?> 


<div class="container gallery-container">    
    <div class="tz-gallery">
        <div class="row">

            <?php if (!empty($data)):  $i=0; foreach ($data as $gallery_data): ?>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="<?= base_url();?>newimage/<?= $gallery_data->image ?>"  height="250px">
                   <?php echo "<img style='width: 100%; height: 350px;' src= ".base_url().'newimage/'.$gallery_data->image.">";  ?>
                    <div class="r-title">
                        <center> <h4><?= $gallery_data->tittle?></h4> </center>
                    </div>
                </a>
            </div>
<?php $i++; endforeach; endif; ?>

            
        </div>
    </div>
</div>

    
<?php include('include/footer.php')?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>