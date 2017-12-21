$(document).ready(function () {
    $('#joke-group').hide();
    $('#choice').change(function () {
        console.log($(this).val());
        if($(this).val() == 'Chuck norris') {
            $('#joke-group').hide();
        } else {
            $('#joke-group').show();
        }
    });
});