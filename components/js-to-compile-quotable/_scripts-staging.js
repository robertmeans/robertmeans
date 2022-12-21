$(document).ready(function(){
$(".quote-content").hide();

  $('.quote').click(function() {
    // close_navigation_first();
    var active = $(this);
    var toggle = $(this).next('.quote-content');

    $('.quote-content').not(toggle).slideUp();
    $('.quote').not(active).removeClass('active');

    $(toggle).slideToggle();
    if ($(active).hasClass('active')) {
      $(active).removeClass('active');
    } else {
      $(active).addClass('active');
    }
  });
});

// contact form
$(document).ready(function() {
  // $('#cloze').click(function() {
  //   event.preventDefault();
  // });
  $('#send').click(function() {
    event.preventDefault();
    $.ajax({
      dataType: "JSON",
      url: "footer_contact_ajax.php",
      type: "POST",
      data: $('#contactForm').serialize(),
      beforeSend: function(xhr) {
        $('#msg').html('<span>Sending - one moment...</span>');
      },
      success: function(response) {
        // console.log(response);
        if(response) {
          console.log(response);
          if(response['signal'] == 'ok') {
            $('#contactForm').html('<span>Your message was sent successfully.</span><br><button class="click-box-03">Reset</button>');
            // $('#msg').html('<button class="click-box-03">Close</button>');
            // $('#send-success').html('<input name="clozer" id="clozer" class="clozer" value="Close">');
          } else {
            $('#msg').html('<div class="alert alert-warning">' + response['msg'] + '</div>');
          }
        } 
      },
      error: function() {
        $('#msg').html('<div class="alert alert-warning">There was an error between your IP and the server. Please try again later.</div>');
      }, 
      complete: function() {
        // $('#contact').html('<span>Your message was sent successfully.</span>');
        // $('#send-success').html('<input name="clozer" id="clozer" class="clozer" value="Close">');
      }
    })
  });
});
