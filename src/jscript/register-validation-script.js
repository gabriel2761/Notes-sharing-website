
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
    var available = 'Available';
    var passwordLength = "Too short";
    var notMatching = "not matching";

    firstname_input.keyup(function() {
        if (firstname_input.val().length < 1) {
            firstname_status.text(required);
            firstname_status.removeClass('glyphicon glyphicon-ok tick');
            firstname_validated = false;
        } else {
            firstname_status.addClass('glyphicon glyphicon-ok tick');
            firstname_status.text('');
            firstname_validated = true;
        }
    });

    lastname_input.keyup(function() {
       if (lastname_input.val().length < 1)  {
           lastname_status.text(required);
           lastname_status.removeClass('glyphicon glyphicon-ok tick');
           lastname_validated = false;
       } else {
           lastname_status.addClass('glyphicon glyphicon-ok tick');
           lastname_status.text('');
           lastname_validated = true;
       }
    });

    password_input.keyup(function() {
        var pass = password_input.val();

        if (pass.length < 6) {
            password_status.text(passwordLength);
            password_status.removeClass('glyphicon glyphicon-ok tick');
            password_validated = false;
        } else {
            password_status.addClass('glyphicon glyphicon-ok tick');
            password_status.text('');
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
                password_match = true;
                repass_status.addClass('glyphicon glyphicon-ok tick');
                repass_status.text('');
            } else {
                repass_status.removeClass('glyphicon glyphicon-ok tick');
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
            username_status.removeClass('glyphicon glyphicon-ok tick');
            email_validated = false;
        } else {
            $.post(input_check, {username:username_input.val()},
            function(result) {
                username_validated = result.match(available);
                if (username_validated) {
                    username_status.addClass('glyphicon glyphicon-ok tick');
                    username_status.text('');
                } else {
                    username_status.removeClass('glyphicon glyphicon-ok tick');
                    username_status.text(result);
                }
            });
        }
    });

    email_input.keyup(function() {
        var userEmail = email_input.val();
        if (userEmail.length < 1) {
            email_status.text(required);
            email_status.removeClass('glyphicon glyphicon-ok tick');
            email_validated = false;
        } else if (userEmail.indexOf('@') === -1) {
            email_status.removeClass('glyphicon glyphicon-ok tick');
            email_status.text('Not an email')
        } else {
            $.post(input_check, {email:email_input.val()},
            function(result) {
                email_validated = result.match(available);
                if (email_validated) {
                    email_status.text('');
                    email_status.addClass('glyphicon glyphicon-ok tick');
                } else {
                    email_status.removeClass('glyphicon glyphicon-ok tick');
                    email_status.text(result);
                }
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

