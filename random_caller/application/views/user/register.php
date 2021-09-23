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
    <title>Navigate</title>

   <?php include('include/head.php')?> 
</head>

<body>

    <?php include('include/header2.php')?> 
<div  class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <?php
        if($this->session->flashdata('message')){ ?>
            <script type="text/javascript">
                 swal({
                     title: "Success!",
                     text: "Product add To cart Successfully",
                     icon: "success",
                     timer: 2000
                     });
            </script>
        <?php }?>
    </div>
</div>
</div>
    <section class="regi-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>

                <div class="col-sm-8">
                    <div class="form">
                         <form  method="post" action="<?php
echo base_url('admin/insert_register    ');
?>">
                            <center> <h4 class="mbt">REGISTRATION-FORM</h4> </center>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">First Name</label>
                                    <input type="fname" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="pwd">Last Name</label>
                                    <input type="text" class="form-control" id="pwd" placeholder="Enter last name" name="lname" required>
                                </div>
                            </div>

                            
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="pwd">Contact </label>
                                    <input type="text" minlength="10" maxlength="10" onkeypress="return isNumber(event)"  class="form-control" id="pwd" placeholder="Enter your contact number"  name="number" required>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">College Name </label>
                                    <input type="text" class="form-control" id="name" name="cname" required>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="br">College Branch</label>
                                    <input type="text"  class="form-control" id="br" name="cbranch" required>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="course" required>Select Course </label>
                                    <select name="subject" class="form-control">
                                        <option value="MPPSC" >MPPSC</option>
                                        <option value="Banking">Banking</option>
                                        <option value="SSC">SSC</option>
                                        <option value="VYAPAM">VYAPAM</option>
                                        <option value="GATE">GATE</option>
                                    </select>
                                </div>
                            </div>                           
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div> 
                        </form>
                    </div>
                </div>
                <div class="col-sm-2">
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