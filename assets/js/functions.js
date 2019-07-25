


// $(window).on("load", function () {
//     setTimeout(function () { $('.stiky_foter').addClass('run'); }, 500);

// });


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

(function () {

  var dotsCount = 1;

  function getDotsSlick() {
    var img =  '<p> ' + $(".dots-url:nth-child("+ dotsCount +")").attr('data-url') +'</p>';
    dotsCount++;
    return img;

  }

$(".topformswitch").click(function(){
        $('.topformwrap').toggleClass("active");
    });

$(".linddbtn").click(function(){
        $('.stiky_foter').addClass("run");
    });

$(".popupform form .lst-p a").click(function(){
        $('.ys-layer').removeClass("visible");
        $('.ys-container').removeClass("visible");
    });




// $(".src-component-launcher-ChatBadge-minimizeButton").click(function(){
//         // $('.stiky_foter').addClass("run");
//         alert('click');
//     });



$(".phrases").slick({
   dots: true,
   slidesToShow:1,
   draggable:false,
   dotsClass: 'clients',
    adaptiveHeight: true,
   customPaging : function(slider, i) {
     return getDotsSlick();
   },
 });

$(".phrase-inner").slick({
   slidesToShow:1,
   slidesToScroll: 1,
   arrows: true,
    dots: true,
   infinite: true,
 //   autoplay: true,
 // autoplaySpeed: 2000,





 });
 
 $(".slidlogo").slick({
   slidesToShow:1,
   slidesToScroll: 1,
   arrows: true,
    dots: true,
   infinite: false,
 //   autoplay: true,
 // autoplaySpeed: 2000,

 });

$(".mobile_logo").slick({
   slidesToShow:1,
   slidesToScroll: 1,
   arrows: true,
    dots: false,
   infinite: false,
 //   autoplay: true,
 // autoplaySpeed: 2000,

 });
 
 

  function sliderPadding() {
    var conW = $('.container').width();
    var winW = document.body.clientWidth;
    var res  = winW - conW;
    return res/2;
  }



  $('.popular-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    useTransform: true,
    customPadding: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
      }
    ]
  });


size_video = $(".loadmorevideo .app-item").length;
    x=8;
    $('.loadmorevideo .app-item:lt('+x+')').show();
    $('#loadMorevideo').click(function () {

        x= (x+4 <= size_video) ? x+4 : size_video;
        if(x==size_video){
          $("#loadMore").hide();
        }
        $('.loadMorevideo .app-item:lt('+x+')').slideDown();
    });


      size_3dv = $(".loadmore3d .app-item").length;
    threed_size=8;
    $('.loadmore3d .app-item:lt('+threed_size+')').show();
    $('#load3dmore').click(function () {

        threed_size= (threed_size+4 <= size_3dv) ? threed_size+4 : size_3dv;
        if(threed_size==size_3dv){
          $("#load3dmore").hide();
        }
        $('.loadmore3d .app-item:lt('+threed_size+')').slideDown();
    });

    size_branding = $(".loadmorebranding .app-item").length;
    threed_size=8;
    $('.loadmorebranding .app-item:lt('+threed_size+')').show();
    $('#loadMorebranding').click(function () {

        threed_size= (threed_size+4 <= size_branding) ? threed_size+4 : size_branding;
        if(threed_size==size_branding){
          $("#loadMorebranding").hide();
        }
        $('.loadmorebranding .app-item:lt('+threed_size+')').slideDown();
    });

