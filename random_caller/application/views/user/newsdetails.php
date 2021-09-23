<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/user/images//logo/logo.png">
    <title>News & Details</title>

  <?php include('include/head.php')?> 
</head>

<body>

<?php include('include/header2.php')?>
    <div class="container blog-wrapper padding-lg">
        <div class="row">
            <div class="col-sm-8 blog-left">
                <ul class="blog-listing detail">
                    <li> 
                        <?php echo "<img class='img-responsive' style='height: 400px; width: 100%' class='img-responsive ml-5'   src= ".base_url().'newimage/'.$data[0]->image.">";  ?>
                        <h2><?= $data[0]->tittle ?></h2>
                        <!-- <ul class="post-detail">
                            <li><span class="icon-date-icon ico"></span><span class="bold">14 Feb</span> 2017</li>
                            <li>Posted By : <span class="bold">Julien Renvoye</span></li>
                            <li><span class="icon-chat-icon ico"></span><span class="bold">14</span> Comments</li>
                            <li><span class="label">Software</span></li>
                        </ul> -->
                        <p><?= $data[0]->content ?></p>
                    </li>
                </ul>
            </div>
            
            <div class="col-sm-4">
                <div class="blog-right">
                    <div class="category">
                        <h3>Category</h3>
                        <ul>
                            <?php if (!empty($news)):  $i=0; foreach ($news as $news_data): ?>
                            <li><a href="<?= base_url().'main/newsdetails/'.$news_data->id ?>"><?= $news_data->tittle ?></a></li>
                             <?php $i++;  endforeach; endif; ?>
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php')?>

</body>
</html>