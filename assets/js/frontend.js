jQuery(function($) {
  $('.share-social-medias').on('click', 'a', function(e) {
    e.preventDefault();
    window.open($(this).attr('href'), 'shareWindow', "width=600,height=600,scrollbars=yes");
  });
});