function recaptchaCallback() {
    $('#confirm').addClass('display');
    $('#send').removeAttr('disabled');
    $('#send').removeClass('display');
	};
$(window).load(function() {
    $(".preload").fadeOut("slow");
    });
