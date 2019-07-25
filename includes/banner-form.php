<div class="container">
  <div class=" col-lg-12 col-xl-12 text-center">
    <div class="home-banner-content"  >
      <div class="analyzeform col-lg-10 offset-lg-1">
        <form class="" id="banform" method="POST" action="webpages/bannerFormController.php" novalidate="novalidate">
          <div class="row">
            <div class="wrap">
              <div class="dtf">
                <input id="fname" name="Name" minlength="5" class="round" type="text" placeholder="Enter Name" required="">
              </div>
              <div class="dtf">
                <input id="cemail" type="email" name="Email" placeholder="Enter email here" required="">
              </div>
              <div class="dtf">
                <input id="phone" name="Phone" required="" type="number" rangelength="[2,15]" placeholder="Enter phone here">
              </div>
              <div class="dtf text-left">
                <input type="hidden" name="hiddencapcha" value="">
                <input class="submit" type="submit" value="Contact Team">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
