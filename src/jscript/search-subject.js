

$(function() {
    $.getJSON('input-validators/search-input.php', function(data) {
        $('#subject-number-input').autocomplete({
            source: data
        });
    });
});