 <div class="mybannerform">
    <form class="" id="banform" method="POST" action="webpages/bannerFormController.php">
        <div class="wrap">
            <div class="dtf">
                <input class="round" name="bName" minlength="5" type="text" placeholder="Full Name" required />
            </div>
            <div class="dtf">
                <input  name="bEmail" minlength="5" type="email" placeholder="Email Address" required />
            </div>
            <div class="dtf">
                <input name="bNumber" rangelength="[7,12]" type="number" placeholder="Phone Number" required />
            </div>
            
            <div class="dtf text-left">
                <input class="submit " type="submit" value="Get Started" />
            </div>
            <script type="text/javascript">
                document.getElementById('location').value = window.location.href;
              </script>
              <input type="hidden" name="hiddencapcha" value="">
              <input type="hidden" id="location" name="blocationURL" value="" />
        </div>
    </form>
</div>