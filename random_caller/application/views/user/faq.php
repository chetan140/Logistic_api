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

    <div class="cont">
        <div class="R-img">
            <img src="<?= base_url(); ?>assets/user/images/banner1.jpg" height="300px" width="100%">
            <div class="about-c">
                <h2>FAQ</h2>
            </div>
        </div>
    </div>

<section class="faq-sec">   
    <div class="container">
        <div class="faq-c">
                <h2>FAQ / <small> navigate</small></h2>
            </div>
        <div class="faq-cont">
           <?php if (!empty($data)):  $i=0; foreach ($data as $faq_data): ?>
                <button class="faq-accordian"><?= $faq_data->question ?></button>
                <div class="faq-accord">
                    <p class="faq-p"><?= $faq_data->answer ?></p>
                </div>

               <?php $i++; endforeach; endif; ?> 

                <script>
                    var acc = document.getElementsByClassName("faq-accordian");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                        } 
                            });
                                }
                </script>
           </div>
        </div>
    </div>
</section>


    
    <?php include('include/footer.php')?>

</body>
</html>