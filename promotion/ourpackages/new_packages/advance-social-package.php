<!doctype html>
<html lang="en">
<head>
<title>Logo Design Starts With $224.99 - Logo Design | Logo Design Dok</title>
<meta name="keywords" content="Logo Design Dok">
<meta name="description" content="Affordable logo design services that's made instantly and stays forever.">
<link rel='stylesheet' id='main-style-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' type="text/css" />

<?php
$srcurl = "../includes/";
$basesurl = "../assets/";
?>



<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage";
?>






</head>
<body class="hompg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>

<div class="works-wrap">
	
<section class="subscribe-fold sec-padding-60">

<div class="container">
   <div class="col-md-12">
        <h2 class="myheading">Advance Social Package</h2>

        <p class="mytext">We guarantee that you’ll get a great design no matter what your budget is.</p>
      </div>


  <div class="row">
  	<div class="col-lg-4 col-md-4 col-sm-4">
  		<div class="subs-pac bronze ">
          <h3>Advance Social <br/>Package</h3>
          <h6><span class="old">$449.98</span> $224.99              <!-- <b>USD</b> --> <span><b class="monthss"></b>Suitable for potential super-startups and brand revamps for companies.</span></h6>
          
        <a href="<?php echo $path;?>order?pack=32" class="ordrrrr">Place Your Order</a>
        <div class="actions row">
                    <div class="col-md-5 col-xs-6">
                          <a href="javascript:;" onclick="setButtonURL();" target="_self" class="chatbtn"><i class="fa fa-wechat"></i> Live Chat</a>
                    </div>
                    <div class="col-md-7 col-xs-6">
                        <a href="tel:<?php echo $number_val; ?>" class="numberbtn"><i class="fa fa-phone-square"></i><?php echo $number_text; ?></a>
                    </div>
                    
                  </div>
        </div>
  	</div>
  	<div class="col-lg-8 col-md-8 col-sm-8">
  		<div class="sub-list ">
          <div class="table-packages bronze">
            <div class="head">
              <h5>Advance Social Package</h5>
              <!-- <h6><b>$</b><span>1,600.00</span> only</h6> -->
            </div>
            <div class="body">
              <ul class="subscription-list">
                <li><h6>5 Social Channel</h6>
                <span class="tick"></span></li>
                <li><h6>2 Design Concepts</h6>
                <span class="tick"></span></li>
                <li><h6>Dedicated Account Manager</h6>
                <span class="tick"></span></li>
                <li><h6>Unlimited Revisions</h6>
                <span class="tick"></span></li>
                <li><h6>Dedicated Designer</h6>
                <span class="tick"></span></li>
                <li><h6>Turnaround Time - 48 - 72 Hours</h6>
                <span class="tick"></span></li>
                <li class="heading">Features</li>
                <li><h6>100% Satisfaction Guaranteed</h6>
                <span class="tick"></span></li>
                <li><h6>100% Ownership rights</h6>
                <span class="tick"></span></li>
                <li><h6>100% Unique Design Guarantee</h6>
                <span class="tick"></span></li>
                <li><h6>100% Money Back Guarantee</h6>
                <span class="tick"></span></li>
                <li><h6>All Final File Formats</h6>
                <span class="tick"></span></li>
              </ul>
            </div>
          </div>
        </div>
  	</div>
  </div>	
</div>
</section>
</div>







<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>



</body>
</html>