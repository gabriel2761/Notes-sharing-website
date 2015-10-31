

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
    return subjectNumbers.indexOf(subno) > -1;
}

