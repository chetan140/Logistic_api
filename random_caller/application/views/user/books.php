<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/user/images/logo/logo.png">
    <title>Navigate</title>

    <?php include('include/head.php')?> 
</head>

<body>

    <?php include('include/header2.php')?> 


   <section class="r-gallery">
    <div class="container">
        <div class="r-gale">
            <h2>BOOKS</h2>
        </div>
            <div class="row" style="margin-top: 30px;">
<?php if (!empty($book)):  $i=0; foreach ($book as $book_data): ?>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header" style="">
                           <?php echo "<img style='width: 100%; height: 350px;'   src= ".base_url().'newimage/'.$book_data->image.">";  ?>
                             <a href="<?= base_url()?>newimage/<?= $book_data->image2 ?>" class="btn btn-warning" style='width: 100%;' download>Download PDF</a>
                        </div>

                     
                    </div>
                </div>
<?php $i++; endforeach; endif; ?>
             
            </div>
        </div>
    </section>
    
    
    <?php include('include/footer.php')?>

</body>
</html>

