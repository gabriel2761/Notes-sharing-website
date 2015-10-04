/**
 * Created by nikom on 2/10/2015.
 */

var username_validated = false;
var firstname_validated = false;
var lastname_validated = false;
var email_validated = false;
var password_validated = false;
var password_match = false;

var validation_status;

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
    validation_status = $('#validation-status');

    var input_check = 'input-validators/register-validator-input.php';
    var required = 'Required';
    var filled = 'tick.jpeg';
    var passwordLength = "must be at least 6 characters";
    var notMatching = "passwords don't match";
    var available = 'Available';

    firstname_input.keyup(function() {
        if (firstname_input.val().length < 1) {
            firstname_status.text(required);
            firstname_validated = false;
        } else {
            firstname_status.text(filled);
            firstname_validated = true;
        }
    });

    lastname_input.keyup(function() {
       if (lastname_input.val().length < 1)  {
           lastname_status.text(required);
           lastname_validated = false;
       } else {
           lastname_status.text(filled);
           lastname_validated = true;
       }
    });

    password_input.keyup(function() {
        var pass = password_input.val();

        if (pass.length < 6) {
            password_status.text(passwordLength);
            password_validated = false;
        } else {
            password_status.text(filled);
            password_validated = true;
        }
        checkPasswordsMatch();
    });

    repass_input.keyup(function() {
        checkPasswordsMatch();
    });

    function checkPasswordsMatch() {
        var pass = password_input.val();
        if (pass.length != 0) {
            if (repass_input.val() === password_input.val()) {
                repass_status.text(filled);
                password_match = true;
            } else {
                repass_status.text(notMatching);
                password_match = false;
            }
        } else {
            repass_status.text("");
            password_match = false;
        }
    }

    username_input.keyup(function() {
        if (username_input.val().length < 1) {
            username_status.text(required);
            email_validated = false;
        } else {
            $.post(input_check, {username:username_input.val()},
            function(result) {
                username_status.text(result);
                username_validated = !!result.match(available);
            });
        }
    });

    email_input.keyup(function() {
        if (email_input.val().length < 1) {
            email_status.text(required);
            email_validated = false;
        } else {
            $.post(input_check, {email:email_input.val()},
            function(result) {
                email_status.text(result);
                email_validated = !!result.match(available);
            });
        }
    });

});

function validate() {
    if ((username_validated && firstname_validated && lastname_validated && email_validated
        && password_validated && password_match)) {
        return true;
    } else {
        validation_status.text("form not completed");
        return false;
    }
}

