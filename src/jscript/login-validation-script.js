
function validate() {
    var validated = false;
    fetch(function(callback) {
        validated = callback;
    });
    return validated == true;
}

function fetch(callback) {
    var username = $('#username');
    var password = $('#password');
    var login = $('#login-status');
    var submit = $('submit-button');

    var confirmed = "login confirmed";
    var incorrect = "username or password is wrong";

    var s;

    $.ajax({
        async: false,
        type: "POST",
        url: 'input-validators/login-validator-input.php',
        data: {username: username.val(), password: password.val()},
        success: function (result) {
            if (result == true) {
                login.text(confirmed);
            } else {
                login.text(incorrect);
            }
            callback(result);
        }
    });
}