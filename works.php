

<html lang="en-US"
  itemscope 
  itemtype="http://schema.org/WebSite" 
  prefix="og: http://ogp.me/ns#" >
<head>
    
<title>Get the perfect logo design - or any design in over 90 categories!</title>
<meta name="description"  content="Logo Design Dok is a digital design agency specializing in branding, animation, mobile and web design and development." />

     
<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include($style); 

$urhere = "homepage";
?>
 

</head>


<body class="page-template page-template-works page-template-works-php page page-id-23">

    <div class="app-content">
        <div class="main">
             <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>




<div class="works-wrap">
    <section class="applications">
        <div class="app-container"> 
            <div class="works__info mbpx-0 myport">
                <h2 class="page-title">  Works</h2>
                <p class="portfolioparagraph">Get the perfect logo design - or any design in over 90 categories! Whatever your business need or budget, we’ll help get it done.</p>
            
                
            </div>
            <div class="tab-custom">
                <ul class="tabbing-links">
                  <li data-targetit="tabs-branding">Branding</li>
                  <li data-targetit="tabs-logodesign">Logo Design</li>
                  <li data-targetit="tabs-webdesign">Web Design</li>
                  <li data-targetit="tabs-motiongraphics">Motion Graphics</li>
                  <li data-targetit="tabs-3danimation">3D Animation</li>
                  <li data-targetit="tabs-mobileapp">Mobile Application</li>
                  
                  <!-- <li data-targetit="tabs-videoanimation">Video Animation</li> -->
                </ul>

            
                <div class="tabs tabs-branding current row m-app-slider no-gutters for-works-load loadmorebranding">
                    <?php
                    $portfoliobranding = $_SERVER['HTTP_HOST']; 
                    $portfoliobranding = "includes/portfolio-branding.php"; 
                    include($portfoliobranding); 
                    ?>
                </div>

                <div class="tabs tabs-logodesign row m-app-slider no-gutters for-works-load loadmorelogo">
                    <?php
                    $portfoliologo = $_SERVER['HTTP_HOST']; 
                    $portfoliologo = "includes/portfolio-logo.php"; 
                    include($portfoliologo); 
                    ?>
                </div>

                <div class="tabs tabs-webdesign row m-app-slider no-gutters for-works-load loadmoreweb">
                    <?php
                    $portfolioweb = $_SERVER['HTTP_HOST']; 
                    $portfolioweb = "includes/portfolio-web.php"; 
                    include($portfolioweb); 
                    ?>
                </div>

                <div class="tabs tabs-motiongraphics row m-app-slider no-gutters for-works-load loadmorevideo">
                    <?php
                    $portfoliovideo = $_SERVER['HTTP_HOST']; 
                    $portfoliovideo = "includes/portfolio-video.php"; 
                    include($portfoliovideo); 
                    ?>
                </div>

                <div class="tabs tabs-mobileapp row m-app-slider no-gutters for-works-load loadmoremob">
                    <?php
                    $portfoliomobileapp = $_SERVER['HTTP_HOST']; 
                    $portfoliomobileapp = "includes/portfolio-mobileapp.php"; 
                    include($portfoliomobileapp); 
                    ?>
                </div>
                <div class="tabs tabs-3danimation row m-app-slider no-gutters for-works-load loadmore3d">
                    <?php
                    $portfolio3d = $_SERVER['HTTP_HOST']; 
                    $portfolio3d = "includes/portfolio-3d.php"; 
                    include($portfolio3d); 
                    ?>
                </div>

                

            </div>
        </div>
    </section>
</div>




<section class="contacts">
    <div class="container">
        <div class="contacts-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="content">
                            <h2 class="form-name">Let’s talk business</h2>
                        </div>
                        <h3 class="title">Services</h3>
<?php
$footerform = $_SERVER['HTTP_HOST']; 
$footerform = "includes/footer-form.php"; 
include($footerform); 
?>                         
                    </div>  
                </div>
                <div class="col-lg-6">
                    <div class="social-info-wrap">

                        <div class="social-info">
                            <div class="content">
                                <h2 class="form-name">Contacts</h2>
                            </div>

                            <div class="social-flex-wrap">

                                <div class="hire-wrap">
                                    <h3 class="title">Hire</h3>
                                    <a href="mailto:order@logodesigndok.com" class="mail">order@logodesigndok.com</a><a
                                    class="phone" href="tel:+18627721016">+1 862 772 1016</a>
                                </div>
                                <div class="follow-wrap">
                                    <h3 class="title">Follow</h3>
                                    <ul>
                                     <li><a href="https://www.facebook.com/designdok/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="https://www.linkedin.com/company/design-dok"><i class="fa fa-linkedin"></i></a></li>
                                     <li><a href="https://dribbble.com/designdok" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                     <li><a href="https://www.instagram.com/designdok/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                   </ul>
                                </div>
                                <div class="map">
                                  <img class="lazy" src="assets/images/animation_banner.gif">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </div>     
        </div>
    </div>    
</section> 


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer-top.php"; 
include($footer); 
?>


   <section class="next-page">
          <div class="next-page-wrap">
              <a href="<?php echo $path;?>packages" class="next-page__link">
                  <div class="next-page__desc">Next stop</div>
                  <div class="next-page__title">Packages</div>
                 
              </a>
          </div>
          <div class="next-page-mask"></div>
          <p class="next-page__copy">
              <span>&copy; 2019 Logo Design Dok</span>
          </p>
      </section>


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include($footer); 
?>
    

</body>
</html>
