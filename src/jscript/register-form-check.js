/**
 * Created by nikom on 2/10/2015.
 */
$(document).ready(function() {
    var username_input = $('#username-register');
    var username_status =  $('#username-status');
    var firstname_input = $('#firstname-register');
    var firstname_status = $('#firstname-status');
    var lastname_input = $('#lastname-register');
    var lastname_status = $('#lastname-status');
    var email_input = $('#email-register');
    var email_status = $('#email-status');
    var password_input = $('#password-register');
    var password_status = $('#password-status');
    var repass_input = $('#password_repeat');
    var repass_status = $('#repass-status');

    var input_check = 'input-checkers/check-register.php';

    $(username_input).keyup(function() {
        $.post(input_check, {username:username_input.val()},
            function(result) {
                username_status.text(result);
            });
    });

    $(email_input).keyup(function() {
        $.post(input_check, {email:email_input.val()},
            function(result) {
                email_status.text(result);
            });
    });
});