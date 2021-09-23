<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/user/images//logo/logo.png">
    <title>Hand Written Notes</title>

  <?php include('include/head.php')?> 
</head>

<body>

    <?php include('include/header2.php')?> 

    

        <section class="r-sec1">
            <div class="container">

                <div class="heading">
                    <h3>Hand Written Notes</h3>
                </div>
                <div class="row">


            <?php if (!empty($notes)):  $i=0; foreach ($notes as $notes_data): ?>
                   <div class="col-sm-4">
                        <div class="r-note">
                            <?php echo "<img style='width: 100%; height: 350px;'   src= ".base_url().'newimage/'.$notes_data->image.">";  ?>
                            <a href="<?= base_url()?>newimage/<?= $notes_data->image2 ?>" class="btn btn-warning" style='width: 100%;' download>Download PDF</a>
                        </div>
                    </div>
<?php $i++; endforeach; endif; ?>
                   
                    </div>
                </div>
            </div>
        </section>

        <?php include('include/footer.php')?>

</body>
</html>