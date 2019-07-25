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

        <div class="main">
        <header class="secondary-header">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                    <img src="assets/images/logo.svg" alt="" class="transition-LogoDesignDok-300">
                </div>
                <div class="col-md-6">
                    <a href="/" class="crossbtn"><i class="fa fa-times"></i></a>
                </div>
                </div>
            </div>
        </header>
        <section class="contacts orders">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 ">
                        <h2>We would like to hear from you
                        </h2>
                        <p>Heads up! We require that you sign up for a Logo Design Dok services and packages. We make all your dreams come true in a successful project.</p>
                        <div role="form">
                            <form id="contactForm" method="POST" action="webpages/orderFormController.php"  enctype="multipart/form-data">
                                <div class="app-input-group">
                                    <span><input type="text" name="oName" value="" size="40" class="input" placeholder="Name" /></span>
                                    
                                </div>
                                <div class="app-input-group">
                                    <span><input type="text"  name="oNumber" value="" size="40" class="input" placeholder="Number" /></span>
                                    
                                </div>
                                <div class="app-input-group">
                                    <span><input type="email" required="" name="oEmail" value="" size="40" class="input" placeholder="Email" /></span>
                                    
                                </div>
                                <div class="app-input-group">
                                    <span>
                                    <!-- <label class="selectlabel">Select Package</label> -->
                                            <select name="oPackage" id="packages" required>
                                                <option value="">Select Package</option>
                                                <option value="Basic Logo Package - £35.00">Basic Logo Package - £35.00</option>
                                                <option value="Startup Logo Package - £69.00">Startup Logo Package - £69.00</option>
                                                <option value="Professional Logo Package - £99.00">Professional Logo Package - £99.00</option>
                                                <option value="Identity Logo Package - £159.00">Identity Logo Package - £159.00</option>
                                                <option value="Corporate Logo Package - £199.00">Corporate Logo Package - £199.00</option>
                                                <option value="Elite Logo Package - £299.00">Elite Logo Package - £299.00</option>

                                                <option value="Basic Web Package - £224.00">Basic Web Package - £224.00</option>
                                                <option value="Startup Web Package - £374.00">Startup Web Package - £374.00</option>
                                                <option value="Professional Web Package - £824.00">Professional Web Package - £824.00</option>
                                                <option value="Elite Web Package - £1474.00">Elite Web Package - £1474.00</option>
                                                <option value="Corporate Web Package - £2374.00">Corporate Web Package - £2374.00</option>
                                                <option value="Business Web Package - £2979.00">Business Web Package - £2979.00</option>


                                                <option value="Startup E-Commerce Package - £794.00">Startup E-Commerce Package - £794.00</option> 
                                                <option value="Professional E-Commerce Package - £1394.00">Professional E-Commerce Package - £1,394.00</option>
                                                <option value="Elite E-Commerce Package - £2499.99">Elite E-Commerce Package - £2499.99</option>
                                                <option value="Teaser Video Package - £149.00">Teaser Video Package - £149.00</option>
                                                <option value="Startup Video Package - £399.00">Startup Video Package - £399.00</option>
                                                <option value="Classic Video Package - £799.00">Classic Video Package - £799.00</option>
                                                <option value="Premium Video Package - £1495.00">Premium Video Package - £1495.00</option>
                                                <option value="Deluxe Video Package - £1995.00">Deluxe Video Package - £1995.00</option>
                                                <option value="Seo Startup Package - £350.00">Seo Startup Package - £350.00</option>
                                                <option value="Scaling Startup Package - £700.00">Scaling Startup Package - £700.00</option>
                                                <option value="Venture Startup Package - £1200.00">Venture Startup Package - £1200.00</option>
                                                <option value="Basic 3D Package - £2995.00">Basic 3D Package - £2,995.00</option>
                                                <option value="Standard 3D Package - £4995.00">Standard 3D Package - £4,995.00</option>
                                                <option value="Premium 3D Package - £6995.00">Premium 3D Package - £6,995.00</option>
                                                <option value="Startup Collateral Package - £99.00">Startup Collateral Package - £99.00</option>
                                                <option value="Collateral Classic Package - £199.00">Collateral Classic Package - £199.00</option
                                                ><option value="Premium Collateral Package - £399.00"> Premium Collateral  Package - £399.00</option>
                                                <option value="Unlimited Collateral Package - £499.00">Unlimited Collateral Package - £499.00</option>
                                                <option value="Book Cover Design - £400.00">Book Cover Design - £400.00</option>
                                                <option value="Premium Book Video - £3900.00">Premium Book Video - £3,900.00</option>
                                                <option value="Author Website - £900.00">Author Website - £900.00</option>
                                                <option value="Professional Audio Book - £7000.00">Professional Audio Book - £7,000.00</option>
                                                <option value="Custom Book Illustrattion - £500.00">Custom Book Illustrattion - £500.00</option>
                                                <option value="Book Publishing - £500.00">Book Publishing - £500.00</option>
                                                <option value="Book Marketing - £2400.00">Book Marketing - £2,400.00</option>
                                                <option value="Copyrights Certificate - £900.00">Copyrights Certificate - £900.00</option>
                                                
                                                <option value="Basic Combo Package - £644.00">Basic Combo Package - £644.00</option>
                                                <option value="Startup Combo Package - £994.00">Startup Combo Package - £994.00</option>
                                                <option value="Professional Combo Package - £1394.00">Professional Combo Package - £1394.00</option>
                                                <option value="Corporate Combo Package - £1994.00">Corporate Combo Package - £1994.00</option>
                                                <option value="Elite Combo Package - £4999.00">Elite Combo Package - £4999.00</option>

                                            </select>
                                    </span>
                                    <!-- <label>Select Package</label> -->
                                </div>
                                <div class="app-input-group getaquote">
                                    <span>
                                        <textarea name="oprojectdetails" cols="40" rows="6" class="textarea " placeholder="Project Details"></textarea>
                                    </span>
                                    <!-- <label>Project details</label> -->
                                </div>
                                
                                <div class="send-wrap">
                                    <div class="attach">
                                        <!-- <span class="attach-desc">Attach file</span> -->
                                        <br />
                                        <span class="wpcf7-form-control-wrap file-625"><input type="file" name="wordfile" size="40" class="wpcf7-form-control wpcf7-file input file" accept=".jpg,.jpeg,.png,.pdf" aria-invalid="false" /></span></p>
                                        <input type="hidden" name="hiddencapcha" value="">
                                    </div>
                                    <p><input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit submit" /></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section></div>
       <script type='text/javascript' src='assets/js/mlib.js'></script>
<script type='text/javascript' src='assets/js/functions.js'></script>
    </body>
</html>

