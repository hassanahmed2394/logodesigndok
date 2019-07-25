<div role="form">
    <form method="POST" action="webpages/bottomFormController.php"  enctype="multipart/form-data">

        <ul class="tags">
            <li class="item">
                <span class="wpcf7-form-control-wrap appdesign"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="App Design" /><span class="wpcf7-list-item-label">App Design</span></label></span></span></span>
            </li>
            <li class="item">
                <span class="wpcf7-form-control-wrap webdesign"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="Web Design" /><span class="wpcf7-list-item-label">Web Design</span></label></span></span></span>
            </li>
            <li class="item">
                <span class="wpcf7-form-control-wrap copywriting"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="Graphic Design" /><span class="wpcf7-list-item-label">Graphic Design</span></label></span></span></span>
            </li>
            <li class="item">
                <span class="wpcf7-form-control-wrap webdev"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="Web Dev" /><span class="wpcf7-list-item-label">Web Dev</span></label></span></span></span>
            </li>
            <li class="item">
                <span class="wpcf7-form-control-wrap motion"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="Animation" /><span class="wpcf7-list-item-label">Animation</span></label></span></span></span>
            </li>
            <li class="item">
                <span class="wpcf7-form-control-wrap branding"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="Logo and Branding" /><span class="wpcf7-list-item-label">Logo and Branding</span></label></span></span></span>
            </li>
            <li class="item">
                <span class="wpcf7-form-control-wrap ios"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="App Dev" /><span class="wpcf7-list-item-label">App Dev</span></label></span></span></span>
            </li>
            <li class="item">
                <span class="wpcf7-form-control-wrap other"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="services[]" value="Promo Video" /><span class="wpcf7-list-item-label">Promo Video</span></label></span></span></span>
            </li>
        </ul>
        <div class="app-input-group">
            <span><input type="text" name="username" value="" size="40" class="input" required /></span>
            <label>Name</label>
        </div>
        <div class="app-input-group">
            <span><input type="text" name="useremail" value="" size="40" class="input" required /></span>
            <label>Email</label>
        </div>
        <div class="app-input-group order-phone">
            <span><input type="text" name="userphone" id="phone-coun" value="" size="40" class="input" required  placeholder="Phone"/></span>
            <!--<label>Phone</label>-->
        </div>
        <div class="app-input-group">
            <span>
            <textarea name="userdetail" cols="40" rows="1" class="textarea autoheight" required ></textarea>
            </span>
            <label>Project details</label>
        </div>
   
        <div class="send-wrap">
            <div class="attach">
                <span class="attach-desc">Attach file</span><br />
                <span class="wpcf7-form-control-wrap file-625"><input type="file" name="wordfile" size="40" class="wpcf7-form-control wpcf7-file input file" accept=".jpg,.jpeg,.png,.pdf" aria-invalid="false" /></span></p>
                </div>
                <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit submit" /></p>
                 <script type="text/javascript">
                document.getElementById('blocation').value = window.location.href;
              </script>
              <input type="hidden" name="hiddencapcha" value="">
              <input type="hidden" id="blocation" name="blocationURL" value="" />
              <input type="hidden" name="pc" value="">
                        <input type="hidden" name="ctry" value="">
                         <input type="hidden" name="cip" value="">
            </div>
            </form>
        </div>