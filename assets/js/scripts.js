$(document).ready(function() {

  $("body").removeClass("fade-out");

  $(".navbar-burger").click(function() {
    $(".navbar-burger").toggleClass("is-active");
    $(".navbar-menu").slideToggle();
  });

  $("a.navbar-item").click(function() {
    if ($(".navbar-burger").hasClass("is-active")) {
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").slideToggle();
    }
  });

  $("#send").submit(function(e) {
    event.preventDefault();
    var send_name = $('#send_name').val();
    var send_email = $('#send_email').val();
    var send_phone = $('#send_phone').val();
    var send_message = $('#send_message').val();
    $("#submit").addClass('is-loading');
    $.ajax({
      type: "POST",
      url: "assets/php/send.php",
      data: {
        name: send_name,
        email: send_email,
        phone: send_phone,
        message: send_message
      },
      failure: function(data) {
        console.log(data);
        $("#submit").removeClass('is-loading');
        $('#failure').show();
      },
      success: function(data) {
        $('#result').text(data);
        $("#submit").removeClass('is-loading');
        $("input").attr("disabled", true);
        $("textarea").attr("disabled", true);
        $('#submit').hide();
        $('#success').show();
      }
    });
  });

});
