/*
Template: Crane Construction Template
Author: ScriptsBundle
Version: 1.0
Designed and Development by: ScriptsBundle
*/

(function($) {
    "use strict";

	/* ======= Page preloader ======= */
	$(window).load(function(){
		$('.preloader').delay(2000).fadeOut(1000);
	});
	
 /* ======= Sticky Scroll ======= */     
  $(window).on('scroll', function(){
    if( $(window).scrollTop()>100 ){
      $('.sticky').addClass('stick');
      } else {
      $('.sticky').removeClass('stick');
    }
  });    
 
 

/* ======= Side Panel Scroll ======= */     
$('#slideBotton').on('click',function(){
  $('#info-panel').addClass( "highlight" );
});
$('.close').on('click',function(){
    $('#info-panel').removeClass( "highlight" );
});
	
	
	 /* ======= Page Scrolling Plugin ======= */
    $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
	
	/* ======= Panel Activation  ======= */
	$('.panelHeading a').on('click', function () {
        $('.panelHeading a').removeClass('active');
        $(this).addClass('active');
    });
	
	
	/* ======= Sticky Sidebar ======= */				
	$('#side-bar').theiaStickySidebar({
      additionalMarginTop: 80
    });
	
	/* ======= Fun Fact Counter  ======= */
	 $('.counter-stats').counterUp({
        delay: 10,
        time: 2000
    });


	/* ======= Our Clients Carousel ======= */
    $(".clients-list").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: false,
        loop: true,
        items: 6
    });
	
	/* ======= Testimonial Slider ======= */
   $("#owl-slider").owlCarousel({
		autoPlay : 6000, //Set AutoPlay to 3 seconds
		singleItem: false,
		items : 2,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 3],
		navigation : false
	});
	
	/* ======= Testimonial Slider 2 ======= */
	$("#testimonials").owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 600,
        paginationSpeed: 700,
        singleItem: true,
        autoPlay: 5000,
		 navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		 pagination:true,
		 responsive:true
        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });
	
/* ======= Related Products Carousel ======= */
    $("#related-products").owlCarousel({
      navigation: true,
	  pagination:false,
      autoPlay: 9000, //Set AutoPlay to 5 seconds
  	  navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  slideSpeed: 600,
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,4],
	  itemsTablet: [800,2],
	  itemsMobile :	[479,1]
    });
	

   /* ======= Parallax Scrolling  ======= */
    $.stellar({
        responsive: true,
        horizontalScrolling: false,
        verticalOffset: 0,
    });
	
	/* ======= Revolution slider  Home Page ======= */
    if ($('.slider-grids').length > 0) {
        jQuery(".slider-grids").revolution({
            delay:9000,
            startwidth:1170,
            startheight:690,
            onHoverStop:"off",
            hideThumbs:10,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview4",
            fullWidth:"on",
			dottedOverlay:"custom",
            fullScreen:"off",
            fullScreenOffsetContainer: ""
        });
    }
	/* ======= Revolution slider  Home Page ======= */
    if ($('.slider-grid-2').length > 0) {
        jQuery(".slider-grid-2").revolution({
            delay:9000,
            startwidth:1170,
            startheight:620,
            onHoverStop:"off",
            hideThumbs:1,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview3",
            fullWidth:"on",
			dottedOverlay:"custom",
            fullScreen:"off",
            fullScreenOffsetContainer: ""
        });
    }
	/* ======= Revolution slider  Home Page Cleaning ======= */
	if ($('.slider-grid-3').length > 0) {
        jQuery(".slider-grid-3").revolution({
            delay:9000,
            startwidth:1170,
            startheight:620,
            onHoverStop:"off",
            hideThumbs:1,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview3",
            fullWidth:"off",
			dottedOverlay:"custom",
            fullScreen:"on",
            fullScreenOffsetContainer: ""
        });
    }
	/* ======= Revolution slider  Home Page Pluumbing ======= */
    if ($('.slider-grid-4').length > 0) {
        jQuery(".slider-grid-4").revolution({
            delay:10000,
            startwidth:1170,
            startheight:500,
            onHoverStop:"off",
            hideThumbs:10,
            hideTimerBar:"on",
            navigationType:"none",
            navigationStyle:"preview1",
            fullWidth:"off",
			dottedOverlay:"custom",
            fullScreen:"on",
            fullScreenOffsetContainer: ""
        });
    }

 /* === magnificPopup === */
    $(window).load(function() {
        $('.tt-lightbox').magnificPopup({
            type: 'image',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            fixedContentPos: false
                // other options
        });
        /* ======= shuffle js ======= */
        if ($('#portfolio-grid').length > 0) {
            /* initialize shuffle plugin */
            var $grid = $('#portfolio-grid');

            $grid.shuffle({
                itemSelector: '.portfolio-item' // the selector for the items in the grid
            });

            /* reshuffle when user clicks a filter item */
            $('#filter li').on('click', function(e) {
                e.preventDefault();

                // set active class
                $('#filter li').removeClass('active');
                $(this).addClass('active');

                // get group name from clicked item
                var groupName = $(this).attr('data-group');

                // reshuffle grid
                $grid.shuffle('shuffle', groupName);
            });
        }

    });


})(jQuery);

/*------------------------------------------------------------------------------*/

/*var accord = document.getElementsByClassName("accord");

for(var i = 0; i < accord.length; i++) {
    accord[i].addEventListener("click", function(){
        this.classList.toggle("active");
        var pannel = this.nextElementSibling;
        if(pannel.style.maxHeight) {
            pannel.style.maxHeight = null;
        }
        else {
            pannel.style.maxHeight = pannel.scrollHeight + "px";
        }
    });
}*/

  $(document).ready(function($) {
    $('.accord').click(function(){

     
      
      $(this).next().slideToggle('fast', function(){
        
      });

     
      $(".pannel").not($(this).next()).slideUp('fast', function(){
        
      });


      

    });

  });