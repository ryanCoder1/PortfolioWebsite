// Javascript Awesome
(function($) {

  // function for each list element animate

   function animateListItems(selector, animVal, animSpeed, delInc, initialDel){
    let inc = delInc;
    let incTot = 0;
    let initDel = initialDel;
    var animValSet = "" + animVal + "";
    $("" + selector + "").each(function( index ) {

      let incTot = inc + initDel;
      $(this).delay(incTot).animate({"marginLeft": animValSet}, animSpeed );

       inc = inc + delInc;
    });
  }
  //show modal when services anchor is clicked
  $('.toggler-btn').change(function(){
    if(this.checked){
      $('#servicesModal').delay(250).animate({bottom: '0'}, {duration: 1000, easing:  'easeOutBounce'});
        animateListItems('#menuUl li', '0px', 750, 50, 750);
      $('#menuUl').delay(750).animate({ opacity: '1'}, 750 );

      $('.services-modal-close').delay(1750)
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
      animateListItems('#menuUl li', "100px", 750, 50, 0);
      $('#servicesModal').delay(500).animate({bottom: "-100vh"}, {duration: 1000, easing: 'easeOutBounce'});
      $('.burger').prop('checked', false);
      $('.services-modal-close')
          .queue(function (next) {
            $(this).css({
              'transform' : 'rotate(-360deg)',
            });
            next();
          });
    }
    $('.close-btn').prop('checked', false);
  });



})(jQuery);
