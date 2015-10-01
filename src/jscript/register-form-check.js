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
    var repass_input = $('#password-repeat');
    var repass_status = $('#repass-status');

    var input_check = 'input-checkers/check-register.php';
    var required = 'Required';
    var filled = 'tick.jpeg'

    var passwordLength = "must be at least 6 characters";
    var notMatching = "passwords don't match";

    firstname_input.keyup(function() {
        firstname_input.val().length < 1 ? firstname_status.text(required) : firstname_status.text(filled);
    });

    lastname_input.keyup(function() {
       lastname_input.val().length < 1 ? lastname_status.text(required) : lastname_status.text(filled);
    });

    password_input.keyup(function() {
        var pass = password_input.val();
        pass.length < 6 ? password_status.text(passwordLength) : password_status.text(filled);
        repass_input.val() == pass && pass.length != 0 ? repass_status.text(filled) : repass_status.text(notMatching);
    });

    repass_input.keyup(function() {
        repass_input.val() === password_input.val() ? repass_status.text(filled) : repass_status.text(notMatching);
    });

    username_input.keyup(function() {
        if (username_input.val().length < 1) {
            username_status.text(required);
        } else {
            $.post(input_check, {username:username_input.val()},
                function(result) {
                    username_status.text(result);
                });
        }
    });

    email_input.keyup(function() {
        if (email_input.val().length < 1) {
            email_status.text(required);
        } else {
            $.post(input_check, {email:email_input.val()},
                function(result) {
                    email_status.text(result);
                });
            }
       });

});