$(document).ready(function() {
    $('.create-link').click(function () {
        $('#update-form, #delete-form, label[class=error]').hide();
        $('.update-link, .delete-link').removeClass('active');
        $('#create-form').show();
        $(this).addClass('active');
        $('form input').val('');
        $("#show-create-results, #show-update-results, #show-delete-results," ).empty();
    });

    $('.update-link').click(function () {
        $('#create-form, #delete-form, label[class=error]').hide();
        $('.create-link, .delete-link').removeClass('active');
        $('#update-form').show();
        $(this).addClass('active');
        $('form input').val('');
        $("#show-create-results, #show-update-results, #show-delete-results" ).empty();
    });

    $('.delete-link').click(function () {
        $('#create-form, #update-form, label[class=error]').hide();
        $('.create-link, .update-link').removeClass('active');
        $('#delete-form').show();
        $(this).addClass('active');
        $('form input').val('');
        $("#show-create-results, #show-update-results, #show-delete-results" ).empty();
    });
});