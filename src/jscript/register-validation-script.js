
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
var submit_button = $('#submit-button');

var input_check = 'input-validators/register-validator-input.php';
var required = 'Required';
var available = 'Available';
var taken = 'Taken';
var passwordLength = "Too short";
var notMatching = "not matching";


var usernameCorrect = function() {
    var valid = false;
    if (username_input.val().length < 1) {
        username_status.text(required);
        username_status.removeClass('glyphicon glyphicon-ok tick');
    } else {
        fetchUsername(function(callback) {
            valid = callback;
            if (valid) {
                username_status.addClass('glyphicon glyphicon-ok tick');
                username_status.text('');
            } else {
                username_status.removeClass('glyphicon glyphicon-ok tick');
                username_status.text(taken);
            }
        });
    }
    return valid;
};

function fetchUsername(callback) {
    $.ajax({
        async: false,
        type: "POST",
        url: input_check,
        data: {username: username_input.val()},
        success: function (result) {
            var valid = result.match(available);
            callback(valid);
        }
    });
}

var firstNameCorrect = function() {
    if (firstname_input.val().length < 1) {
        firstname_status.text(required);
        firstname_status.removeClass('glyphicon glyphicon-ok tick');
        return false;
    } else {
        firstname_status.addClass('glyphicon glyphicon-ok tick');
        firstname_status.text('');
        return true;
    }
};

var lastNameCorrect = function() {
    if (lastname_input.val().length < 1)  {
        lastname_status.text(required);
        lastname_status.removeClass('glyphicon glyphicon-ok tick');
        return false;
    } else {
        lastname_status.addClass('glyphicon glyphicon-ok tick');
        lastname_status.text('');
        return true;
    }
};

var emailCorrect = function() {
    var userEmail = email_input.val();
    var valid = false;
    if (userEmail.length < 1) {
        email_status.text(required);
        email_status.removeClass('glyphicon glyphicon-ok tick');
    } else if (userEmail.indexOf('@') === -1) {
        email_status.removeClass('glyphicon glyphicon-ok tick');
        email_status.text('Not an email')
    } else {
        fetchEmail(function(callback) {
            valid = callback;
            if (valid) {
                email_status.text('');
                email_status.addClass('glyphicon glyphicon-ok tick');
            } else {
                email_status.removeClass('glyphicon glyphicon-ok tick');
                email_status.text(taken);
            }
        });
    }
    return valid;
};

function fetchEmail(callback) {
    $.ajax({
        async: false,
        type: "POST",
        url: input_check,
        data: {email: email_input.val()},
        success: function (result) {
            var valid = result.match(available);
            callback(valid);
        }
    });
}

var passwordCorrect = function() {
    var pass = password_input.val();
    passwordsMatch();
    if (pass.length < 6) {
        password_status.text(passwordLength);
        password_status.removeClass('glyphicon glyphicon-ok tick');
        return false;
    } else {
        password_status.addClass('glyphicon glyphicon-ok tick');
        password_status.text('');
        return true;
    }
};

var passwordsMatch = function() {
    var pass = password_input.val();
    if (pass.length != 0) {
        if (repass_input.val() === password_input.val()) {
            repass_status.addClass('glyphicon glyphicon-ok tick');
            repass_status.text('');
            return true;
        } else {
            repass_status.removeClass('glyphicon glyphicon-ok tick');
            repass_status.text(notMatching);
        }
    } else {
        repass_status.text("");
    }
    return false;
};


firstname_input.keyup(function() {
    firstNameCorrect()
});

lastname_input.keyup(function() {
    lastNameCorrect();
});

password_input.keyup(function() {
    passwordCorrect();
});

repass_input.keyup(function() {
    passwordsMatch();
});

username_input.keyup(function() {
    usernameCorrect();
});

email_input.keyup(function() {
    emailCorrect();
});

function validateForm() {
    return !!(usernameCorrect() && firstNameCorrect() && lastNameCorrect() && emailCorrect() &&
    passwordCorrect() && passwordsMatch());
}





