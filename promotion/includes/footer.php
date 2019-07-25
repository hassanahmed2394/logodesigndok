<footer>
         <div class="footer-top">
            <div class="container">
               <h3>READY TO GIVE YOUR business</h3>
               <h2>THE PERFECT DIRECTION?</h2>
               <div class="row">
                  <div class="col-md-7 col-sm-7 col-xs-12 contact-form">
                     <form  id="contactForm"class="jform" action="webpages/bannerFormController.php" method="post">
                        <div class="name">
                           <input type="text" name="Name" placeholder="Name" class="iecn alphanumeric contact-field" required>
                        </div>
                        <div class="email">
                           <input type="email" name="Email" placeholder="Email" class="email contact-field" required>
                        </div>
                        <div class="phone" >
                           <input type="text" name="Number" minlength="7" placeholder="Phone" class="number contact-field" required>
                        </div>
                        <div class="mxg field">
                           <textarea name="Message" class="iemsg contact-field" rows="4"
                              placeholder="Name on the Logo and Design Preferences" required></textarea>
                        </div>
                        <div>
                           <div id="contactFormResult"></div>
                           <input type="hidden" name="hiddencapcha">
                           <input type="hidden" name="cip" value="">
                           <input type="submit" class="btn-orangedark red-btn" value="SEND" style="margin-right: 0px !important">
                        </div>
                     </form>
                  </div>

                    <script type="text/javascript">
                        setTimeout(function(){ 

    
   $('input[name="cip"]').val(ip);
   
}, 3000);

                     </script>
                  <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12 contact-right">
                     <div class="social-icons footer-phone">
                        <h4>ONLINE CUSTOMER SERVICE</h4>
                        <a href="<?php echo $number_val;?>" class="footer-btn"><?php echo $number_text;?></a> 
                     </div>
                     <div class="payment social-icons">
                        <h4>EASY PAYMENT</h4>
                        <img src="assets/images/payment.png" alt="Payment"> 
                     </div>
                      <div class="payment social-icons">
                        <h4>Address</h4>
                        <p style="color: white;">One gateway center, Newark, New Jersey, USA</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                    <p>© Copyright 2019 Logodesigndok. All Rights Reserved   <!-- | <a href="<?php echo $basesurl;?>privacy.php">Privacy Policy</a> | <a href="<?php echo $basesurl;?>terms.php">Terms & Conditions</a> --> 
                    </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>





</main>

<div class="phone-mobile">
 <a href="tel:18627721016"> <span class="icon-phone"></span></a>
</div>

<script src="<?php echo $basesurl;?>js/mlib.js"></script> 



<script src="<?php echo $basesurl;?>js/functions.js"></script> 




<script type="text/javascript">
function setButtonURL(){
  javascript:$zopim.livechat.window.show();
  }

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.1.2/jquery.bxslider.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" ></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/JQuery-Snowfall/1.7.4/snowfall.jquery.min.js" ></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" ></script>

      <script>

      $(function() {
    var selectedClass = "";
    $(".fil-cat").click(function() {

        $(".portfolio_list ul li").removeClass('active');
        $(this).addClass('active');
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(100, 0.1);
        $("#portfolio .showing").not("." + selectedClass).fadeOut().removeClass('scale-anm');
        setTimeout(function() {
            $("." + selectedClass).fadeIn().addClass('scale-anm');
            $("#portfolio").fadeTo(800, 1);
        }, 300);

    });
});

