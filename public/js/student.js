updateCheckbox();

$('#program_id').change(function() {
    updateCheckbox(true);
});

function updateCheckbox (fromElementEvent = false) {
    const program_id = $('#program_id').val();

    $('.course-program-checkbox').hide();
    $('.course-checkbox').attr('disabled', true);

    $('.course-program-checkbox-' + program_id).show();
    $('.course-program-' + program_id).attr('disabled', false);

    if(fromElementEvent) {
        $('course-checkbox').prop('checked', false);
        $('.course-program-' + program_id).prop('checked', true);
    }

    const count_of_courses = $('.course-program-' + program_id).length;

    if (count_of_courses == 0) {
        $('#head-course').hide();
        $('#no-course').show();
    } else {
        $('#head-course').show();
        $('#no-course').hide();
    }
}