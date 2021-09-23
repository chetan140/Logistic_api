<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div id="loading">
        <div class="element">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
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
    <header>
        <div class="header-top">
            <div class="container clearfix">
                <ul class="follow-us hidden-xs">
                    <li class="yout"><a href="https://youtube.com/c/NaviGATEInstitute"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>

                    <li class="fb"><a href=" https://www.facebook.com/NavigateInstitute"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>

                    <li class="tele"><a href=" https://t.me/naviga12"><i class="fa fa-telegram"></i></a></li>
                    
                    <li class="ins"><a href=" https://instagram.com/navigateinstitute?igshid=usufamua7fy2"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                     <li class="tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
                <div class="right-block clearfix">
                    <ul class="top-nav hidden-xs">
                        <li><a href="tel:7869349004"> 7869349004 , 88819742 , 8770611528</a></li>
                        <li><a class="r-reg" href="<?php echo base_url('register');?>">Register</a></li>
                        <li><a class="blink" href="<?php echo base_url('applyonline');?>"><blink> Apply Online</blink></a></li>
                        <li><a href="<?php echo base_url('faq');?>">FAQs</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="container header-middle">
            <div class="row"> <span class="col-xs-6 col-sm-3"><a href="<?php echo base_url('index');?>"><img src="<?= base_url(); ?>assets/user/images//logo/navi-logo.png" class="img-responsive" alt=""></a></span>
                <div class="col-xs-6 col-sm-3"></div>
                <div class="col-xs-6 col-sm-9">
                    <div class="contact clearfix">
                        <ul class="hidden-xs">
                            <li> <span class="head"><img src="<?= base_url(); ?>assets/user/images//off.png" height="40px"></span> <a href="javaScript:void(0);">offline courses</a> </li>
                            <li> <span class="head"><img src="<?= base_url(); ?>assets/user/images//online.png" height="40px"></span> online courses   </li>
                            <li> <span class="head"><img src="<?= base_url(); ?>assets/user/images//book/book2.png" height="40px"></span> study material </li>
                            <li> <span class="head"> <img src="<?= base_url(); ?>assets/user/images//test.png" height="40px;">  </span>online test series  </li>
                            <li><a href="javascript:void(0);"> <span class="head"><img src="<?= base_url(); ?>assets/user/images//book/en.png" height="40px"></span>

                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enquiry</button>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="rform" style="margin-bottom: 30px;margin-top: 20px;">
                            <div class="row">
                                <div class="col-sm-12">
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
                    </div>
                </div> 
            </div>
        </div>
        </a>
    </li>
</ul>
</div>
</div>
</div>
</div>
       
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('about');?>">About Us</a></li>
                    <li><a href="javascript:void(0);">ESE</a></li>
                    <li><a href="javascript:void(0);">GATE</a></li>
                    <li><a href="#>">MPPSC-AE</a></li>
                    <li><a href="Javascript:void(0);">SSC-JE</a></li>
                    <li><a href="javascript:void(0);">Vyapam -SE</a></li>
                    <li class="dropdown"> <a data-toggle="dropdown" href="#">Non-technical Exams <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Tikamgarah Center</a></li>
                            <li><a href="#">MPPSC</a></li>
                            <li><a href="javascript:void(0);">VYAPAM EXAM - (SI,CONSTABLE,PATWARI,OTHERS)</a></li>
                            <li><a href="javascript:void(0);">GROUP - 1,2,3 </a></li>
                            <li><a href="javascript:void(0);">BANKING</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('gallery');?>">Gallery</a></li>
                    <li class="dropdown"> <a data-toggle="dropdown" href="#"> CENTER <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('indore');?>">INDORE</a></li>
                                <li><a href="<?php echo base_url('bhopal');?>">BHOPAL</a></li>
                                <li><a href="<?php echo base_url('Tikamgarah');?>"> TIKAMGARAH </a></li>
                            </ul>
                        </li> 
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
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
    <div class="banner-outer">
        <div class="banner-slider">
<?php if (!empty($slider)):  $i=0; foreach ($slider as $slider_data): ?>

 
   
            <div class="slider" style="background-image: url('<?= base_url()?>newimage/<?= $slider_data->slider_image ?>'); width: 100%!important; height: 600px!important;">
             <div class="container">
                    <div class="content">
                        <h1 class="animated fadeInUp"><?= $slider_data->head ?></h1>
                        <p class="animated fadeInUp"><?= $slider_data->content ?></p>

                       
                    </div>
                </div>
                                </div>
            
<?php $i++;if($i>=3){break;} endforeach; endif; ?>

           
        </div>
    </div>