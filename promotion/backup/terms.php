<!doctype html>
<html lang="en">
<head>
<title>Logo Design Dok</title>
<meta name="keywords" content="Logo Design Dok">
<meta name="description" content="Logo Designing, Best Logo Designing, Web Designing, Best Logo Packages">
<link rel='stylesheet' id='main-style-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' type="text/css" />



<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>


<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage ";
?>









</head>
<body class="hompg inner_page">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>


<section class="banner">
         <div class="fall"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-8 xs-text-center">
                  <div id="header-testimonial" class="owl-carousel owl-theme">
                     <div class="item">
                        <img src="assets/images/banimg1.jpg" alt="Banner 2">
                     </div>
                     <div class="item">
                        <img src="assets/images/banimg.jpg" alt="Banner 1">
                     </div>
                     <div class="item">
                        <img src="assets/images/banimg2.jpg" alt="Banner 3">
                     </div>
                  </div>
                  <div class="star-image">
                     <img src="assets/images/stars-icon.png" alt="Star">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="banner-contact">
                     <div class="login-form">
                        <div class="sign-in-htm">
                           <h5 class="text-uppercase color-red margin-top-0">Up To 70% discount</h5>
                           <p class="color-black font-weight-bold">
                              Professional Logo & Web Design Solutions for You
                           </p>
                           <div class="form-group margin-bottom-0 text-center">
                              <form id="offerForm" class="offr-frm" role="form" method="post" novalidate="novalidate">
                                 <input type="hidden" class="form-hidden" value="https://www.olivelogo.com/logo.php" id="url1" name="url1">
                                 <input type="hidden" name="text" id="" value="70% Discount Professional Solutions for Your">
                                 <input type="hidden" name="offerFrom" value="1">
                                 <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Name" required="">
                                 <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email" required="">
                                 <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="Phone" required="">
                                 <div id="offerFormResult"></div>
                                 <div class="clearfix"></div>
                                 <p class="text-center signup-text">*Signup now to avail this deal</p>
                                 <button type="submit" class="btn">Let's Get Started</button>
                              </form>
                           </div>
                           <div class="hr"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin-top-6">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
                  <div class="images-check">
                     <img src="assets/images/arrow-check.png" alt="" width="100%">  
                  </div>
                  <div class="images-text">
                     <h4 class="mb-0 font16">Unlimited Revisions</h4>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
                  <div class="images-check">
                     <img src="assets/images/arrow-check.png" alt="" width="100%">
                  </div>
                  <div class="images-text">
                     <h4 class="mb-0 font16">24/7 Live Support</h4>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
                  <div class="images-check">
                     <img src="assets/images/arrow-check.png" alt="" width="100%">  
                  </div>
                  <div class="images-text">
                     <h4 class="mb-6 font16">100% Ownership Rights</h4>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 colorWhite clearfix xs-text-center">
                  <div class="images-check">
                     <img src="assets/images/arrow-check.png" alt="" width="100%">  
                  </div>
                  <div class="images-text">
                     <h4 class="mb-0 font16">Print & Web Ready Files</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="social-counts">
         <div class="container">
            <div class="social-total">
               <ul class="bxslider1">
                  <li><img class="lazy img-responsive" src="assets/images/state.jpg" alt="Clients" width="" height="114" data-cycle-desc="Over 7 Years of Experience in the Online Design Industry" width="100%"></li>
                  <li><img class="lazy img-responsive" src="assets/images/state-second.jpg" alt="Clients" width="" height="114" data-cycle-desc="Over 7 Years of Experience in the Online Design Industry"></li>
                  <li><img class="lazy img-responsive" src="assets/images/state-third.jpg" alt="Clients" width="" height="114" data-cycle-desc="Over 7 Years of Experience in the Online Design Industry"></li>
               </ul>
            </div>
            <div class="clear"></div>
         </div>
      </div>
      <section class="sec-7 types-of-logo">
         <div class="container">
            <h2>WHAT TYPE IS YOUR Logo?</h2>
            <div class="row">
               <div class="col-md-12">
                  <ul class="nav nav-tabs">
                     <li class=""><a href="#iconic" class="active show" data-toggle="tab">Iconic Logo design</a></li>
                     <li class=""><a href="#illustrative" data-toggle="tab">Illustrative Logo Design</a></li>
                     <li class=""><a href="#wordmark" data-toggle="tab">Wordmark Logo Design</a></li>
                     <li class=""><a href="#3d" data-toggle="tab">3D Logo Design</a></li>
                     <li class=""><a href="#abstract" data-toggle="tab">Abstract Logo Design</a></li>
                     <li class="last"><a href="#flat" data-toggle="tab">Flat Logo Design</a></li>
                  </ul>
                  <div class="tab-content col-md-12 text-left">
                     <div class="tab-pane fade active show" id="iconic">
                        <div class="row">
                           <div class="offset-md-1 col-md-5 col-sm-5 col-xs-12 logo-content">
                              <p>A well Iconic Logo Design directly represents (or shows us) an idea, concept, operation or action. Icons simplify or summarize an operation through a graphical representation. Iconic Logo Designs are commonly used in applications (or apps), to represent what the app does, and are a key element in UI/UX interface.</p>
                              <ul class="what-ul hidden-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br class="br">Live Chat Now</a></li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-12 type-logos">
                              <img src="assets/images/iconic.png" alt="Logos Icons" width="80%">
                              <ul class="what-ul visible-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn popup_open btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="illustrative">
                        <div class="row">
                           <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 logo-content">
                              <p>Illustrative logos are much more elaborate and harder to design. They are the best among all treatments. To establish a logo as a brand in a highly competitive market, an illustrative logo is the best solution. We take <b>illustrative logo design</b> very seriously and we have all the expertise and tools require to create logos that stand to the test of time. </p>
                              <ul class="what-ul hidden-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-12 type-logos">
                              <img src="assets/images/Illustrative.png" alt="Logos Icons" width="80%">
                              <ul class="what-ul visible-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="wordmark">
                        <div class="row">
                           <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 logo-content">
                              <p>Do you want a wordmark logo for your business?  </p>
                              <p>Wordmark logos are all about keeping it simple. Wordmark logos are used widely across the industries especially <b>Tech, Media, Fashion and Food</b> for a reason.  They’re clean and make the most memorable impression on targeted audience.</p>
                              <ul class="what-ul hidden-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-12 type-logos">
                              <img src="assets/images/Wordmark.png" alt="Logos Icons" width="80%">
                              <ul class="what-ul visible-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="3d">
                        <div class="row">
                           <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 logo-content">
                              <p>3D logos are becoming increasingly popular while most brands go for flat logos, 3D logos make an instant impression on customers and tips the scales in a brand’s favor. We olive logo design 3D logos that communicate the brand message clearly and effectively. Moreover, we have worked for a multitude of brands from different industries and have successfully delivered 100% satisfaction to each one of them.</p>
                              <ul class="what-ul hidden-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-12 type-logos">
                              <img src="assets/images/3dnew.png" alt="Logos Icons" width="80%">
                              <ul class="what-ul visible-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="abstract">
                        <div class="row">
                           <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 logo-content">
                              <p>If you lack inspiration, we have a range of awesome Abstract Logo Design ideas for your business. Abstract Logo Design are a popular type of logo design form small businesses to large brands. <b>A well designed abstract logo</b> requires really hard work and being up to date with the <b>latest trends in design</b>.</p>
                              <ul class="what-ul hidden-sm mt-4">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-12 type-logos">
                              <img src="assets/images/Abstract.png" alt="Logos Icons" width="80%">
                              <ul class="what-ul visible-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="flat">
                        <div class="row">
                           <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 logo-content">
                              <p>Flat Logo Designs have become increasingly popular in the last couple of years among professional designers and can be seen in almost every aspect of visual designs. Flat Logo Designs have their own remarkable and quite unique characteristics. To get a taste for this trend, We Olive Logo have curated a roundup of beautiful Flat Logo Designs, making an <b>impact</b> on customers and ensuring that they'll <b>remember</b>.</p>
                              <ul class="what-ul hidden-sm mt-4">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-12 type-logos">
                              <img src="assets/images/FLATnew.png" alt="Logos Icons" width="80%">
                              <ul class="what-ul visible-sm">
                                 <li><a href="javascript:;" name="for £18.99" class="header-btn btn-orangedark get_started popup_open">Let's Start</a></li>
                                 <li class="discuss-icon"><a href="javascript:;" class="what-ul-a" onclick="$zopim.livechat.window.toggle()">Want to Discuss <br>Live Chat Now</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-3 portfolio">
         <div class="container">
            <h2>A glimpse of OUR WORK</h2>
            <div class="row">
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-1.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-2.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-3.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-4.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-5.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-6.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-7.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-8.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-9.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-10.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-11.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
               <div class="col-sm-3 col-xs-6 portfolio-box">
                  <div class="portfolio_box video_portfolio_fancy js-wow u-slideUp is-animated" data-wow-delay="0.1s">
                     <div class="hovereffect"> <img src="assets/images/portfolio/portfolio-12.jpg" alt="Portfolio"/> </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-4 cta-center">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 <h3>Let The World see your Business</h3>
               <h2>in action with creative logos</h2>
               </div>
               <div class="col-sm-6 col-md-4 cta-main-center margin-top-0 text-center text-right-sm">
                  <a href="javascript:;" class="float-none" onclick="$zopim.livechat.window.toggle()"><i class="fa fa-comments-o round-fa" aria-hidden="true"></i> Live Chat</a>
               </div>
               <div class="col-sm-6 col-md-4 cta-main-center margin-top-0 text-center text-left-sm">
                  <a href="tel:1 (833) 7077358" class="float-none"><i class="fa fa-phone round-fa" aria-hidden="true"></i> 1 (833) 7077358</a>
               </div>
               <div class="col-sm-12 col-md-4 cta-main-center margin-top-0 text-center">
                  <a href="javascript:;" onclick="order_now_value(this)" name="for £18.99" class="header-btn popup_open red-btn float-none">Lets Get Started</a>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-5 pricing">
         <div class="container">
            <h2>market’s most COMPETITIVE PRICES</h2>
            <p class="text-center pricing-p">We Help Startups, Small Businesses, Organizations and Entrepreneurs Grow with Sophisticated Logo Design Solutions in competitive pricing.</p>
            <div class="row">
      <div id="pricing-carosul" class="owl-carousel owl-theme">
        <div class="item">
                      <div class="package-box text-center">
                          <div class="productSku" style="display: none;">LOGO_OLIVE_BRONZE</div>
                          <h4 class="category">Olive Bronze</h4>
                          <span class="actual-price packgePrice">$39</span><span class="sale-price">$95</span>
                          <div class="scroll">
                              <ul style="margin-bottom: 18px;">
                                 <li>2 Logo Concepts</li>
                                 <li>By 2 Logo Designers</li>
                                 <li>2 Revisions (Additional $9)</li>
                                 <li><strong>24 - 48 Hours</strong> TAT</li>
                              </ul>
                              <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px;">
                                 <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Free</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> Greyscale Format</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> Color Options</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> Icon</li>
                                 <li style="line-height: 19px;font-size: 12px"><i class="fa fa-check" aria-hidden="true"></i> Final Files: <br>(.AI, .PSD, .EPS, .JPEG, .SVG, .PDF, Tiff)</li>
                                 <li></li>
                              </ul>
                              <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px">
                                 <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Features</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Custom Artwork (No Template)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Ownership Rights</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Money Back Guarantee</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Real Account Manager (No Bots)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 Support (Email, Chat, Call, SMS, Whatsapp)</li>
                                 <li></li>
                              </ul>
                          </div>
                          <div class="clearfix"></div>
                          <p class="add-on"></p>
                        <ul class="ul-50">
                              <a href="tel:+18337077358">
                                 <li class="share-icon">Share your Idea? <br/>+1 (833) 7077358</li>
                              </a>
                              <a href="javascript:;" class="" onclick="$zopim.livechat.window.toggle()">
                                 <li class="discuss-icon">Want to Discuss <br/>Live Chat Now</li>
                              </a>
                        </ul>
                          <a class="btn-order green-btn" href="#!">ORDER NOW</a>
                      </div>
        </div>
        <div class="item">
          <div class="package-box text-center">
                          <div class="productSku" style="display: none;">LOGO_OLIVE_SILVER</div>
                         <h4 class="category">Olive Silver</h4>
                         <span class="actual-price packgePrice">$69</span><span class="sale-price">$258</span>
                         <div class="scroll">
                            <ul style="margin-bottom: 18px;">
                               <li>4 Logo Concepts</li>
                               <li>By 4 Logo Designers</li>
                               <li>4 Revisions (Additional $9)</li>
                               <li><strong>24 - 48 Hours</strong> TAT</li>
                               <li><strong>Stationery Design (Business Card / Letterhead)</strong></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px;">
                               <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Free</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Greyscale Format</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Color Options</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Icon</li>
                               <li style="line-height: 19px;font-size: 12px"><i class="fa fa-check" aria-hidden="true"></i> Final Files: <br>(.AI, .PSD, .EPS, .JPEG, .SVG, .PDF, Tiff)</li>
                               <li></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px">
                                 <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Features</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Custom Artwork (No Template)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Ownership Rights</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Money Back Guarantee</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Real Account Manager (No Bots)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 Support (Email, Chat, Call, SMS, Whatsapp)</li>
                                 <li></li>
                              </ul>
                         </div>
                         <div class="clearfix"></div>
                         <p class="add-on"></span></p>
                         <ul class="ul-50">
                            <a href="tel:+18337077358">
                               <li class="share-icon">Share your Idea? <br/>+1 (833) 7077358</li>
                            </a>
                            <a href="javascript:;" class="" onclick="$zopim.livechat.window.toggle()">
                               <li class="discuss-icon">Want to Discuss <br/>Live Chat Now</li>
                            </a>
                         </ul>
                         <a class="btn-order green-btn" href="#!">ORDER NOW</a>
                      </div>
        </div>
        <div class="item">
          <div class="package-box seller text-center">
                         <div class="productSku" style="display: none;">LOGO_OLIVE_GOLD</div>
                         <h4 class="category">Olive Gold</h4>
                         <span class="actual-price packgePrice">$119</span><span class="sale-price">$492</span>
                         <div class="scroll">
                            <ul style="margin-bottom: 18px;">
                               <li>6 Logo Concepts</li>
                               <li>By 6 Logo Designers</li>
                               <li>Unlimited Revisions</li>
                               <li><strong>24 - 48 Hours</strong> TAT</li>
                               <li><strong>Stationery Design (Business Card, Letterhead, Envelope)</strong></li>
                               <li><strong>Email Signature</strong></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px;">
                               <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Free</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Greyscale Format</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Color Options</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Icon</li>
                               <li style="line-height: 19px;font-size: 12px"><i class="fa fa-check" aria-hidden="true"></i> Final Files: <br>(.AI, .PSD, .EPS, .JPEG, .SVG, .PDF, Tiff)</li>
                               <li></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px">
                                 <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Features</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Custom Artwork (No Template)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Ownership Rights</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Money Back Guarantee</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Real Account Manager (No Bots)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 Support (Email, Chat, Call, SMS, Whatsapp)</li>
                                 <li></li>
                              </ul>
                         </div>
                         <div class="clearfix"></div>
                         <p class="add-on"></p>
                         <ul class="ul-50">
                            <a href="tel:+18337077358">
                               <li class="share-icon">Share your Idea? <br/>+1 (833) 7077358</li>
                            </a>
                            <a href="javascript:;" class="asdf" onclick="$zopim.livechat.window.toggle()">
                               <li class="discuss-icon">Want to Discuss <br/>Live Chat Now</li>
                            </a>
                         </ul>
                         <a class="btn-order green-btn" href="#!">ORDER NOW</a>
                      </div>
        </div>
        <div class="item">
          <div class="package-box text-center">
                         <div class="productSku" style="display: none;">LOGO_OLIVE_PLATINUM</div>
                         <h4 class="category">Olive Platinum</h4>
                         <span class="actual-price packgePrice">$169</span><span class="sale-price">$512</span>
                         <div class="scroll">
                            <ul style="margin-bottom: 18px;">
                               <li>8 Logo Concepts</li>
                               <li>By 8 Logo Designers</li>
                               <li>Unlimited Revisions</li>
                               <li><strong>24 - 48 Hours</strong> TAT</li>
                               <li><strong>Stationery Design (Business Card, Letterhead, Envelope, Invoice)</strong></li>
                               <li><strong>Social Media Designs</strong></li>
                               <li><strong>Email Signature</strong></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px;">
                               <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Free</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Greyscale Format</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Color Options</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Icon</li>
                               <li style="line-height: 19px;font-size: 12px"><i class="fa fa-check" aria-hidden="true"></i> Final Files: <br>(.AI, .PSD, .EPS, .JPEG, .SVG, .PDF, Tiff)</li>
                               <li></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px">
                                 <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Features</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Custom Artwork (No Template)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Ownership Rights</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Money Back Guarantee</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Real Account Manager (No Bots)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 Support (Email, Chat, Call, SMS, Whatsapp)</li>
                                 <li></li>
                              </ul>
                         </div>
                         <div class="clearfix"></div>
                         <p class="add-on"></span></p>
                         <ul class="ul-50">
                            <a href="tel:+18337077358">
                               <li class="share-icon">Share your Idea? <br/>+1 (833) 7077358</li>
                            </a>
                            <a href="javascript:;" class="" onclick="$zopim.livechat.window.toggle()">
                               <li class="discuss-icon">Want to Discuss <br/>Live Chat Now</li>
                            </a>
                         </ul>
                         <a class="btn-order green-btn" href="#!">ORDER NOW</a>
                      </div>
        </div>
        <div class="item">
          <div class="package-box text-center">
                         <div class="productSku" style="display: none;">LOGO_OLIVE_INFINITE</div>
                         <h4 class="category">Olive Infinite</h4>
                         <span class="actual-price packgePrice">$219</span><span class="sale-price">$699</span>
                         <div class="scroll">
                            <ul style="margin-bottom: 18px;">
                               <li>Unlimited Logo Concepts</li>
                               <li>Unlimited Revisions</li>
                               <li><strong>24 - 48 Hours</strong> TAT</li>
                               <li><strong>Stationery Design (Business Card, Letterhead, Envelope, Invoice)</strong></li>
                               <li><strong>Social Media Designs</strong></li>
                               <li><strong>Email Signature</strong></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px;">
                               <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Free</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Greyscale Format</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Color Options</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Icon</li>
                               <li style="line-height: 19px;font-size: 12px"><i class="fa fa-check" aria-hidden="true"></i> Final Files: <br>(.AI, .PSD, .EPS, .JPEG, .SVG, .PDF, Tiff)</li>
                               <li></li>
                            </ul>
                            <ul class="mt-0 border-new" style="border-top: 2px solid #24d193;margin: 20px 0px">
                                 <li style="color: #f93221;font-weight: bold;margin-top: 10px;">Features</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Custom Artwork (No Template)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Ownership Rights</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Money Back Guarantee</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 100% Real Account Manager (No Bots)</li>
                                 <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 Support (Email, Chat, Call, SMS, Whatsapp)</li>
                                 <li></li>
                              </ul>
                      </div>
                         <div class="clearfix"></div>
                         <p class="add-on"></span></p>
                         <ul class="ul-50">
                            <a href="tel:+18337077358">
                               <li class="share-icon">Share your Idea? <br/>+1 (833) 7077358</li>
                            </a>
                            <a href="javascript:;" class="" onclick="$zopim.livechat.window.toggle()">
                               <li class="discuss-icon">Want to Discuss <br/>Live Chat Now</li>
                            </a>
                         </ul>
                         <a class="btn-order green-btn" href="#!">ORDER NOW</a>
                      </div>
        </div>
      </div>
            </div>
         </div>
      </section>

      <section class="sec-padding pricing-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1"> 
        <h2>What is going to be the Cost?</h2>
        <p>Regardless of what you have to offer, we give nothing but our best.</p>
      </div>  
      <div class="col-lg-12"> 
          <!-- <ul class="nav nav-pills">
            
            <li><a data-toggle="pill" href="#logod" class="active show">Logo Design </a></li>
           
          </ul> -->
        <div class="tab-content pricingboxes">
          
          


          <div id="logod" class="tab-pane active">
            <?php
            $packages = $_SERVER['HTTP_HOST']; 
            $packages = $srcurl."packages-logo.php"; 
            include($packages); 
            ?>
          </div>


          
          
        </div>
      </div>
    </div>
  </div>