size_logo = $(".loadmorelogo .app-item").length;
    threed_size=8;
    $('.loadmorelogo .app-item:lt('+threed_size+')').show();
    $('#loadMorelogo').click(function () {

        threed_size= (threed_size+4 <= size_logo) ? threed_size+4 : size_logo;
        if(threed_size==size_logo){
          $("#loadMorelogo").hide();
        }
        $('.loadmorelogo .app-item:lt('+threed_size+')').slideDown();
    });

    size_website = $(".loadmoreweb .app-item").length;
    threed_size=8;
    $('.loadmoreweb .app-item:lt('+threed_size+')').show();
    $('#loadMoreweb').click(function () {

        threed_size= (threed_size+4 <= size_website) ? threed_size+4 : size_website;
        if(threed_size==size_website){
          $("#loadMoreweb").hide();
        }
        $('.loadmoreweb .app-item:lt('+threed_size+')').slideDown();
    });


    size_mobile = $(".loadmoremob .app-item").length;
    threed_size=8;
    $('.loadmoremob .app-item:lt('+threed_size+')').show();
    $('#loadMoremob').click(function () {

        threed_size= (threed_size+4 <= size_mobile) ? threed_size+4 : size_mobile;
        if(threed_size==size_mobile){
          $("#loadMoremob").hide();
        }
        $('.loadmoremob .app-item:lt('+threed_size+')').slideDown();
    });


        size_allport = $(".loadmoreallport .app-item").length;
    threed_size=8;
    $('.loadmoreallport .app-item:lt('+threed_size+')').show();
    $('#loadmoreallport').click(function () {

        threed_size= (threed_size+4 <= size_allport) ? threed_size+4 : size_allport;
        if(threed_size==size_allport){
          $("#loadmoreallport").hide();
        }
        $('.loadmoreallport .app-item:lt('+threed_size+')').slideDown();
    });








    $('.team-foto').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,
        arrows: false,
        initialSlide: 2,
        
    });
    $('.mybanslider').slick({
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
    $('.promotion_logo_slide').slick({
      dots: false,
      arrows:false,
      infinite: true,
      speed: 500,
      autoplay:true,
      fade: true,
      cssEase: 'linear'
    });


    $('.seo-result-slide').slick({
      slidesToShow: 1,
    slidesToScroll: 1,
      dots: false,
      arrows:false,
      infinite: true,
      autoplay:true
    });
      
      

  setTimeout(function () {
    aspectWidthHeight('.popular-article .item');
  },1000);

  $('.company-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
     centerMode: true,
    centerPadding: '150px',
    customPadding: true,
    useTransform: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerMode: true,
          centerPadding: '75px',
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  var $carouselPopular = $('.popular-slider');
  var $carouselCompany = $('.company-slider');
  $(document).on('keydown', function(e) {
    if(e.keyCode == 37) {
      $carouselPopular.slick('slickPrev');
      $carouselCompany.slick('slickPrev');
    }
    if(e.keyCode == 39) {
      $carouselPopular.slick('slickNext');
      $carouselCompany.slick('slickNext');
    }
  });

  $('.header-blog .logo-link span').on('click',function (e) {
    e.preventDefault();
    window.location.href = templateUrl.home + '/blog';
  });

    $(window).on('resize',function () {
        $('.popular-slider .slick-list').css('padding','0px ' + sliderPadding() + 'px');
        $('.company-slider .slick-list').css('padding','0px ' + sliderPadding() + 'px');
        aspectWidthHeight('.popular-article .item');
    });

    // $('.company-slider').slick('slickGoTo', 1);

    // init slider for mobile
    if(window.matchMedia('(max-width: 544px)').matches)
    {
        // $(".m-app-slider").slick({
        //   dots: true,
        // });
        $(".m-book-slider").slick({
          dots: true,
        });
        $(".tags").slick({
          speed: 300,
          infinite: false,
          variableWidth: true,
          slidesToScroll: 2,
          touchThreshold: 20
        });
         $(".subimages").slick({
          infinite: false,
          variableWidth: true,
          slidesToShow:1,
          slidesToScroll: 1,
          autoplay:true,
        });
        
        $(".tabbing-links").slick({
          speed: 300,
          infinite: false,
          variableWidth: true,
          slidesToScroll: 2,
          touchThreshold: 20
        });
        // $(".multiple-slide").slick({
        //   speed: 300,
        //   infinite: false,
        //   variableWidth: true,
        //   slidesToShow:2,
        //   slidesToScroll: 1,
        //   touchThreshold: 20
        // });

        $("footer h3 i.fa").click(function(){
        $(this).parent().next().slideToggle();
        $(this).toggleClass("fa-minus-square-o");
        });


       

    }


  $(".listsec .wrap h3 i.fa").click(function(){
        $(this).parent().next().slideToggle();
        $(this).toggleClass("fa-minus-square-o");
        });


    // fix for blog page "padding for slider"

    $('.popular-slider .slick-list, .company-slider .slick-list').css('padding-left', (document.body.clientWidth-$('.container').width())/2);
    $('.popular-slider .slick-list, .company-slider .slick-list').css('padding-right', (document.body.clientWidth-$('.container').width())/2);

    $( window ).on('resize',function() {
      $('.popular-slider .slick-list, .company-slider .slick-list').css('padding-left', (document.body.clientWidth-$('.container').width())/2);
      $('.popular-slider .slick-list, .company-slider .slick-list').css('padding-right', (document.body.clientWidth-$('.container').width())/2);
    });

    //END fix for blog page "padding for slider"
    


    // trigger for mobile menu

    $('.hamburger').click(function(){
      $('.hamburger').toggleClass('is-active');
      $('.menu').toggleClass('show');
      $('body').toggleClass('overflow-h');
    });

    // END trigger for mobile menu


    // scroll to anchor

    function scrollToDesignDok(selector,elem,offset) {
      $(selector).click(function() {
        $('html, body').animate({
          scrollTop: $(elem).offset().top - offset
        }, 1000);
      });
    }
    
    $('#contactForm').submit(function() {
        $('select').removeAttr('disabled');
    });

    if(window.location.hash && $('.page-template-services').length > 0) {
      var stringHash = window.location.hash;
      var hashSymbol = stringHash.replace(/#/g, ".");
      $('html, body').animate({
        scrollTop: $(hashSymbol).offset().top - 120
      }, 500);
    }

    $(".js-modal-btn").modalVideo();
    $(".js-modal-btn-vimeo").modalVideo({channel:'vimeo'});

    // scrollToDesignDok('#hire-us','.contacts', 0);
    scrollToDesignDok('.arrow-down','.applications', 0);
    scrollToDesignDok('.ar-team','.company-team-block', 150);
    scrollToDesignDok('.ar-joinus','.company-join-block',0);
    scrollToDesignDok('.services-top .default-ar','.services-how',0);
    scrollToDesignDok('.services-top .logo','.services-list .item-1',120);
    scrollToDesignDok('.services-top .web','.services-list .item-2',120);
    scrollToDesignDok('.services-top .mobile-apps','.services-list .item-3',120);
    scrollToDesignDok('.services-top .branding','.services-list .item-4',120);
    scrollToDesignDok('.services-top .motion','.services-list .item-5',120);

    scrollToDesignDok('.check-price','.contact-form',120);
    scrollToDesignDok('.price-simple__info','.contact-form',300);
    scrollToDesignDok('.hire','.contact-form',120);
    scrollToDesignDok('.gotoform','.contacts',120);

    scrollToDesignDok('.mobile-apps','#service-2',120);
    // scrollToDesignDok('.logo','.contacts',120);
    // scrollToDesignDok('.gotofaqs','.next-page',120);
    

    //END scroll to anchor

  // Contact form 


  if($( ".contact-form input[name='username']" ).val()) {
    $( ".contact-form input[name='username']" ).parent().addClass('no-empty');
  } else {
    $( ".contact-form input[name='username']" ).parent().removeClass('no-empty');
  }

  if($( ".contact-form input[name='email']" ).val()) {
    $( ".contact-form input[name='email']" ).parent().addClass('no-empty');
  } else {
    $( ".contact-form input[name='email']" ).parent().removeClass('no-empty');
  }

  if($( ".contact-form textarea[name='detail']" ).val()) {
    $( ".contact-form textarea[name='detail']" ).parent().addClass('no-empty');
  } else {
    $( ".contact-form textarea[name='detail']" ).parent().removeClass('no-empty');
  }

  // if($(window).width() > 992 && $('.page-template-blog').length < 1) {
  //     if(templateUrl.mac == 'yes') {
  //         $("html").easeScroll({stepSize:60});
  //     } else {
  //         $("html").easeScroll();
  //     }
  // }


// $(window).scroll(function () {
//      if ($(this).scrollTop() > 50) {
//         if($('.floatbutton').hasClass('notshow')){

//     }else{
//       $('.floatbutton').addClass('active'); $('.floatbutton').addClass('notshow');
//     }

//      } else {

//      }

//    });


// $(window).load(function(){
//         alert('b');
// });


    $( ".contact-form input,.contact-form textarea" ).blur(function() {
    if($(this).val()) {
      $(this).parent().addClass('no-empty');
    } else {
      $(this).parent().removeClass('no-empty');
    }
  });

  $( ".contact-form input,.contact-form textarea" ).focus(function() {
      $(this).parent().addClass('no-empty');
  });

  if ($('textarea.autoheight').length) {
    $('textarea.autoheight').each(function (i, textarea) {
        var pad = parseInt($(textarea).css('padding-top'), 10) + parseInt($(textarea).css('padding-bottom'), 10);

        function updateHeight() {
            setTimeout(function () {
                textarea.style.height = 'auto';
                textarea.style.height = textarea.scrollHeight + pad-36 + 'px';
            }, 0);

        }

        $(textarea).keydown(updateHeight).keyup(updateHeight);
        updateHeight();
    });
  }

  //gereration user id to make every letter individualy
  $('#user-id').val(Date.now());
  

  //END Contact form 


    // header trigger "squeeze on scroll"

    // $(window).scroll(function () {
    //   if ($(this).scrollTop() > 300) {

    //     $('.floatbutton').addClass('active');
    //     $('.crossplus').addClass('rotate');


    //   } else {

    //      $('.floatbutton').removeClass('active');
    //     $('.crossplus').removeClass('rotate');
    //   }

    // });


       $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {

        $('.header-home, .header-blog').addClass('squeeze');
        $('.home__bottom-bar').addClass('slide-out');
      } else {
        $('.header-home, .header-blog').removeClass('squeeze');
        $('.home__bottom-bar').removeClass('slide-out');
      }

    });

    $('.next-page-wrap').on('mouseover',function () {
      $(this).css('cursor','auto');
    });
    $('.next-page-wrap').on('mouseup',function () {
      $(this).css('cursor','../images/next-page.svg');
    });
    function isInViewport(element) {
      var rect = element.getBoundingClientRect();
      var html = document.documentElement;
      return (
          rect.bottom >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || html.clientHeight) &&
          rect.right <= (window.innerWidth || html.clientWidth)
      );
    }

    // if ($('.home').length > 0) {
    //   window.addEventListener('scroll', function (ev) {

    //     if (isInViewport(document.querySelector('.top-home'))) {
    //       $('.header-home').removeClass('fill');
    //     } else {
    //       $('.header-home').addClass('fill');
    //     }
    //     ;

    //   });
    // }

    // END header trigger "squeeze on scroll"


    function aspectWidthHeight(selector) {
      $(selector).css('height', $(selector).innerWidth() + 'px');
    }

    $(window).on('resize load',function () {
      aspectWidthHeight('.last-article .big-article');
      aspectWidthHeight('.last-article .small-article .for-image');

      aspectWidthHeight('.bottom-article .for-image');
    });

    $('.header-blog .search').on('click',function () {
      if($(window).width() > 1024) {
        $('.search-input').focus();
      }
    });
    $('.header-blog .search,.blog-search .close-search').on('click',function (e) {
      $('.blog-search').toggleClass('blog-search-active');
      $('section, header').toggleClass('search-blur');
      $('body').toggleClass('overflow-h');
    });


    $(window).on('load resize',function () {
      $('.for-live-search').css('max-height', document.body.clientHeight - $('.container-p').innerHeight() + 'px');
    });

    $('.blog-search .word-for-search span').on('click',function (e) {
      var word = $(this).html();
      $('.search-input').val(word).keyup()
    });

    $('.search-input').on('keyup',function (e) {

      var word = $(this).val();
      if(word.length < 3) {
        return
      }
      var block = $('.for-live-search');
      var template = _.template($('#live-search').html());
      
      setTimeout(function(){

      
      $.ajax({
        url      : templateUrl.url + '/livesearch.php',
        type     : 'post',
        data     : 'word=' + word,
        dataType : 'json',
        success  : function (data) {
          
          $('.for-live-search').html('');

         
          if(data.length != 0) {
            console.log(data);
            block.append(template({data: data,error: false, word: word}));
          } else {
            block.append(template({data: data,error: true, word: word}));
          }

          TweenMax.staggerFromTo($('.live-search-block,.live-search-bottom'), 1,
            {
              y: '200',
              opacity: 0,
              ease:Power3.easeOut,
            },
            {
              y: '0',
              opacity: 1,
              ease:Power3.easeOut,
              delay: 0
            },0.1);

        }
      });

      
    },700);


      if(e.which == 13) {
        $('#searchform').submit();
      }
    });

  var homeController2 = new ScrollMagic.Controller();

  $('.app-item').each(function(i,el){
    if($('.home, .page-template-works').length > 0 && $(window).width() > 767 )
      var currentElement = this;
    var offset = document.body.clientHeight/2 - document.body.clientHeight
    var $content = $(this).find('.content');
    var delay;
    i--;
    if (i % 2 === 0) {
      delay = 0.15;
    } else {
      delay = 0.3;
    }

    var worksList = new ScrollMagic.Scene({
      triggerElement: currentElement,
      offset: offset + 50,
      reverse: false
    }).setTween(TweenMax.fromTo($(this),1,
        {
          y: 200,
          opacity: 0,
          ease:Power4.easeOut,
        },
        {
          y:0,
          opacity: 1,
          ease:Power4.easeOut,
          delay:delay,
          onComplete: function () {
            TweenMax.fromTo($content,1,
                {
                  opacity:0,
                  ease:Power3.easeOut,
                },
                {
                  opacity:1,
                  ease:Power3.easeOut,
                }
            )
          }
        },0.15)).addTo(homeController2);
  });

    $('.works__tags a').on('click tap',function (e) {
      e.preventDefault();
      $('.works__tags a').removeClass('active');
      $(this).addClass('active');
   
      var word = $(this).attr('data-cat');

      var all = $(this).hasClass('all') ? '&all_works=dvvd' : '';

      console.log('search_works=' + word + all);
   
      var block = $('.for-works-load');
      var template = _.template($('#filter-works').html());
      $.ajax({
        url      : templateUrl.url + '/livesearch.php',
        type     : 'post',
        data     : 'search_works=' + word + all,
        dataType : 'json',
        success  : function (data) {
          homeController2.destroy();
          $('.for-works-load').html('');
            block.append(template({data: data,error: false}));
   
            var workController = new ScrollMagic.Controller();

          $('.app-item').each(function(i,el){
              var currentElement = this;
            var offset = document.body.clientHeight/2 - document.body.clientHeight
            var $content = $(this).find('.content');
            var delay;
            i--;
            if (i % 2 === 0) {
              delay = 0.15;
            } else {
              delay = 0.3;
            }

            var worksList = new ScrollMagic.Scene({
              triggerElement: currentElement,
              offset: offset + 50,
              reverse: false
            }).setTween(TweenMax.fromTo($(this),1,
                {
                  y: 200,
                  opacity: 0,
                  ease:Power4.easeOut,
                },
                {
                  y:0,
                  opacity: 1,
                  ease:Power4.easeOut,
                  delay:delay,
                  onComplete: function () {
                    TweenMax.fromTo($content,1,
                        {
                          opacity:0,
                          ease:Power3.easeOut,
                        },
                        {
                          opacity:1,
                          ease:Power3.easeOut,
                        }
                    )
                  }
                },0.15)).addTo(workController);
          });
   
        }
      });
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
        $('.packslider').slick('setPosition');
        $('.testi_slider').slick('setPosition');
        //'$('.tabbing-links').slick('setPosition');
        
        
    });
    $(function(){
    //Slim Scroller

           $.mCustomScrollbar.defaults.theme="light-1"; //set "light-2" as the default theme
           $(".list-scroll,.scrollcontent,.subscription-list").mCustomScrollbar({
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

    ////// Accordion 
    $('.accordion .quest-title.active').addClass('active');
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


    
    $(".clickbutton").click(function(){
       $('.floatbutton').toggleClass("active");
       $('.crossplus').toggleClass("rotate");
    });

    $('.single-article .content p').each(function () {
      if($(this).find('img').length) {
        $(this).addClass('full');
      }
      if($(this).find('em').length) {
          $(this).addClass('full full-em');
      }
    });

    $('.single-article .content blockquote').each(function () {
      $(this).find('p').addClass('full');
    });

    $('.blog-subscribe').click(function() {
      $('html, body').animate({
        scrollTop: $(".subscribe-block-2").offset().top - document.body.clientHeight/2
      }, 2000);
    });
  if($('.single-article').length > 0) {
    $('.content p').each(function () {
        if($(this).children().length > 0 || $(this).html().trim().length > 6) {

        } else {
          $(this).css('display','none')
        }
    });
    $(window).on('scroll', function () {
      var hs = $('.content hr').offset().top;
      console.log(hs);
      console.log($(window).scrollTop());
      if (hs < $(window).scrollTop()) {
        $('.at4-share').addClass('at4-share-active');
        $('.at-share-dock-outer').addClass('at4-share-active-2');
      } else {
        $('.at-share-dock-outer').removeClass('at4-share-active-2');
        $('.at4-share').removeClass('at4-share-active');
      }

    });
  }

  $('#dog-color').on('keydown',function (e) {
    if(e.which == 13) {
      plastic.color.setHex('0x' + $(this).val());
    }
  });

  $('.top-home .content .bottom p').on('mouseenter', function(e) {
    $('.top-home .content .bottom .watch-button').addClass('watch-button-shadow');
  });
  $('.top-home .content .bottom p').on('mouseleave', function(e) {
    $('.top-home .content .bottom .watch-button').removeClass('watch-button-shadow');
  });

    


  function kFormatter(element) {
    $(element).each(function () {
      $(this).prop('.company-top .list .counter',0).animate({
        Counter: $(this).text()
      }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
          if(now > 999)  {
            $(element).html((now / 1000).toFixed(1).replace(/\.0$/, '') + 'K');
            // $('.counter .more').html('K');
          } else {
            $(this).text(Math.ceil(now));
          }
        }
      });
    });
  }

  kFormatter('.company-top .list .item:nth-child(1) .counter');
  kFormatter('.company-top .list .item:nth-child(2) .counter');
   kFormatter('.company-top .list .item:nth-child(3) .counter');
    kFormatter('.company-top .list .item:nth-child(4) .counter');
     kFormatter('.company-top .list .item:nth-child(5) .counter');



  function onHeight(arch, element) {
    var nav = $(element),
        animateTime = 500,
        navLink = $(arch);
        navLink.click(function(){
          if(nav.height() === 0){
            autoHeightAnimate(nav, animateTime);
          } else {
            nav.stop().animate({ height: '0' }, animateTime);
          }
        });
  }
  function autoHeightAnimate(element, time){
    var curHeight = element.height(), // Get Default Height
        autoHeight = element.css('height', 'auto').height(); // Get Auto Height
    element.height(curHeight); // Reset to Default Height
    element.stop().animate({ height: autoHeight }, time); // Animate to Auto Height
  }

  onHeight('.case-on-0','.case-block-0');
  onHeight('.case-on-1','.case-block-1');
  onHeight('.case-on-2','.case-block-2');
  onHeight('.case-on-3','.case-block-3');
  onHeight('.case-on-4','.case-block-4');


  $('.services-list .watch-button').on('click',function () {
    $(this).toggleClass('watch-button-active');
  });


  $(window).on('load resize',function () {
    if ($(window).width() < 768) {
      $('.services .information p span,.books .content .text span').css('display','inline');
    } else {
      $('.services .information p span,.books .content .text span').css('display','inline-block');
    }

  });


// attachment file
  $('.wpcf7-form').change(function(){

    var file = $('.wpcf7-form .file').val();
    if(file) {
      file = file.split("\\");
      $('.attach').addClass('attached');
      $('.wpcf7-form .attach-desc').html('Attached ' + file[file.length-1]);
    } else {
      $('.attach').removeClass('attached');
      $('.wpcf7-form .attach-desc').html('Attach file');
    }
    
  });



// next page hover arrow
$(document).scroll(function() {
  $('.next-page__link').removeClass('hover');
});

  $('.next-page__link').mouseover(function(){
    $('.next-page__link').addClass('hover');
  });

  $('.next-page__link').mouseout(function(){
    $('.next-page__link').removeClass('hover');
  });


 
   



  // var articleController = new ScrollMagic.Controller();
  // var backAnim = new TweenMax.fromTo($('.single .post-image'),1,
  //     {
  //       backgroundPosition:'0% 0%'
  //     },
  //     {
  //       backgroundPosition:'0% 0%'
  //     }
  // );
  //
  // var car = new ScrollMagic.Scene({
  //   triggerElement: '.single .post-image',
  //   duration: 2000,
  //   offset: -300
  // }).setTween(backAnim).addTo(articleController);

    $('.header-blog .black-button, .big-article img,.small-article img, .services-top .list .item, .services-top .list p, .watch-button, .default-ar, .vacancy-name').addClass('transition-DesignDok');
    $('.header-home .logo,.header-home .logo img, .menu a, .header-home, .header-home .menu ul li a, .header-blog, .biggest-article img, .header-blog .logo-link span, .header-blog .logo-link .logo').addClass('transition-DesignDok-300');
    // $('.header-home .logo,.header-home .logo img, .menu a').addClass('transition-DesignDok-500');



$('.packslider').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   arrows: true,
   infinite: false,
   dots:true,
responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
      }
    ]
  });
