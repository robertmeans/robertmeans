$(document).ready(function(){

/* START: highlight cover leter icon on page load when it doesn't show in url */
  $('[href]').each(function() {
    if ((this.href == window.location.href) && !$('#cover-pg').hasClass('curent-page')) {
      $('#cover-pg').removeClass('current-page');
      $(this).addClass('current-page');  
    } 
  });
/* END: highlight cover leter icon on page load when it doesn't show in url */

/* START: eye icons that drop down to hidden content */
$("#box-01").hide();
$("#box-02").hide();
$("#box-03").hide();
$("#box-04").hide();
$("#box-05").hide();
// $("#box-06").hide();
var open  = '<i class="far fa-eye"></i>';
var close = '<i class="far fa-eye-slash"></i>';

$(".click-box-01").click(function(){
  $("#box-01").slideToggle(300);

  if ($.trim($("#button-box-01").html()) === open) {
    $("#button-box-01").html(close);
      } else {
   $("#button-box-01").html(open);
      }
  });

$(".click-box-02").click(function(){
  $("#box-02").slideToggle(300);

  if ($.trim($("#button-box-02").html()) === open) {
    $("#button-box-02").html(close);
      } else {
   $("#button-box-02").html(open);
      }
  });

$(".click-box-03").click(function(){
  $("#box-03").slideToggle(300);

  if ($.trim($("#button-box-03").html()) === open) {
    $("#button-box-03").html(close);
      } else {
   $("#button-box-03").html(open);
      }
  });

$(".click-box-04").click(function(){
  $("#box-04").slideToggle(300);

  if ($.trim($("#button-box-04").html()) === open) {
    $("#button-box-04").html(close);
      } else {
   $("#button-box-04").html(open);
      }
  });

$(".click-box-05").click(function(){
  $("#box-05").slideToggle(300);

  if ($.trim($("#button-box-05").html()) === open) {
    $("#button-box-05").html(close);
      } else {
   $("#button-box-05").html(open);
      }
  });
/* END: eye icons that drop down to hidden content */

}); // document.ready close

$(window).scroll(function(e){ 
/* monitor navigation on window resize and assign position accordingly */
  var $magicNav       = $('#navigation-wrapper'); 

  if ($(this).scrollTop() > 160){ 
    $magicNav.removeClass('nav-absolute');
    $magicNav.addClass('nav-fixed'); 
  }
  if ($(this).scrollTop() < 160){
    $magicNav.removeClass('nav-fixed');
    $magicNav.addClass('nav-absolute'); 
  } 
});


/* this works'ish */
$(document).ready(function () {
    setTimeout(function(){
        $('#bobs-message-first-visit').animate({'height':'360px', 'margin-top': '0px'},900);
    }, 1000);

});

 
/* see about putting these in document.ready funcation after they work */
function hideInitialBobsMessage() {

  if($('#bobs-message-first-visit').css('margin-top') == '0px') {
    $('#bobs-message-first-visit').animate({'height':'360px', 'margin-top': '-300px'},500);
    // $('.inside-message-fist').animate({'height':'300px', 'margin-top': '0px'},500);
  } else {
    $('#bobs-message-first-visit').animate({'height':'360px', 'margin-top': '0px'},500);
    // $('.inside-message-fist').animate({'height':'300px', 'margin-top': '-300px'},500);   
  }
}


function hideBobsMessage() {

  if($('#bobs-message').css('height') == '45px') {
    $('#bobs-message').animate({'height':'360px', 'margin-top': '0px'},500);
    $('.inside-message').animate({'height':'300px', 'margin-top': '0px'},500);
    } else {
      $('#bobs-message').animate({'height':'45px', 'margin-top': '0px'},500);
      $('.inside-message').animate({'height':'300px', 'margin-top': '-300px'},500);   
  }
}
