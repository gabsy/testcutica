$(document).ready(function() {
  $(function() {
    // grab the initial top offset of the navigation
    var range = $(window).height();
    $('.home .content').css({
      'margin-top': range
    });
    //$('.content').css({'margin-bottom':footer_height});
    var sticky_navigation_offset_top = $('.home .content').offset().top;
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function() {
      var scroll_top = $(window).scrollTop(); // our current vertical position from the top
      // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
      if (scroll_top > sticky_navigation_offset_top - 79) {
        $('.top-bar').css({
          'background': '#359412'
        });
        $('.logo-top').css({
          'opacity': '1'
        });
      } else {
        $('.top-bar').css({
          'background': 'transparent'
        });
        $('.logo-top').css({
          'opacity': '0'
        });
      }

      var calc = 1 - (scroll_top - sticky_navigation_offset_top + range) / (0.7 * range);
      var calcbk = scroll_top / 5 + 'px';

      $('.home-info').css({
        'opacity': calc
      });
      $('.home-info-content').css({
        'transform': 'translateY(-' + calcbk + ')'
      });
      //$('body').css('background-position','-' + calcbk );

      if (calc > '1') {
        $('.home-info').css({
          'opacity': 1
        });
      } else if (calc < '0') {
        $('.home-info').css({
          'opacity': 0
        });
      }
    };

    sticky_navigation();
    $(window).on('resize scroll', function() {
      sticky_navigation();
    }).resize();

  });

  //OVERLAY MOBILE MENU
  var triggerBttn = $('#trigger-overlay'),
    overlay = $('div.overlay'),
    closeBttn = $('.overlay button.overlay-close');

  function toggleOverlay() {
    if (overlay.hasClass('open')) {
      overlay.removeClass('open');
      overlay.addClass('close');
    } else if (overlay.hasClass('close')) {
      overlay.removeClass('close');
      overlay.addClass('open');
    }
  }
  triggerBttn.click(function() {
    toggleOverlay();
    return false;
  });
  closeBttn.click(function() {
    toggleOverlay();
    return false;
  });

});
