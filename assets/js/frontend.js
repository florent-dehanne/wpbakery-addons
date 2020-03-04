jQuery(function($) {

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
      nav: false,
      dots: false,
      responsive: carousel.data('responsive')
    });
  });
});