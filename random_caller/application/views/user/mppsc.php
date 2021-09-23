<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/user/images//logo/logo.png">
    <title>Navigate</title>

  <?php include('include/head.php')?> 
</head>

<body>

    <?php include('include/header2.php')?> 
       
       <div class="R-img">
            <img src="<?= base_url(); ?>assets/user/images//banner1.jpg" height="300px" width="100%">
        </div>

    <section class="r-mppsc">
            <div class="rrr-head">
                <a href="javascript:void(0);">Home/ <span class="r-span"><?= $data[0]->tittle ?></span></a>
                <h2><?= $data[0]->tittle ?></h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12">

                               
                            
                               <?= $data[0]->content ?>

                               
                            </div>
                        </div>
                    </div>

                        <div class="col-sm-4">
                            <h5 class="mpps ml-5">MPPSC</h5>
                            <ul class="mppsc-ad">
                                <li class="mppsc-li">
                                    Administration
                                </li>

                                <li class="col-sm-12">
                                    <div class="form-group">
                                        <label for="mp-name">Name*</label>
                                        <input type="text" class="form-control" id="mp-name" placeholder="enter your name" name="">
                                    </div>
                                </li>

                                <li class="col-sm-12">
                                    <div class="form-group">
                                        <label for="mp-name">Phone number*</label>
                                        <input type="text" class="form-control" id="mp-name" placeholder="enter your name" name="">
                                    </div>
                                </li>

                                <li class="col-sm-12">
                                    <div class="form-group">
                                        <label for="mp-name">Courses*</label>
                                        <select class="form-control">
                                            <option>---------select---------</option>
                                            <option>ESE</option>
                                            <option>GATE</option>
                                            <option>PSU'S</option>
                                            <option>SSC JE</option>
                                            <option>RRB-JE</option>
                                            <option>GOVT EXAM</option>
                                        </select>
                                    </div>
                                </li>

                                <li class="btun">
                                    <button type="button" class="btn btn-primary">Send Message</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

    <?php include('include/footer.php')?>

</body>
</html>
