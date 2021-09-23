<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/user/images//logo/logo.png">
    <title>Navigate-indore</title>

   <?php include('include/head.php')?> 
</head>

<body>

<?php include('include/header2.php')?>


    <div class="center-indore">
        <h3>INDORE</h3>
    </div>
<div  class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <?php
        if($this->session->flashdata('message')){ ?>
            <script type="text/javascript">
                 swal({
                     title: "Success!",
                     text: "Your Enquiry Send Successfully",
                     icon: "success",
                     timer: 3000
                     });
            </script>
        <?php }?>
    </div>
</div>
</div>
    <section class="r-center">
        <div class="container">
            <div class="r-centers">
                <div class="row">
                    <div class="row-e">
                        <div class="col-sm-4">
                            <div class="r-branch">
                                <p class="r-para"><i class="fa fa-map-marker"></i>
                                   <b> Indore Branch :- </b><br>
                                    211, 220, 227 Veda Business Park 
                                    Near Apple Hospital Bhawarkua Square
                                    Indore - 452001  </p>
                                </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="r-branch">
                                <ul class="r-icon">
                                    <p class="phoner">Phone :-</p>
                                    <li><a class="a-indore" href="javascript:void(0);"><i class="fa fa-whatsapp"></i> +91 7869349004</a></li>
                                    <li><a  class="a-indore" href="javascript:void(0);"><i class="fa fa-phone">  +91 8770611528 </i>
                                    </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="r-branch">
                                <!-- <div class="r-contact">
                                    <h5> E-Mail </h5>
                                </div> -->
                                    <ul class="r-icon">
                                        <p class="email-r">Email :-</p>
                                        <li><a class="a-indore" href="javascript:void(0);"><i class="fa fa-envelope"></i>  navigatewithus2gmail.com</a></li>
                                       <!--  <li><a href="#"><i class="fa fa-Instagram"></i>@navigate.indore</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="r-centerform">
                                <div class="col-sm-4">
                                    <div class="r-frms">
                                        <div class="rr-fore">
                                            <form  method="post" action="<?php
echo base_url('admin/insert_contact');
?>">
                                                <div class="r-fore">
                                                    <h5> Have a questions? </h5>
                                                </div>

                                                <div class="r-do text-center">
                                                    <p>For any further queus and doubts kindly fill in the details given below and hit send button. You will get call back in 24 hours </p>
                                                </div>

                                                 

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="r-labels" for="names"> Enter your Name </label>
                                                        <input type="text" class="form-control" id="names" placeholder="enter your name" name="name" required>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="r-labels" for="names"> Enter your Phone no. : </label>
                                                        <input class="form-control" class="textfield" id="extra7" onkeypress="return isNumber(event)" placeholder="enter your phone" name="number" maxlength="10"  minlength="10" >
                                                    </div>
                                                </div>  

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="r-labels" for="names"> Enter your email : </label>
                                                        <input type="email" class="form-control" id="names" placeholder="enter your email" name="email" required>
                                                    </div>
                                                </div><br>

                                                 <div class="col-sm-12">
                                                    <div class="form-group">
                                                         <label class="r-labels" for="names"> Enter your City : </label>
                                                     <select name="city" class="form-control" id="cars">
  <option value="Indore">Indore</option>
  <option value="Bhopal">Bhopal</option>
  <option value="Tikamgarah">Tikamgarah</option>
 
</select>
                                                    </div>
                                                </div><br>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                      <label class="r-labels" for="names"> Enter your Message : </label>
                                                        <textarea class="form-control" id="r-textarea" cols="44" name="message" rows="2" required></textarea>
                                                    </div>
                                                </div> 

                                                 
                                                <input class="btn btn-warning center" type="submit" name="submit" value="Send Message" style="margin-left: 100px;"> <br><br>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <div class="center-maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.9301850651536!2d75.86456541443621!3d22.693642734237105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fce4a2356c1d%3A0x5be026a0aaf2ed4!2sNavigate%20Institute%20Indore!5e0!3m2!1sen!2sin!4v1609930393652!5m2!1sen!2sin" frameborder="0" style="border:0;width: 100%;height: 542px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </section>







    <?php include('include/footer.php')?>
<script type="text/javascript">
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>


</body>
</html>

