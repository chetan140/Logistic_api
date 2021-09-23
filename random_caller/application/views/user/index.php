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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
</head>

<body>

    <?php include('include/header.php')?> 
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
    
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5 col-sm-push-5 left-block">
                    <a href="<?php echo base_url('notes');?>">
                        <div class="r-imgr" style="background-image: url(<?= base_url(); ?>assets/user/images/book/wom1.jpg);height: 220px;">
                            <h1 class="r-ht55">Hand Written Notes</h1>
                        </div>
                   </a>
                    
                </div>
                <div class="col-sm-5 col-sm-pull-5">
                       <a href="<?php echo base_url('books');?>">
                            <div class="r-imgr" style="background-image: url(<?= base_url(); ?>assets/user/images/book/book21.jpeg);height: 220px;">
                                <h1 class="r-ht5">BOOKS</h1>
                            </div>
                        </a>
               
                <div class="col-sm-1">
                </div>
            </div>
        </div>
    </section>


    <section class="r-course">
        <div class="container">
            <div class="r-heading">
                <h3>COURSES </h3>
            </div>
            <div class="container">
                <div class="r-conts">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">


                            <?php if (!empty($course_home)):  $i=0; foreach ($course_home as $course_data_home): ?>
                                
                            <div class="col-sm-6">
                                <a href="javascript:void(0);">
                                    <div class="rt-img">
                                       <a href="#"> <?php echo "<img style='width: 100%; height: 200px;'   src= ".base_url().'newimage/'.$course_data_home->image.">";  ?></a>
                                    </div>
                                </a>
                            </div>
                      
                             <?php $i++; endforeach; endif; ?>
                           
                        </div>
                    </div>
                    

                    <div class="r-fm">
                        <div class="col-sm-4">
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
    </section>


    <section class="popular-cources padding-lg">
        <div class="container">
            <div class="title-row clearfix">
                <h3>Popular Courses</h3>
               
            </div>

            <ul class="row courses-list">

                   <?php if (!empty($course)):  $i=0; foreach ($course as $course_data):?>
                  <?php if($course_data->checkbox=='yes'): ?>
                <li class="col-sm-6 col-md-3">
                    <div class="inner">
                        <figure><?php echo "<img style='height: 200px;'    src= ".base_url().'newimage/'.$course_data->image.">";  ?></figure>
                        <div class="cnt-block">
                            <div class="duration" >
                                <span class="year"><?= $course_data->duration ?></span>
                                <!-- <span class="txt">courses-list</span> -->
                            </div>
                            <a href="<?= base_url().'main/mppsc/'.$course_data->id ?>"><h4><?= $course_data->tittle ?></h4>
                            <p><?= word_limiter($course_data->content, 10) ;?>...</p></a>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
 <?php $i++;  endforeach; endif; ?>
                
            </ul>
        </div>
    </section>

    <section class="how-study how-study2 padding-lg">
        <div class="container">
            <h2> <span>There are many ways to learn</span> Our Online Services </h2>
            <ul class="row">

                 <?php if (!empty($online_service)):  $i=0; foreach ($online_service as $online_service_data): ?>
                <li class="col-sm-3">
                    <div class="overly">
                        <div class="cnt-block">
                          <a href="<?= $online_service_data->url ?>">  <h3>   <?= $online_service_data->head ?> </h3>
                          </a>
                        </div>
                      
                    </div>
                    <figure><?php echo "<img style='width: 100%; height: 200px;' class='img-responsive'   src= ".base_url().'newimage/'.$online_service_data->image.">";  ?></figure>
                </li>

                 <?php $i++; if($i>=4){break;} endforeach; endif; ?>
               
            </ul>
        </div>
    </section>

    <section class="news-events news-events2 padding-lg">
        <div class="container">
            <h2><span>There are many ways to learn</span>News and events</h2>
            <ul class="row cs-style-3">

<?php if (!empty($news)):  $i=0; foreach ($news as $news_data): ?>
                <li class="col-sm-4">
                    <div class="inner">
                        <figure> <?php echo "<img class='img-responsive' style='height: 200px;'    src= ".base_url().'newimage/'.$news_data->image.">";  ?>
                            <figcaption>
                                <div class="cnt-block"> <a href="<?= base_url().'main/newsdetails/'.$news_data->id ?>" class="plus-icon">+</a>
                                    <h3><?= $news_data->tittle ?></h3>
                                    <div class="bottom-block clearfix">
                                        <div class="date">
                                            <div class="icon"><span class="icon-calander-icon"></span></div>
                                            <span><?= $news_data->date ?></span>
                                        </div>
                                      
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </li>
 <?php $i++;  endforeach; endif; ?>

             
            </ul>
            <div class="know-more-wrapper"> <a href="#" class="know-more">More Post <span class="icon-more-icon"></span></a> </div>
        </div>
    </section>

    <section class="testimonial testimonial2 padding-lg">
        <div class="container">
            <div class="wrapper">
                <h2>Alumini Testimonials</h2>
                <ul class="testimonial-slide">

                      <?php if (!empty($testimonial)):  $i=0; foreach ($testimonial as $testimonial_data): ?>
                    <li>
                        <p><?= $testimonial_data->content ?>...</p>
                        <span><?= $testimonial_data->name ?><span><?= $testimonial_data->post ?></span></span>
                    </li>

                    <?php $i++; if($i>=4){break;} endforeach; endif; ?>
                    
                </ul>
                <div id="bx-pager">
  <?php if (!empty($testimonial)):  $i=0; foreach ($testimonial as $testimonial_data): ?>
                 <a data-slide-index="<?php echo $i; ?>" href="#" ><?php echo "<img  style='width: 10%; height: 50px;' class='img-circle' src= ".base_url().'newimage/'.$testimonial_data->image.">";   ?></a>      

                   <?php $i++;  endforeach; endif; ?>
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