$('.testi_slider').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   infinite: false
 });



// add analitics to CF7
document.addEventListener( 'wpcf7mailsent', function( event ) {
  ga('send', 'event', 'mainpageform', 'sendrequest');
}, false );


// contact form on Price page

$('.basic-click').on('click',function(){
  $('.basic input').prop('checked', true);
});

$('.classic-click').click(function(){
  $('.classic input').prop('checked', true);
});
$('.magic-click').click(function(){
  $('.magic input').prop('checked', true);
});


$('.show-awards').click(()=>{
  $('.awards-table-wrap').toggleClass('show');
})



})();



(function(w) {
    "use strict";
    w.ysExit = function(o) {

        var defaults = {
                width: '40%', //popup width
                height: '', //popup height
                target: '#ys-container', //popup selector
                cookieValidity: 1, //days
                closeOnOutsideClick: true, //close popup if user clicks outside
                delay: 0, //delay in ms until the popup is registered
                debug: false //if true, the cookie will not be set
                
            },
            options = fixOptions(o),
            element = document.querySelector(options.target),
            layer   = document.querySelector('.ys-layer'),
            closeBt = document.querySelector(options.target + ' .ys-popup-close'),
            inner = document.querySelector(options.target + ' .ys-box'),
            exitBt = document.querySelector(options.target + ' .ys-exit'),

            //cookies management helper
            cookies = {
                set: function(name, value, days) {
                    var components = [name + '=' + value];

                    if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 3600 * 1000));
                        components.push('expires=' + date.toGMTString());
                    }
                    
                    components.push('path=/');

                    document.cookie = components.join('; ');
                },
                get: function(name) {
                    var start = name + '=',
                        arr = document.cookie.split(';'),
                        i;

                    for(i = 0; i < arr.length; i++) {
                        var item = arr[i].trim();
                        
                        if (item.indexOf(start) === 0){
                            return item.substring(start.length);
                        }
                    }

                    return null;
                }
            },
            //the popup object
            pop = {
                active: false,
                mouseLeftWindow: function(e) {
                    var from, to;
                    
                    e = e ? e : window.event;
                    from = e.relatedTarget || e.toElement;

                    if (!from || from.nodeName === "HTML") {
                        pop.open();
                    }
                },
                setDimension: function(dimension, value) {
                    if (value.toString().indexOf('%') === -1) {
                        value = value + 'px';
                    }
                    
                    inner.style[dimension] = value;
                },
                attachEvents: function() {
                    function close(e) {
                        pop.destroy();
                        e.preventDefault();
                    }
                    
                    document.addEventListener('mouseout', pop.mouseLeftWindow, false);
                    closeBt.addEventListener('click', close);
                    exitBt.addEventListener('click', close);
                    
                    if (options.closeOnOutsideClick) {
                        element.addEventListener('click', close);
                        inner.addEventListener('click', function(e) {
                            e.stopPropagation();
                        });
                    }
                    
                    this.active = true;
                },
                detachEvents: function() {
                    document.removeEventListener('mouseout', pop.mouseLeftWindow);
                },
                open: function() {
                    var self = this;
                    
                    element.classList.add('visible');
                    layer.classList.add('visible');
                    self.detachEvents();

                    setTimeout(function() {
                        self.setDimension('width', options.width);
                        self.setDimension('height', options.height);
                    }, 20);

                    setTimeout(function() {
                        element.classList.add('finished');
                    }, 200);
                },
                destroy: function() {
                    if (this.active) {
                        pop.detachEvents();

                        setTimeout(function () {
                            element.parentNode.removeChild(element);
                            layer.classList.remove('visible');
                        }, 200);
                        
                        if (!options.debug) {
                            cookies.set('ysExit', 1, options.cookieValidity);
                        }
                    }
                }
            };
        
        //helper functions
        function fixOptions(options) {
            var newOptions = {};
            
            Object.keys(defaults).forEach(function(key) {
                newOptions[key] = options.hasOwnProperty(key) ? options[key] : defaults[key];
            });
            
            return newOptions;
        }
        
        function delegate(obj, func) {
            return function() {
                func.apply(obj, arguments);
            };
        }
        
        //start logic
        if (!cookies.get(options.cookieIdentifier)) {
            if (typeof options.delay !== 'number') {
                throw new Error('options.delay must be a numeric value');
            }

            if (!element) {
                throw new Error('Could not find element with selector: ' + options.target);
            }
            
            if (element.parentNode !== document.body) {
                throw new Error(options.target + ' element must be placed directly inside of the <body> element');
            }
            
            setTimeout(delegate(pop, pop.attachEvents), options.delay);
        }
        
        //return object with public interface
        return {
            open: delegate(pop, pop.open),
            destroy: delegate(pop, pop.destroy),
            getElement: function() {
                return element;
            }
        };
    };
})(window);





function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
}

var val = getURLParameter('pack');
// $('#packages').val(val);  

$('#packages option:eq('+ val +')').prop('selected', true);



$(".header-home .menu ul li a").filter(function(){ return this.href == location.href.replace(/#.*/, ""); }).closest("a").addClass("active");

$(".header-home .menu ul li a").filter(function(){ return this.href == location.href.replace(/#.*/, ""); }).closest("a").addClass("active");


let ip;
let ip_value;
$("#phone-country,#phone-coun,#pro-phone,.phone-number").intlTelInput({

     // allowDropdown: false,
     // autoHideDialCode: false,
     // autoPlaceholder: "off",
     // dropdownContainer: "body",
     // excludeCountries: ["us"],
     // formatOnDisplay: false,
   geoIpLookup: function(callback) {
           $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
             var countryCode = (resp && resp.country) ? resp.country : "";
             callback(countryCode);
             ip=resp.ip;


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

   $('input[name="pc"]').val($('.selected-dial-code').text());
  $('input[name="cip"]').val(ip);
   console.log(ip);
   $('input[name="ctry"]').val( $('.country-list .country.active .country-name').text());
}, 3000);