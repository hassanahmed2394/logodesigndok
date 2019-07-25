<!doctype html>
<html lang="en">
<head>
<title>Hire us to Get Started! Logo Design Dok is the way to go. - Logodesigndok</title>

<meta name="keywords" content="">
<meta name="description" content="">


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
<body class="gtquote">

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
          <a href="/promotion"><span class="icon-x-square"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="slider-wrapper black">
  <section class="">
    <div class="item">
      <div class="home-banner " style="background:#fff;height: 100vh;">
        <div class="container ">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                
                
                <div class="col-lg-8 offset-lg-2   inner-content mtpx-100 text-left">
                    <?php
                    $contactfrm = $_SERVER['HTTP_HOST']; 
                    $contactfrm = $srcurl."contactfrm.php"; 
                    include_once($contactfrm); 
                    ?> 
        
                </div>

                
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>

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