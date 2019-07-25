<!doctype html>
<html lang="en">
<head>
<title>Thank You! We've Noted That Down | Logo Design Dok</title>
<meta name="description" content="Thankyou for the information that you just submitted to us! We've noted it down and will get back to you soon." />


<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>


<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include_once($style); 
?>




</head>
<body class="analyzepg">

<section class="tphead">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="logo">
            <a href="/">
              <img class="img-fluid black" src="<?php echo $basesurl;?>images/logo.svg" alt="*" />
            </a>
          </div>
      </div>
      <div class="col-lg-9">
        <div class="text-right">
          <a href="/"><span class="icon-x-square"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="slider-wrapper black">
  <section class="">
    <div class="item">
      <div class="home-banner d-flex" style="background:#f7f9fc; height: 100vh;">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                <h1>Thank You! <br>We've Noted That Down</h1>
                <p class="subtitle">Thankyou for the information that you just submitted to us! <br> We've noted it down and will get back to you soon.</p>
                <a href="/" class="btn-theme-outline">Back To Home</a>
                
                

                
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!-- <div class="slider-progress">
    <div class="progress"></div>
  </div> -->
</div>                
                
    






<script src="<?php echo $basesurl;?>js/mlib.js"></script> 
<script src="<?php echo $basesurl;?>js/functions.js"></script> 



<!-- scroll top car
<div class="car-top"><span>
<img src="<?php echo $basesurl;?>images/car.png" alt="Top" title="Back to top" />
</span></div>
-->
</body>
</html>