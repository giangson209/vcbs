$(document).ready(function(){
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 1) {
	        $('.header-pc, main').addClass('fixed-header');
	    }
	    else {
	        $('.header-pc, main').removeClass('fixed-header');
	    }
	});

	$( ".btn-menu a" ).on( "click", function() {
	  $('.nav-mobile, .btn-menu a, body').toggleClass('show_menu');
	} );

	$( '.clc-scroll' ).on( 'click', function(e){
		$('.btn-menu a').click();
	  var href = $(this).attr( 'href' );
	  if($(window).innerWidth() >= 1024){
	  	$( 'html, body' ).animate({
			scrollTop: $( href ).offset().top - 80
		  }, '1000' );
	  }
	  if($(window).innerWidth() < 1024){
	  	$( 'html, body' ).animate({
			scrollTop: $( href ).offset().top - 60
		  }, '1000' );
	  }
	  e.preventDefault();
	});

	$( '.item-formality .btn-main' ).on( 'click', function(e){
	  var href = $(this).attr( 'href' );
	  $( 'html, body' ).animate({
		scrollTop: $( href ).offset().top
	  }, '1000' );
	  e.preventDefault();
	});

	if($(window).innerWidth() > 1023){
	  	new WOW().init();
	}
})
 