$(document).ready(function() {


    $('#carousel').carousel();

    //bootstrap carousel plugin

    $('.carousel').carousel({

        interval: 5000,

        pause: ""

    });
  
    
    var owl = $('#logos-type');
  
  owl.owlCarousel({
        loop: false,
        slideSpeed : 1000,
    autoPlay: 3000,
        navigation: true,

        items : 1,
        itemsDesktop      : [1199,1],
        itemsDesktopSmall     : [979,1],
        itemsTablet       : [768,1],
        itemsMobile       : [479,1],
        pagination:true,
    dots: true
    });




$(document).ready(function() {



    $('.s-bar').hover(function(){
        $(this).stop(true,true).animate({right:'184px'}, 500, 'easeOutExpo');
        $('.side-bars').css('z-index','1004');
    }, function(){
        $(this).animate({right:'0px'}, 500, 'easeOutBounce');
        $('.side-bars').css('z-index','999');
    });

    $('.popup_open').click(function() {
        $('.popup-form').show(300).addClass('visibleit');
        $('.cus-overlay').fadeIn(300);
    })

    $('a.close').click(function() {
        $('.cus-overlay').trigger('click');
    });

    $('a.close').click(function() {
        $('.cus-overlay').trigger('click');
    });


    $('.cus-overlay').click(function() {
        $(this).fadeOut(300);
        $('.popup-form').removeClass('visibleit');
        $('.popup-form').fadeOut();
        $('#popupformLead2').fadeOut();
        $('#ouibounce-modal').fadeOut(200);
        $('.floating-form-wrap').animate({'margin-right': '-584px'})
    })

    $('.floating-form-wrap .form-handle, #slideform').click(function() {
        if ($('.floating-form-wrap').css('margin-right') == '-584px') {
            $('.floating-form-wrap').animate({
                'margin-right': '0px'
            })
            $('.cus-overlay').fadeIn(300);
        } else {
            $('.floating-form-wrap').animate({
                'margin-right': '-584px'
            })
            $('.cus-overlay').fadeOut(300);
        }
    });

    $('.floating-banner').hover(function() {
        $('.floating-banner').stop(1, 1).animate({
            'margin-left': '0px'
        }, 200);
        $('.cus-overlay').stop(1, 1).fadeIn(200);
    }, function() {
        $('.floating-banner').animate({
            'margin-left': '-610px'
        }, 200);
        $('.cus-overlay').fadeOut(200);
    });



});


$(document).ready(function(e) {



            $('#header-testimonial').owlCarousel({
               loop:true,
               margin:10,
               nav:false,
               dots:true,
               items:1,
               responsive:{
                  0:{
                     dots:false,
                     margin:0,
                  },
                  600:{
                     items:1,
                     dots:true
                  },
                  1000:{
                     items:1
                  }

               }
            });

          $('#pricing-carosul').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            dots:false,

            responsive:{
              0:{
                items:1,
                     nav:false,
                     dots:true,
                     margin:0,
              },
              600:{
                items:2,
                     nav:false,
                     dots:true
              },
              1000:{
                items:3
              }

            }
          });

          $('#pricing-carosul2').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            dots:false,

            responsive:{
              0:{
                items:1,
                     nav:false,
                     dots:true,
                     margin:0,
              },
              600:{
                items:2,
                     nav:false,
                     dots:true
              },
              1000:{
                items:3
              }

            }
          });
          $('#pricing-carosul3').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            dots:false,

            responsive:{
              0:{
                items:1,
                     nav:false,
                     dots:true,
                     margin:0,
              },
              600:{
                items:2,
                     nav:false,
                     dots:true
              },
              1000:{
                items:3
              }

            }
          });$('#pricing-carosul4').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            dots:false,

            responsive:{
              0:{
                items:1,
                     nav:false,
                     dots:true,
                     margin:0,
              },
              600:{
                items:2,
                     nav:false,
                     dots:true
              },
              1000:{
                items:3
              }

            }
          });$('#pricing-carosul5').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            dots:false,

            responsive:{
              0:{
                items:1,
                     nav:false,
                     dots:true,
                     margin:0,
              },
              600:{
                items:2,
                     nav:false,
                     dots:true
              },
              1000:{
                items:3
              }

            }
          });

            $('#testimonial').owlCarousel({
               loop:true,
               margin:10,
               nav:false,
               dots:false,
               responsive:{
                  0:{
                     items:1,
                     dots:true
                  },
                  600:{
                     items:2,
                     dots:true
                  },
                  1000:{
                     items:3
                  }
               }
            });

            var checkWidth = $(document).width();
            if(checkWidth <=767){
               $('#process-carosul').owlCarousel({
                  dots:true,
                  items:1,
                   responsive:{
                     0:{
                        items:1,
                        dots:true
                     },
                     600:{
                        items:1,
                        dots:true
                     },
                     1000:{
                        items:3
                     }
                  }
               });
               $('#combo-box').owlCarousel({
                  dots:true,
                  nav: false,
                  items:1,
                   responsive:{
                     0:{
                        items:1,
                        dots:true
                     },
                     600:{
                        items:1,
                        dots:true
                     },
                     1000:{
                        items:3
                     }
                  }
               });
            }



         });

    // $(window).scroll(function(){
    //     var topPlusWindowSize = $(window).scrollTop()+ $( window ).height();
    //
    //     if( $('.floating-form-wrap')[0] && $('.side-bars')[0] ){
    //         var headerHeight = $( '.header-wrap' ).height()-140;
    //         if ( ( $(window).scrollTop() >= headerHeight  ) ){
    //             $('.floating-form-wrap, .side-bars').fadeIn( 300 );
    //             $('.floating-banner').fadeIn(300);
    //             $('.black-img').fadeIn(300);
    //         }
    //         else {
    //             $('.floating-form-wrap, .side-bars').fadeOut( 300 );
    //             $('.floating-banner').fadeOut(300);
    //             $('.black-img').fadeOut(300);
    //         }
    //     }
    // });//window scroll end
    // $(window).scroll(function () {
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 200) {
    //         $('.floating-form-wrap, .side-bars').fadeIn(300);
    //     }
    //     if (scroll <= 200) {
    //         $('.floating-form-wrap, .side-bars').fadeOut(300);
    //         $('.cus-overlay').fadeOut(200);
    //     }
    // });




});
      </script>



      <section id="popupformLead"  class="popup-form">
         <div class="formcontainer">
            <div class="tophead">
               <h2 style="margin-bottom: 2rem;">START YOUR PROJECT</h2>
            </div>
            <div id="popupform" class="inform">
               <form  id="PopopForm" class="jform clearfix" action="webpages/bannerFormController.php" method="post">
                  
                  <div class="field">
                     <input type="text" name="Name" maxlength="60" value="" placeholder="Name" class="required alphanumeric iecn" required>
                  </div>
                  <div class="field">
                     <input type="text" name="Email" maxlength="60" value="" placeholder="Email" class="required email " required>
                  </div>
                  <div class="field phone">
                     <input type="text" maxlength="25" minlength="7" name="Number" value="" placeholder="Phone Number" class="required number" required>
                  </div>
                  <div class="field">
                     <textarea name="Message" class="required iemsg" rows="4" placeholder="Name on the Logo and Design Preferences"></textarea>
                  </div>
                  <div class="clearfix fieldwrap text-center pop-btn">
                     <div class="clearfix"></div>
                     <div id="PopopFormResult"></div>
                     <input type="hidden" name="hiddencapcha">
                     <input type="Submit" class="" value="Submit" />
                  </div>
               </form>
            </div>
         </div>
      </section>
      <div class="cus-overlay"></div>

   <script type="text/javascript">
     
     $(function() {
    $('#offerForm').submit(function() {

          // var namevalue=$(".banner-inp-name").val();
          // var emailvalue=$(".banner-inp-email").val();
          // var phonevalue=$(".banner-inp-phone").val();

        $.ajax({
            type: 'POST',
            url: 'webpages/topFormController.php',
            data: $(this).serialize(),
            error: function()
            {
               alert("Request Failed");
            },
            success: function(response)
            {  console.log(response);

              $("#offerFormResult").fadeIn();
              
              $("#offerForm input[type='text']").val("");
              $("#offerForm input[type='email']").val("");
              $("#offerForm input[type='Number']").val("");
              $("#offerForm input[type='hidden']").val("");

              // console.log(namevalue);
              // console.log(emailvalue);
              // console.log(phonevalue);

              // $('html, body').animate({
              //     scrollTop: $("#cta-section").offset().top
              // }, 1000);

              // $(".footer-inp-name").val(namevalue);
              // $(".footer-inp-email").val(emailvalue);
              // $(".footer-inp-phone").val(phonevalue);
            //   $("#contactForm").find("#projdescrip").focus();

               //EXECUTE ANIMATION HERE
                  // var a=  $("#offerForm input[type='hidden']").val();
                

            } // this was missing


        });
        return false;
    }); 
})
let ip;
 $("#phone-country,#phone-coun,#pro-phone").intlTelInput({
     
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
   geoIpLookup: function(callback) {
  $.ajax({
      url: 'https://telize-v1.p.mashape.com/geoip',
      type: 'GET',
      data: {},
      dataType: 'json',
      success: function (data) {
         console.log(data);
        var countryCode = (data && data.country_code ) ? data.country_code : "";
      
        callback(countryCode);
      ip=data.ip;

      
      },
      error: function (err) {
        //alert("")
      },
      beforeSend: function (xhr) {
        xhr.setRequestHeader("X-Mashape-Authorization", "qKsg8tYMdTmshjZ0eSZznAWBhwOFp1huvy7jsnNg3rhw4x8SGD"); // Enter here your Mashape key
      }
    }); 
     },
       initialCountry: "auto",
       nationalMode: true,
       separateDialCode: true,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
     // utilsScript: "<?php echo $basesurl;?>js/utils.js"
    });


setTimeout(function(){ 
console.log(ip);
    
   $('input[name="cip"]').val(ip);
   
}, 3000);

   </script>
   
   <script type="text/javascript">
   window._mfq = window._mfq || [];
   (function() {
       var mf = document.createElement("script");
       mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/2a63c770-2d96-41ed-98ac-9e0fd4567c13.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>