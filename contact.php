

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


<body class="home blog contactpage">

    <div class="app-content">
        <div class="main">
            
             <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>




<section class="contacts">
    <div class="container">
        <div class="contacts-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="content">
                            <h2 class="form-name">Let’s design together</h2>
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
                                    <a href="mailto:order@logodesigndok.co.uk" class="mail">order@logodesigndok.co.uk</a><a
                                    class="phone" href="tel:+441617680746">+44 161 768 0746</a>
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
              <a href="<?php echo $path;?>index" class="next-page__link">
                  <div class="next-page__desc">Next stop</div>
                  <div class="next-page__title">Home</div>
                 
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
