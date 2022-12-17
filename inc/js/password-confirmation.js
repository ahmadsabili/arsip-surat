$(document).ready(function () {
    $('#password, #konfirmasi_password').change(function () {
        var password = $('#password').val();
        var konfirmasi_password = $('#konfirmasi_password').val();
        if (password != konfirmasi_password) {
            $('#konfirmasi_password').addClass('is-invalid');
            $('#konfirmasi_password').parent().find('.invalid-feedback').html('Konfirmasi password tidak cocok');
            $('#submit-button').attr('disabled', true);
        } else {
            $('#konfirmasi_password').removeClass('is-invalid');
            $('#konfirmasi_password').parent().find('.invalid-feedback').html('');
            $('#submit-button').attr('disabled', false);
        }
    });
});