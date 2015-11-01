

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

    var noteTitle = $('#note-title').val();
    var noteContent = $('#note-content').val();

    var subno = $('#subject-number-input').val();
    var error = $('#error-check');
    var subnoExists = subjectNumbers.indexOf(subno) > -1;

    if (!subnoExists) {
        error.text('Subject number does not exist!');
    } else if (noteTitle === '') {
        error.text('Need a note title');
    } else if (noteContent === '') {
        error.text('Note content must not be empty');
    } else {
        error.text('');
        return true;
    }
    return false;
}

