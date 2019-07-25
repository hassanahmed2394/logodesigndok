<footer>
         <div class="footer-top">
            <div class="container">
               <h3>READY TO GIVE YOUR business</h3>
               <h2>THE PERFECT DIRECTION?</h2>
               <div class="row">
                  <div class="col-md-7 col-sm-7 col-xs-12 contact-form">
                     <form  id="contactForm"class="jform" action="" method="post">
                        <input type="hidden" class="form-hidden" value="" id="url4" name="url4" />  
                        <input type="hidden" name="text" id="" value="THE PERFECT DIRECTION?">
                        <input type="hidden" name="contactFrom" value="1">
                        <div class="name">
                           <input type="text" name="cname" placeholder="Name" class="iecn alphanumeric contact-field" required>
                        </div>
                        <div class="email">
                           <input type="email" name="cemail" placeholder="Email" class="email contact-field" required>
                        </div>
                        <div class="phone">
                           <input type="text" name="cphone" minlength="7" placeholder="Phone" class="number contact-field" required>
                        </div>
                        <div class="mxg field">
                           <textarea name="cmsg" class="iemsg contact-field" rows="4"
                              placeholder="Name on the Logo and Design Preferences" required></textarea>
                        </div>
                        <div>
                           <div id="contactFormResult"></div>
                           <input type="submit" class="btn-orangedark red-btn" value="SEND" style="margin-right: 0px !important">
                        </div>
                     </form>
                  </div>
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


<div class="floatbutton">
  <div class="clickbutton"><div class="crossplus"></div></div>
  <div class="banner-form">

    <h3>Chat With Us to <br>Avail 75% Discount</h3>
    <?php
    $bannerform = $_SERVER['HTTP_HOST']; 
    $bannerform = $srcurl."bannerform.php"; 
    include($bannerform); 
    ?>
  </div>
</div>


</main>


<script src="<?php echo $basesurl;?>js/mlib.js"></script> 



<script src="<?php echo $basesurl;?>js/functions.js"></script> 


<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=55f6e65c-9a6d-4fe6-b262-e32976eb64eb"> </script>
<!-- End of  Zendesk Widget script -->


<script type="text/javascript">
function setButtonURL(){
  javascript:$zopim.livechat.window.show();
  }

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.1.2/jquery.bxslider.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/JQuery-Snowfall/1.7.4/snowfall.jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

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
            loop:true,
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