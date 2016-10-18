(function($) {

  $(document).ready(function(){

    $('header').animate({
      opacity: 1,
      height: '214px'
    }, 2000);

    function mobileMenu() {
      // hide cross icon, hide menu and on click transition them in
      $('.cross').hide();
      $('.primary-nav').hide();
      $('.hamburger').on('click', function(){
        $('.primary-nav').slideToggle('slow', function() {
          $('.hamburger').hide();
          $('main').css({
            'margin-top' : '215px'
          });
          $('.cross').show();
        });
      });

      $('.cross').on('click', function() {
        $('.primary-nav').slideToggle('slow', function() {
          $('.cross').hide();
          $('main').css({
            'margin-top' : '0'
          });
          $('.hamburger').show();
        });
      });
    }

    if (window.outerWidth < 701) {
      mobileMenu();
    }

  });

})( jQuery );
