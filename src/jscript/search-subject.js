

var subjectNumbers = [];

$(function() {
    $.getJSON('input-validators/search-input.php', function(data) {
        subjectNumbers = data;
        $('#subject-number-input').autocomplete({
            source: data
        });
    });

});

function validSubject() {
    var subno = $('#subject-number-input').val();
    var error = $('#error-check');
    var subnoExists = subjectNumbers.indexOf(subno) > -1;


    if (subnoExists) {
        error.text('');
        return true;
    } else {
        error.text('Subject number does not exist!');
        return false;
    }

}

