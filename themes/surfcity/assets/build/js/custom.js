"use strict";

(function($, window, document) {
$(function() {
	var rellax = new Rellax('.rellax');
	$('.navigation .navbar-toggler').on('click', function(){
		$(this).closest('header').toggleClass('switching');
	});
	
	$('#cart_icon').on('click', function(e){
		e.preventDefault();
		$('body').addClass('cart-enabled');
		$('.cart_items').addClass('active');
	});
	
	$('#close_cart').on('click', function(e){
		e.preventDefault();
		$('body').removeClass('cart-enabled');
		$('.cart_items').removeClass('active');
	});
	
	$('.yesStoked').on('click', function(e){
		e.preventDefault();
		$('body').removeClass('onloadpopup');
	});
	
	$('.minus_').on('click', function(e){
		var thisInput = $(this).closest('.quantity-range').find('input').val();
		if (thisInput >= 1) {
			thisInput --;
			$(this).closest('.quantity-range').find('input').val(thisInput);
		}
	});
	
	$('.plus_').on('click', function(e){
		var thisInput = $(this).closest('.quantity-range').find('input').val();
			thisInput ++;
			$(this).closest('.quantity-range').find('input').val(thisInput);
	});
	
	$('#shopPopUp').on('click', function(e){
		e.preventDefault();
		$('body').addClass('show_pop');
	});
	
	$('.close_btn').on('click', function(e){
		e.preventDefault();
		$('body').removeClass('show_pop');
	});
	
	
	
	
	$('#shopSlider').owlCarousel({
		loop:false,
		margin:16,
		nav:false,
		responsive:{
			0:{
				items:2,
			},
			600:{
				items:2
			},
			1000:{
				items:4
			}
		}
	});
	
	$('#productPage').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		dots:true,
		navText:['<img src="images/icons/prev_icon.png" />','<img src="images/icons/next_icon.png" />'],
		slideBy:1,
		autoplay:true,
		autoplayHoverPause:true,
		autoplayTimeout:3000,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});
	
	$('.imgclick1').click(function(){
    	$('#productPage').trigger('to.owl.carousel', 2)
	});
	$('.imgclick2').click(function(){
    	$('#productPage').trigger('to.owl.carousel', 3)
	});
	

	 /* var sync1 = $("#sync1");
	  var sync2 = $("#sync2");
	  var slidesPerPage = 4; 
	  var syncedSecondary = true;
	
	  sync1.owlCarousel({
		items : 1,
		slideSpeed : 2000,
		nav: true,
		autoplay: true,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
		navText: ['',''],
	  }).on('changed.owl.carousel', syncPosition);
	
	  sync2
		.on('initialized.owl.carousel', function () {
		  sync2.find(".owl-item").eq(0).addClass("current");
		})
		.owlCarousel({
		items : slidesPerPage,
		dots: false,
		nav: false,
		margin:16,
		smartSpeed: 200,
		slideSpeed : 500,
		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100
	  }).on('changed.owl.carousel', syncPosition2);
	
	  function syncPosition(el) {
		//if you set loop to false, you have to restore this next line
		//var current = el.item.index;
		
		//if you disable loop you have to comment this block
		var count = el.item.count-1;
		var current = Math.round(el.item.index - (el.item.count/2) - .5);
		
		if(current < 0) {
		  current = count;
		}
		if(current > count) {
		  current = 0;
		}
		
		//end block
	
		sync2
		  .find(".owl-item")
		  .removeClass("current")
		  .eq(current)
		  .addClass("current");
		var onscreen = sync2.find('.owl-item.active').length - 1;
		var start = sync2.find('.owl-item.active').first().index();
		var end = sync2.find('.owl-item.active').last().index();
		
		if (current > end) {
		  sync2.data('owl.carousel').to(current, 100, true);
		}
		if (current < start) {
		  sync2.data('owl.carousel').to(current - onscreen, 100, true);
		}
	  }
	  
	  function syncPosition2(el) {
		if(syncedSecondary) {
		  var number = el.item.index;
		  sync1.data('owl.carousel').to(number, 100, true);
		}
	  }
	  
	  sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).index();
		sync1.data('owl.carousel').to(number, 300, true);
	  });*/

	
	

});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 100) {
        $("header").addClass("fixed-header");
    }
	else {
		$("header").removeClass("fixed-header");
	}
});

/*$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        
    }
	else {
		
	}
});*/

$("#toTop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});

/*$(window).on('load', function(){
  $('body').addClass('onloadpopup');
});*/


})(window.jQuery, window, document);

$(window).load(function(){
	$('#infiniteLogo').owlCarousel({
		loop:true,
		margin:10,
		nav:false,
		slideBy:1,
		autoplay:true,
		autoplayTimeout:3000,
		autoWidth:true,
		merge:true,
		mergeFit:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			},
			1600:{
				items:5
			},
			1900:{
				items:6
			}
		}
	});
})

