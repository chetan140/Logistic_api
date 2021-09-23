<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/user/images/logo/logo.png">
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
        <section class="apply-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>

                    <div class="col-sm-6">
                        <div class="apply-form">
                             <form  method="post" action="<?php
echo base_url('admin/insert_apply    ');
?>">
                                <h3> APPLY ONLINE </h3>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="email">First Name </label>
                                      <input type="text" class="form-control" id="email" placeholder="Enter name" name="fname" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="email">Last Name </label>
                                      <input type="text" class="form-control" id="email" placeholder="Enter name" name="lname" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                      <label for="email">Contact</label>
                                     <input type="text" minlength="10" maxlength="10" onkeypress="return isNumber(event)"  class="form-control" id="pwd" placeholder="Enter your contact number"  name="number" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                      <label for="email"> select Course  </label>
                                        <select name="course" class="form-control"  required>
                                            <option>ESE</option>
                                            <option>GATE</option>
                                            <option>SSC</option>
                                            <option>VYAPAM</option>
                                            <option>BANKING</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-btn">
                                   <center> <button type="submit" class="btn btn-default">Submit</button> </center>
                                </div>
                            </form>
                        </div>
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