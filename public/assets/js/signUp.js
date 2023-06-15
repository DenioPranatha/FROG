   // script for show-hide password
   $(document).on('click', '.toggle-password', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#pass_log_id");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });

    $(document).on('click', '.toggle-password2', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input2 = $("#confirm-password");
    input2.attr('type') === 'password' ? input2.attr('type','text') : input2.attr('type','password')
    });
