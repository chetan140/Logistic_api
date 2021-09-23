<!DOCTYPE html>
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

    <?php include('include/header.php')?> 

    <section class="r-course">
        <div class="container">
            <div class="r-heading">
                <h3>TOP COURSES </h3>
            </div>
            <div class="container">
                <div class="r-conts">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="imf" style="background-image: url(<?= base_url(); ?>assets/user/images//book/bg.jpg);height: 179px;">
                                    <div class="r-forms">
                                        <h3>ssc</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="imf" style="background-image: url(<?= base_url(); ?>assets/user/images//book/bg.jpg);height: 179px;">
                                </div>
                                <div class="r-tre">
                                    <h3>bank po</h3>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="imf" style="background-image: url(<?= base_url(); ?>assets/user/images//book/bg.jpg);height: 179px;">
                                </div>
                                <div class="r-tre">
                                    <h3>kd-tech</h3>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="imf" style="background-image: url(<?= base_url(); ?>assets/user/images//book/bg.jpg);height: 179px;">
                                </div>
                                <div class="r-tre">
                                    <h3>meditech</h3>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="imf" style="background-image: url(<?= base_url(); ?>assets/user/images//book/bg.jpg);height: 179px;">
                                </div>
                                <div class="r-tre">
                                    <h3> defense <br> brigade</h3>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="imf" style="background-image: url(<?= base_url(); ?>assets/user/images//book/bg.jpg);height: 179px;">
                                    <div class="r-forms">
                                        <h3> kd-law </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="r-fm">
                        <div class="col-sm-4">
                            <div class="rr-fore">
                                <form action="action_page.php">
                                    <div class="r-fore">
                                        <h5> have a questions? </h5>
                                    </div>

                                    <div class="r-do text-center">
                                        <p>For any further queus and doubts kindly fill in the details given below and hit send button. You will get call backl in 24 hours </p>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="r-labels" for="names"> Enter your Name </label>
                                            <input type="text" class="form-control" id="names" placeholder="enter your name" name="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="r-labels" for="names"> Enter your Phone no. : </label>
                                            <input type="text" class="form-control" id="names" placeholder="enter your phone" name="">
                                        </div>
                                    </div>  

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="r-labels" for="names"> Enter your email : </label>
                                            <input type="text" class="form-control" id="names" placeholder="enter your email" name="">
                                        </div>
                                    </div><br>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label  class="r-labels"for="names"> select your course </label>
                                            <select class="form-control">
                                                <option>BBA</option>
                                                <option>BA</option>
                                                <option>B.SC</option>
                                                <option>M.SC</option>
                                            </select>
                                        </div>
                                    </div>  

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label  class="r-labels" for="text">Captcha </label>
                                            <input type="text" class="form-control" id="text" placeholder="Answer" name="">
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-warning center">Send Message</button><br>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include('include/footer.php')?>

</body>
</html>