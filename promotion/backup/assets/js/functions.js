

// wow start
new WOW().init();
// wow end

// sticky social
$(document).scroll(function () {
	"use strict";
    var y = $(this).scrollTop();
    if (y > 200) {
        $('.sticky-container').fadeIn();
    } else {
        $('.sticky-container').fadeOut();
    }

    if (y > 500) {
      $('.floating_wrap').addClass('visible');
        $('.floatbutton').addClass('visible');
        
        
    } else {
      $('.floating_wrap').removeClass('visible');
        $('.floatbutton').removeClass('visible');
        
    }

   

    

}); 
// sticky social end



$(document).ready(function() {
"use strict";




    


   //*****************************
    // Mobile Navigation
    //*****************************
    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
    });


    $('.firstlevel li a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).siblings('ul').slideUp();
        }else{
            $('.firstlevel li a').removeClass('active');
            $(this).addClass('active');
            $('.dropdown').slideUp();
            $(this).siblings('ul').slideDown();
        }
    });

    $('.mainnav > li > a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).parents('li').children('.firstlevel').slideUp();
        }else{
            $(this).addClass('active');
            $(this).parents('li').children('.firstlevel').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.firstlevel').slideUp();
        }
    }); 

     

$(".banlogslider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    arrows: false,
    autoplay: true,
    
    cssEase: 'linear'

});

$(".bxslick").slick({
    dots: true,
    infinite: true,
    speed: 500,
    arrows: true,
    autoplay: false,
    // autoplaySpeed:100,
    vertical:true

    

});



$(".banslidee").slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: false,
    fade: true,
    autoplay: true,
    speed: 1000,
    cssEase: 'linear'

});
$(".packagesslider").slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: true,
    slidesToShow:3,
    slidesToScroll:1,
    autoplay: false,
    

});
$('.testslider').slick({
  infinite: true,
  slidesToShow: 2,
  arrows:true,
  dots:false,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
    // dots: true,
    //     arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        dots:true,
      }
    }
  ]

});


if ($(window).width() < 767) {
   $('.portfoliolist').slick({
  arrows:true,
        dots:false,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
}



$('.coslider').slick({
    arrows: false,
    dots: false,
    autoplay: true,
    vertical: true,
    autoplaySpeed: 3000
});


$(function() {
  function slickInit() {
    $('').slick({
      infinite: false,
      slidesToShow: 3,
      arrows:true,
      dots:false,
      slidesToScroll: 1,
      responsive: [
    {
      breakpoint: 768,
      settings: {
    // dots: true,
    //     arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        dots:true,
      }
    }
  ]

    });
  }
  slickInit();
  $('a[data-toggle="pill"]').on("shown.bs.tab", function(e) {
    $(".packagesslider").slick("setPosition");
    slickInit();
    $('.portfoliolist').slick('setPosition');
  });

  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
});

 

//*****************************
    // Tabbing 
    //*****************************
    
    $('[data-targetit]').on('click',function () {
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        var target = $(this).data('targetit');
        $('.'+target).siblings('[class^="tabs"]').removeClass('current');
        $('.'+target).addClass('current');
        $('.slick-slider').slick('setPosition', 0);

    });




function getURLParameter(name) {
      return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
    }
    var a=getURLParameter('pack');

    $('#packages option:eq('+ a +')').prop('selected', true);

// var val = location.href.match(/[?&]days=(.*?)(?:$|&)/)[1];   // get params from URL
// $('#days').val(val); 



////// tabs generic (nav and tabs in main div)
$('.tab-custom .tab-custom-nav a').click(function(event){
$(this).closest('li').siblings('li').children('a').removeClass('current');
$(this).addClass('current');
$(this).closest('.tab-custom').children('div.tab-content-panel:not(:hidden)').hide();
$(this.hash).show();
event.preventDefault();
$('.sliderxs').slick('setPosition');
});
////// tabs generic end

////// tabs custom (place nav and tabs anywhere separately)
$('.tabs-custom-nav a').click(function(event){
$(this).closest('li').siblings('li').children('a').removeClass('current');
$(this).addClass('current');
$(this.hash).closest('.general').children('div.tab-content-panel:not(:hidden)').hide();
$(this.hash).show();
event.preventDefault();
$('.sliderxs').slick('setPosition');
});
////// tabs custom end

////// Accordion 
$('.accordion .quest-title.active1').addClass('active');
// $('#accordion-1').slideDown(300).addClass('open');
function close_accordion_section() {
jQuery('.accordion .quest-title').removeClass('active');
jQuery('.accordion .quest-content').slideUp(300).removeClass('open');
}
jQuery('.quest-title').click(function(e) {
// Grab current anchor value
var currentAttrValue = jQuery(this).attr('href');
if(jQuery(e.target).is('.active')) {
close_accordion_section();
}else {
close_accordion_section();
// Add active class to section title
jQuery(this).addClass('active');
// Open up the hidden content panel
jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
}
e.preventDefault();
});
////// Accordion end 

////// fancybox
$('[data-fancybox="swf-file"]').fancybox({
	iframe : {
		css : {
			width : '336px',
			height : '280px'
		}
	}
});

$('[data-fancybox="video-file"]').fancybox({
	iframe : {
		css : {
			width : '580px',
			height : '340px'
		}
	}
});		
////// fancybox end

// intel Tel Input

 $("#phone-country,#phone-coun").intlTelInput({
     
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
        var countryCode = (data && data.country_code) ? data.country_code : "";
        
        callback(countryCode);
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
    $('input[name="pc"]').val($('.selected-dial-code').text());
    $('input[name="ctry"]').val( $('.country-list .country.active .country-name').text());
}, 3000);


$('body').delegate('.country','click',function(){
$('input[name="pc"]').val($(this).find('.dial-code').text());

var oldString2=$('.selected-flag').attr('title').toUpperCase();
  var newString12 = oldString2.split(':',1)[0];
               $('input[name="ctry"]').val(newString12);
 });

 



}); // document ready end
 


// validate contact form on keyup and submit
    $("#banform").validate({
      rules: {
        username: {
          required: true,
          minlength: 2
        },
        email: {
          required: true,
          email: true
        },
        agree: "required"
      },
      messages: {
        username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        email: "Please enter a valid email address"
      }
    });

    $("#contactForm").validate();



////// footer year
$(function(){
"use strict";
var theYear = new Date().getFullYear();
$('#year').html(theYear);
});	


function setButtonURL(){
 javascript:$zopim.livechat.window.show();
 }

$(function(){
//Slim Scroller
    
        $.mCustomScrollbar.defaults.theme="light-1"; //set "light-2" as the default theme
        $(".list-scroll,.subscription-list").mCustomScrollbar({
            scrollButtons:{
                enable:true
            },
            callbacks:{
                onTotalScroll:function(){ addContent(this) },
                onTotalScrollOffset:100,
                alwaysTriggerOffsets:false
            }
        });

    
}); 





$(document).ready(function(){
    $(".clickbutton").click(function(){
        $('.floatbutton').toggleClass("active");
        $('.crossplus').toggleClass("rotate");
    });

    $(".topformswitch").click(function(){
        $('.topformwrap').toggleClass("active");
    });
    $(".mymy").click(function(){
        $('.floatbutton').toggleClass("active");
    });
});
