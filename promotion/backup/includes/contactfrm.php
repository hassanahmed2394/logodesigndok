<div class="form-box-main clearfix">
  <h2>We would like to hear from you</h2>
  <p>Heads up! We require that you sign up for Logo Design Dok services and packages. We make all your dreams come true in a successful project.</p>
  <form class="cmxform" id="contactForm"  method="POST" action="webpages/orderFormController.php"  enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-12">
        <label class="field-txt">Name <span>*</span></label>
          <input id="username" name="Name" minlength="2" type="text" placeholder="" required />
     </div>
      <div class="col-md-6">
        <label class="field-txt">Email <span>*</span></label>
        <input id="cemail" type="email" name="Email" placeholder="" required>
     </div>
     <div class="col-md-6">
        <label class="field-txt">Phone Number<span>*</span></label>
       <input id="phone-country" name="Number" type="number" placeholder="" required/>
     </div>

     <div class="col-md-12">
         <div class="forarrowselect">
            <label class="field-txt">Select Package <span>*</span></label>

             <select name="oPackage" id="packages" required>
                                                <option value="">Select Package</option>
                                                <option value="Basic Logo Package - $35.00">Basic Logo Package - $35.00</option>
                                                <option value="Startup Logo Package - $69.00">Startup Logo Package - $69.00</option>
                                                <option value="Professional Logo Package - $99.00">Professional Logo Package - $99.00</option>
                                                <option value="Identity Logo Package - $159.00">Identity Logo Package - $159.00</option>
                                                <option value="Corporate Logo Package - $199.00">Corporate Logo Package - $199.00</option>
                                                <option value="Elite Logo Package - $299.00">Elite Logo Package - $299.00</option>

                                                <option value="Basic Web Package - $224.00">Basic Web Package - $224.00</option>
                                                <option value="Startup Web Package - $374.00">Startup Web Package - $374.00</option>
                                                <option value="Professional Web Package - $824.00">Professional Web Package - $824.00</option>
                                                <option value="Elite Web Package - $1474.00">Elite Web Package - $1474.00</option>
                                                <option value="Corporate Web Package - $2374.00">Corporate Web Package - $2374.00</option>
                                                <option value="Business Web Package - $2979.00">Business Web Package - $2979.00</option>


                                                <option value="Startup E-Commerce Package - $794.00">Startup E-Commerce Package - $794.00</option> 
                                                <option value="Professional E-Commerce Package - $1394.00">Professional E-Commerce Package - $1,394.00</option>
                                                <option value="Elite E-Commerce Package - $2499.99">Elite E-Commerce Package - $2499.99</option>
                                                <option value="Teaser Video Package - $149.00">Teaser Video Package - $149.00</option>
                                                <option value="Startup Video Package - $399.00">Startup Video Package - $399.00</option>
                                                <option value="Classic Video Package - $799.00">Classic Video Package - $799.00</option>
                                                <option value="Premium Video Package - $1495.00">Premium Video Package - $1495.00</option>
                                                <option value="Deluxe Video Package - $1995.00">Deluxe Video Package - $1995.00</option>
                                                <option value="Seo Startup Package - $350.00">Seo Startup Package - $350.00</option>
                                                <option value="Scaling Startup Package - $700.00">Scaling Startup Package - $700.00</option>
                                                <option value="Venture Startup Package - $1200.00">Venture Startup Package - $1200.00</option>
                                                <option value="Basic 3D Package - $2995.00">Basic 3D Package - $2,995.00</option>
                                                <option value="Standard 3D Package - $4995.00">Standard 3D Package - $4,995.00</option>
                                                <option value="Premium 3D Package - $6995.00">Premium 3D Package - $6,995.00</option>
                                                <option value="Startup Collateral Package - $99.00">Startup Collateral Package - $99.00</option>
                                                <option value="Collateral Classic Package - $199.00">Collateral Classic Package - $199.00</option
                                                ><option value="Premium Collateral Package - $399.00"> Premium Collateral  Package - $399.00</option>
                                                <option value="Unlimited Collateral Package - $499.00">Unlimited Collateral Package - $499.00</option>
                                                <option value="Book Cover Design - $400.00">Book Cover Design - $400.00</option>
                                                <option value="Premium Book Video - $3900.00">Premium Book Video - $3,900.00</option>
                                                <option value="Author Website - $900.00">Author Website - $900.00</option>
                                                <option value="Professional Audio Book - $7000.00">Professional Audio Book - $7,000.00</option>
                                                <option value="Custom Book Illustrattion - $500.00">Custom Book Illustrattion - $500.00</option>
                                                <option value="Book Publishing - $500.00">Book Publishing - $500.00</option>
                                                <option value="Book Marketing - $2400.00">Book Marketing - $2,400.00</option>
                                                <option value="Copyrights Certificate - $900.00">Copyrights Certificate - $900.00</option>
                                                
                                                <option value="Basic Combo Package - $644.00">Basic Combo Package - $644.00</option>
                                                <option value="Startup Combo Package - $994.00">Startup Combo Package - $994.00</option>
                                                <option value="Professional Combo Package - $1394.00">Professional Combo Package - $1394.00</option>
                                                <option value="Corporate Combo Package - $1994.00">Corporate Combo Package - $1994.00</option>
                                                <option value="Elite Combo Package - $4999.00">Elite Combo Package - $4999.00</option>

                                            </select>
        </div>
     </div>
     
     

     

      
     <div class="col-md-12">
        <label class="field-txt">Please Attach Relevant Documents MS Word, JPG &amp; PNG Preferred <span>*</span></label>
        <input type="file" name="wordfile" id="fileToUpload">
     </div>
     
     
      
    <div class="col-md-12">
        <label class="field-txt">Additional Comments <span>*</span></label>
        <textarea name="Comment" placeholder="" /></textarea>
     </div>
     
    <div class="col-md-12">
        <div class="check-list col-lg-12 nopaddding">
          <input  type="checkbox" name="NDA" value="Required NDA" >
          <label for="checkbox22">Please send me a Non Disclosure Agreement for a Confidential Consultation</label>
        </div>
    </div>
    <div class="col-md-12">
        <input class="submit" type="submit" value="Submit" />
        <input class="" type="hidden" name="ctry" value="" />
          <input type="hidden" name="pc" value="">
          <!-- <input type="hidden" name="hiddencapcha" value=""> -->
     </div>
     </div>
  </form>
</div>



