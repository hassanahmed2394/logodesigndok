<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/logodesigndok/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>


<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>
<header class="header-home fill">
<a href="<?php echo $path;?>">
    <div class="logo">
      <img src="assets/images/logo.svg" alt="">
    </div>
</a>

  <div class="menu-wrap">
      <a class="mobile-hireus num" href="tel:+18627721016">+1 862 772 1016</a>

    <a class="mobile-hireus gotoform" href="Javascript:;">Hire us</a>

    <button class="hamburger hamburger--spring js-hamburger" type="button"
  aria-label="Menu" aria-controls="navigation" aria-expanded="true/false">
      <span class="hamburger-box">
      <span class="hamburger-inner"></span>
      </span>
    </button>

    <div class="menu">
      <ul id="menu" class="">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4971 homeclass hidemenu"><a href="<?php echo $path;?>">Home</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4970 dropdown hidemenu">
          <a href="<?php echo $path;?>services">Services</a>
          <ul class="ddlist">
            <li><a href="<?php echo $path;?>logo-design" class="<?php if ($urhere=="homepage") {echo "active"; }?>">Logo Design</a></li>
            <li><a href="<?php echo $path;?>branding">Branding</a></li>
            <li><a href="<?php echo $path;?>website-design-development">Website Design & Development</a></li>
            <li><a href="<?php echo $path;?>motion-graphics">Motion Graphics</a></li>
            <li><a href="<?php echo $path;?>mobile-apps">Mobile Apps</a></li>
            <li><a href="<?php echo $path;?>seo">SEO</a></li>
            <li><a href="<?php echo $path;?>content">Book Writing</a></li>
          </ul>
        </li>
        
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4973 hidemenu"><a href="<?php echo $path;?>works">Portfolio</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4973 hidemenu"><a href="packages">Packages</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4973 hidemenu"><a href="combo-packages">Combo Packages</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5247 hidemenu"><a href="<?php echo $path;?>how-it-works">How It Works</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4973 hidemenu"><a href="<?php echo $path;?>company">Company</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4973"><a class="headnumber" href="tel:+18627721016"><i class="fa fa-phone"></i>+1 862 772 1016</a></li>
        <li class="hire-us menu-item menu-item-type-post_type menu-item-object-page menu-item-4974 hidemenu"><a href="<?php echo $path;?>contact">Hire us</a></li>
        <li class="hire-us menu-item menu-item-type-post_type menu-item-object-page menu-item-4974 gotoform"><a href="Javascript:;">Hire us</a></li>
        
      </ul>
      <div class="close-i"></div>
    </div>    
  </div>


<div class="topformcontainer">
    <div class="topformwrap">
      <div class="formheading">
        <h2>Let's Get Started Exclusive Offer </h2>
      </div>
      <div class="formbody">
                <div class="container">
                  <div class=" col-lg-12 col-xl-12 text-center">
                    <div class="home-banner-content"  >
                      <div class="analyzeform col-lg-10 offset-lg-1">
                        <form class="" id="banform" method="POST" >
                          <div class="row">
                            <div class="wrap">
                              <div class="dtf">
                                <input id="fname" name="bName" autocomplete="off" minlength="5" class="round" type="text" placeholder="Enter Name" required="">
                              </div>
                              <div class="dtf">
                                <input id="cemail" type="email" autocomplete="off" name="bEmail" placeholder="Enter email here" required="">
                              </div>
                              <div class="dtf">
                                <input id="phone" name="bNumber" autocomplete="off" required="" type="number" rangelength="[2,15]" placeholder="Enter phone here">
                              </div>
                              <div class="dtf">
                                <textarea name="bMessage" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                              </div>
                              <div class="dtf text-left">
                                <input class="submit" type="submit" value="Contact Team">
                                <script type="text/javascript">
                                document.getElementById('location').value = window.location.href;
                              </script>
                              <input type="hidden" name="hiddencapcha" value="">
                              <input type="hidden" id="location" name="blocationURL" value="" />
                              </div>
                              <div class="dtf">
                                  <div class="successmessage" >
                                    <p>Congratulations! You've Signed up, For Further Assistance <a href="javascript:;" onclick="setButtonURL();">Start Live Chat</a>.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
      </div>
    </div>
    <div class="topformswitch">
      <div class="switchicon">
        <span class="fa fa-chevron-down"></span>
      </div>
      <h4>Avail <span>50%</span> DISCOUNT</h4>
    </div>
  </div>

</header>


