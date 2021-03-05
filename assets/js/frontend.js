jQuery(function($) {

	// Fix to force target blank for social icons module
	$('#mega_social_icons a[href^="http"]').attr('target','_blank');

  /* Share social medias */
  $('.share-social-medias').on('click', 'a', function(e) {
    e.preventDefault();
    window.open($(this).attr('href'), 'shareWindow', "width=600,height=600,scrollbars=yes");
  });
});

jQuery(window).load(function() {

  /* Simple slider */
  jQuery('.simple-slider').each(function() {
    var carousel = jQuery(this);

    carousel.owlCarousel({
      items: 1,
      loop: true,
      margin: 10,
      nav: carousel.data('nav'),
      dots: carousel.data('dots'),
      responsive: carousel.data('responsive'),
			autoplay: carousel.data('autoplay'),
      autoplayTimeout: (carousel.data('autoplay-timeout') ? parseInt(carousel.data('autoplay-timeout')) * 1000 : 0),
      autoplayHoverPause: carousel.data('autoplay-hover-pause')
    });
  });
});