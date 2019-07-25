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
              <img class="img-fluid black" src="<?php echo $basesurl;?>images/reseller-pro-hub.svg" alt="*" />
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
      <div class="home-banner " style="background:#fff;height: 100vh;">
        <div class="container ">
          <div class="row">
            <div class=" col-lg-12 col-xl-12 text-center">
              <div class="home-banner-content">
                
                
                <div class="col-lg-8 offset-lg-2   inner-content mtpx-100 text-left">
                  <div class="form-box-main clearfix">
                    <h2>We would like to hear from you</h2>
                    <p>Heads up! Our team at RPH is waiting for you to discuss your vision for the perfect application. Fill up the form below to help us know more about your ideas.</p>
                    <form class="cmxform" id="contactForm"  method="POST" action="webpages/customFormController.php"  enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-12">
                          <label class="field-txt">Name <span>*</span></label>
                            <input id="username" name="Name" minlength="2" type="text" placeholder="" required />
                       </div>
                        <div class="col-md-6">
                          <label class="field-txt">Email <span>*</span></label>
                          <input id="cemail" type="email" name="Email" placeholder="" required>
                       </div>
                       <div class="col-md-6">
                          <label class="field-txt">Phone Number<span>*</span></label>
                         <input id="phone-country" name="Number" type="number" placeholder="" required/>
                       </div>

                       
                       
                       

                       

                        
                       <div class="col-md-12">
                          <label class="field-txt">Please Attach Relevant Documents MS Word, JPG &amp; PNG Preferred <span>*</span></label>
                          <input type="file" name="wordfile" id="fileToUpload">
                       </div>
                       
                       
                        
                      <div class="col-md-12">
                          <label class="field-txt">Additional Comments <span>*</span></label>
                          <textarea name="Comment" placeholder="" /></textarea>
                       </div>
                       
                      <div class="col-md-12">
                          <div class="check-list col-lg-12 nopaddding">
                            <input  type="checkbox" name="NDA" value="Required NDA" >
                            <label for="checkbox22">Please send me a Non Disclosure Agreement for a Confidential Consultation</label>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <input class="submit" type="submit" value="Submit" />
                          <input class="" type="hidden" name="ctry" value="" />
                            <input type="hidden" name="pc" value="">
                            <input type="hidden" name="hiddencapcha" value="">
                       </div>
                       </div>
                    </form>
                  </div>




        
                </div>

                
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