</section>



      <?php
$packagesstartupcombo = $_SERVER['HTTP_HOST']; 
$packagesstartupcombo = $srcurl."packages-startupcombo.php"; 
include($packagesstartupcombo); 
?>
      <div class="our-process-container mob-hide">
         <div class="section-title">
            <h4>Our Process</h4>
            <h6>Our order process comprises of 4 easy & simple steps that will save you a great deal of time.</h6>
         </div>
         <div class="process-container container owl-carousel owl-theme" id="process-carosul">
            <!-- <span class='connect0 wow fadeIn' data-wow-delay="0s"></span> -->
            <div class="single-process wow fadeIn item"  data-wow-delay="0s">
               <div class="process-thumb"><img width="207" height="231" src="assets/images/process1.png" class="attachment-post-thumbnail size-post-thumbnail colorbox-130  wp-post-image" alt="process1" /></div>
               <h6>DEFINE</h6>
               <div class="process-desc">
                  <p>We help you achieve your goals to do this at the start of the project will send you a logo brief, which has been designed to find out as much as possible about your business and target audience. Based on your responses we will use them as a foundation for the decisions which will be made during the design phase.</p>
               </div>
            </div>
            <!-- <span class='connect1 wow fadeIn' data-wow-delay="1s"></span> -->
            <div class="single-process wow fadeIn item"  data-wow-delay="0.5s">
               <div class="process-thumb"><img width="207" height="231" src="assets/images/process2.png" class="attachment-post-thumbnail size-post-thumbnail colorbox-132  wp-post-image" alt="process2" /></div>
               <h6>DESIGN</h6>
               <div class="process-desc">
                  <p>We make a perfect combination of look, feel and functionality. We give you a design that is user-friendly, and effectively communicates your business objectives.</p>
               </div>
            </div>
            <!-- <span class='connect2 wow fadeIn' data-wow-delay="2s"></span> -->
            <div class="single-process wow fadeIn item"  data-wow-delay="1s">
               <div class="process-thumb"><img width="207" height="231" src="assets/images/process3.png" class="attachment-post-thumbnail size-post-thumbnail colorbox-134  wp-post-image" alt="process3" /></div>
               <h6>DEVELOP</h6>
               <div class="process-desc">
                  <p>A team of design & development experts with a knack for smart web thinking; we ensure your website is accessible across all desktop & mobiles platforms.</p>
               </div>
            </div>
            <!-- <span class='connect3 wow fadeIn' data-wow-delay="3s"></span> -->
            <div class="single-process wow fadeIn item"  data-wow-delay="1.5s">
               <div class="process-thumb"><img width="207" height="231" src="assets/images/process4.png" class="attachment-post-thumbnail size-post-thumbnail colorbox-136  wp-post-image" alt="process4" /></div>
               <h6>LAUNCH</h6>
               <div class="process-desc">
                  <p>We stand with you right until your project is launched. Our dedication to your satisfaction will be reflected in the way we passionately execute your project!</p>
               </div>
            </div>
         </div>
      </div>
      <section class="sec-4 cta-center">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                 <h3>hAVE YOU ANY QUESTIONS ?</h3>
               <h2>WE ARE HERE 24 / 7 FOR YOU</h2>
               </div>
               <div class="col-sm-6 col-md-4 cta-main-center margin-top-0 text-center text-right-sm">
                  <a href="javascript:;" class="float-none" onclick="$zopim.livechat.window.toggle()"><i class="fa fa-comments-o round-fa" aria-hidden="true"></i> Live Chat</a>
               </div>
               <div class="col-sm-6 col-md-4 cta-main-center margin-top-0 text-center text-left-sm">
                  <a href="tel:1 (833) 7077358" class="float-none"><i class="fa fa-phone round-fa" aria-hidden="true"></i> 1 (833) 7077358</a>
               </div>
               <div class="col-sm-12 col-md-4 cta-main-center margin-top-0 text-center">
                  <a href="javascript:;" onclick="order_now_value(this)" name="for £18.99" class="header-btn popup_open red-btn float-none">Request a Call back</a>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-7 industry">
         <div class="container">
            <h3>Serving Fortune 500 Companies</h3>
            <h2>Belonging to 45+ Industries!</h2>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box ico-sprite">
                     <span class="ico engg"></span>
                     <h4>Engineering</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico religion"></span>
                     <h4>Religion</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico business"></span>
                     <h4>Financial</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico medical"></span>
                     <h4>Medical</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico communications"></span>
                     <h4>Communication</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico children"></span>
                     <h4>Children</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico construction"></span>
                     <h4>Construction</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-left-xs">
                  <div class="indus-box">
                     <span class="ico like"></span>
                     <h4>Social</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico trivia"></span>
                     <h4>Insurance</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico health"></span>
                     <h4>Health</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico finance"></span>
                     <h4>Entertainment</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico craft"></span>
                     <h4>Craft</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico tech"></span>
                     <h4>Technology</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico educational"></span>
                     <h4>Education</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico lifestyle"></span>
                     <h4>Consultation</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico travel"></span>
                     <h4>Travel</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico weather"></span>
                     <h4>Environmental</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico music"></span>
                     <h4>Music</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico auto"></span>
                     <h4>Automotive</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico social"></span>
                     <h4>Human Resource</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico architect"></span>
                     <h4>Architectural</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico role-playing"></span>
                     <h4>Matrimony</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico fashion"></span>
                     <h4>Fashion</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico navigation"></span>
                     <h4>Navigation</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico catalogue"></span>
                     <h4>Catalogues</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico sports"></span>
                     <h4>Sports</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico food"></span>
                     <h4>Food</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico art"></span>
                     <h4>Art</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6 text-right-xs">
                  <div class="indus-box">
                     <span class="ico spa"></span>
                     <h4>Spa</h4>
                  </div>
               </div>
               <div class="col-md-2 col-sm-2 col-xs-6">
                  <div class="indus-box">
                     <span class="ico news"></span>
                     <h4>News</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="testimonial-wrap">
         <div class="container">
            <div class="row">
               <h2>Our client says</h2>
               <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="t-shadow">
                        <img class="img-responsive t-PLR" src="assets/images/qoma.jpg" alt="Comma">
                        <p class="t-PLR">“I needed a full branding suite and website, like…tomorrow! Olive Logo was so accommodating. The branding and the website came out incredible and I couldn’t have been more satisfied, What’s more, it’s affordable too!”</p>
                        <img class="img-responsive" src="assets/images/2.png" alt="Client">
                        <span class="tname t-PLR">Creative </span>
                        <span class="tdesig t-PLR">Radiant Labs</span>
                     </div>
                  </div>
                  <div class="item">
                     <div class="t-shadow">
                        <img class="img-responsive t-PLR" src="assets/images/qoma.jpg" alt="Comma">
                        <p class="t-PLR">“This is now my 2nd time to work with Olive Logo, and I can’t sing enough praises about their commitment and passion for branding your name in the industry! Olive Logo hit the nail on the head with creating a fresh look yet keeping the simple personality of our decades old family business. We’re beyond thrilled!”</p>
                        <img class="img-responsive" src="assets/images/3.png" alt="Client">
                        <span class="tname t-PLR">Co-Founder </span>
                        <span class="tdesig t-PLR">RDS</span>
                     </div>
                  </div>
                  <div class="item">
                     <div class="t-shadow">
                        <img class="img-responsive t-PLR" src="assets/images/qoma.jpg" alt="Comma">
                        <p class="t-PLR">“It was a pleasure to work with Olive Logo on our rebranding.  They presented unique, creative options and were exceptionally supportive through the selection and refinement process.  They really heard out all of my input and the end result has been just perfect.”</p>
                        <img class="img-responsive" src="assets/images/1.png" alt="Client">
                        <span class="tname t-PLR">GM Marketing </span>
                        <span class="tdesig t-PLR">R&amp;R Agro</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="home-featured-area desktopawards">
         <div class="container">
            <div class="section-title">
               <h4>Awards &amp; Recognitions</h4>
               <h6>We've been Honored &amp; Recognized for our Outstanding Achievements in the Industry</h6>
            </div>
            <div class="home-brands"> <img src="assets/images/pldaward.png" width="142" height="90" alt="Awards"> <img src="assets/images/pldaward2.png" width="142" height="90" alt="Awards"> <img src="assets/images/pldaward3.png" width="142" height="90" alt="Awards"> <img src="assets/images/pldaward4.png" width="142" height="90" alt="Awards"> <img src="assets/images/pldaward5.png" width="142" height="90" alt="Awards"> <img src="assets/images/pldaward6.png" width="142" height="90" alt="Awards"> </div>
         </div>
      </div>
      


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>

<script type="text/javascript">
  
  $('.bxslider1').bxSlider({
         pagerCustom: '#bx-pager',
         auto:true,
         mode: 'vertical'
         });

  $(function(){
         $('.scroll').slimScroll({
         height: '500px'
         });
         // $('.no-scroll').slimScroll({
         // height: '316px'
         // });
         });
</script>

</body>
</html>