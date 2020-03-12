$(document).ready(function() {
  $('[href]').each(function() {
    if ((this.href == window.location.href) && !$('#cover-pg').hasClass('curent-page')) {
      $('#cover-pg').removeClass('current-page');
      $(this).addClass('current-page');  
    } 
  });
});


$(window).scroll(function(e){ 
  var $magicNav = $('#navigation-wrapper'); 

  if ($(this).scrollTop() > 160){ 
    $magicNav.removeClass('nav-absolute');
    $magicNav.addClass('nav-fixed'); 
  }
  if ($(this).scrollTop() < 160){
    $magicNav.removeClass('nav-fixed');
    $magicNav.addClass('nav-absolute'); 
  } 

});
