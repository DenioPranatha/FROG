// script for show-hide password
$(document).on('click', '.toggle-password', function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $("#pass_log_id");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
});

function signinStorage(){
    localStorage.removeItem('userInputName');
    localStorage.removeItem('userInputPhone');
    localStorage.removeItem('userInputAddress');
}
