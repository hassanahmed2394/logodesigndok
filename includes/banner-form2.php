<div class="container">
  <div class=" col-lg-12 col-xl-12 text-center">
    <div class="home-banner-content"  >
      <div class="analyzeform col-lg-10 offset-lg-1">
        <form class="" id="banform" method="POST" action="webpages/bannerFormController.php">
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
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>