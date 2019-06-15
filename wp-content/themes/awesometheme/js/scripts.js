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


 //function = add class to element/s when scroll
 //variables:
 //addId = the id of the element e.g. "#something"
 //addClass = the class to add e.g. "something"

 $.fn.addClassAnimate = function(addId, addClass){
    var wHScroll;
    var hWindow = $(window).height();
    var addClass = '' + addClass + '';
    var addId = '' + addId + '';
    var offsetVal = $(addId).offset();
         offsetVal = offsetVal['top'];
    $(window).scroll(function(){
        var curWindow = $(document).scrollTop();
        wHScroll = curWindow + hWindow;

          if($(addId).hasClass('doneScroll') !== true){
            if(wHScroll > offsetVal){
              $(addId).addClass(addClass);
              $(addId).addClass('doneScroll');
            }
        }
    });
  }
  // function calls for addClassAnimate
  $('#aboutInfo').addClassAnimate('#aboutInfo', 'about-info');
  $('#personalImage').addClassAnimate('#personalImage', 'personal-image-animate');
  $('#techInfo li').addClassAnimate('#techInfo li', 'tech-info-li');

  // Ajax call for Contact form
  $('#contactForm').on('submit', function(e){
    e.preventDefault();
      let postVar =  $(this).serialize();
      let ajaxurl = $('#admin-ajax').val();
    // Test question to stop bots
    if($('#testQAnswer').val() == 10){
          $.post(
            ajaxurl,
            {
                action: 'get_post', // the action to pass to the WordPress hook, and then do_action()
                data: postVar
            })
            .done(function( data ) {

              let datas = JSON.parse(data);
                if(datas.success != ''){
                    $('#contactResponse').html('<span class="bg-success border-radius-7">' + datas.success + '</span>');
                  }
                else if(datas.msg != ''){
                    $('#contactResponse').html('<span class="bg-danger border-radius-7">' + datas.msg + '</span>');
                  }
                  else if(datas.nosuccess != ''){
                      $('#contactResponse').html('<span class="bg-danger border-radius-7">' + datas.nosuccess + '</span>');
                    }
            });

      }else{
        $('#contactResponse').html('<span class="bg-danger border-radius-7">Math question must be correct to send message!</span>');
      }
});

})(jQuery);
