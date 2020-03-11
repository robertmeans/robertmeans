
  $(window).scroll(function(e){ 
    var $magicNav = $('#navigation-wrapper'); 
    // var isPositionFixed = ($magicNav.css('position') == 'fixed');

    if ($(this).scrollTop() > 160){ 
      $magicNav.removeClass('nav-absolute');
      $magicNav.addClass('nav-fixed'); 
    }
    if ($(this).scrollTop() < 160){
      $magicNav.removeClass('nav-fixed');
      $magicNav.addClass('nav-absolute'); 
    } 

  });


  $(document).ready(function() {
    $("[href]").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("current-page");
            
        }
    });
});
