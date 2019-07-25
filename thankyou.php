

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


<body class="home blog">

    <div class="app-content">
        <div class="main">
            
        <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>



<section class="services-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2>Thank You</h2>
                <div class="border"></div>
                <h1 class="top">
                    LogoDesignDok can help visualize even the craziest ideas converting them into elegant designs, awesome experiences and catchy brands.
                </h1>
                <a href="<?php echo $path;?>" class="gotohome">Goto Home</a>
            </div>

        </div>
        </div>
    </div>
</section>


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
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.4216839863298!2d-121.99632908468963!3d37.521555879806385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbf5573ec8c55%3A0x765a38dbdbcfe194!2s39899+Balentine+Dr%2C+Newark%2C+CA+94560%2C+USA!5e0!3m2!1sen!2s!4v1556892435183!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include($footer); 
?>
    

</body>
</html>
