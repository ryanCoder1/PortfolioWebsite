// Javascript Awesome
(function($) {

  // function for each list element animate
  // variables:
  // animVal = the pixel value of animate adjusted to var animValSet in "" as string
  // animSpeed = the speed of animate
  // delayInc = the integer value of incremented delay of list elements animate
  // initialDelay = the initial integer value to set delay
$.fn.animateListItems = function(animVal, animSpeed, delayInc, initialDelay){
      var inc = delayInc;
      var incTot = 0;
      var initDelay = initialDelay;
      var animValSet = '' + animVal + '';
      $(this).css({'margin-left': '100px'});
  return $(this).each(function( index ) {
      var incTot = inc + initDelay;
      $(this).delay(incTot).animate({'marginLeft': animValSet}, animSpeed );
       inc = inc + delayInc;
    });
  }
  //show modal when services anchor is clicked
  $('.toggler-btn').change(function(){
    if(this.checked){

      $('#menuUl').animate({ opacity: '0'} );
      $('#servicesModal').delay(250).animate({bottom: '0'}, {duration: 1000, easing:  'easeOutBounce'});
      $('#menuUl li').animateListItems('0px', 750, 50, 750);
      $('#menuUl').delay(750).animate({ opacity: '1'}, 750 );

      $('.close').delay(1750)
          .queue(function (next) {
            $(this).css({
              'transform' : 'rotate(360deg)'

            });
            next();
          });

       }

  });
  $('.close-btn').change(function(){
    if(this.checked){
      $('#menuUl').animate({ opacity: "0"}, 750);

      $('#servicesModal').delay(500).animate({bottom: "-100vh"}, {duration: 1000, easing: 'easeOutBounce'});
      $('.burger').prop('checked', false);
      $('.close')
          .queue(function (next) {
            $(this).css({
              'transform' : 'rotate(-360deg)'

            });
            next();
          });
    }
    $('.close-btn').prop('checked', false);
  });



})(jQuery);
