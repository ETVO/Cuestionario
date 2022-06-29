
$(function() {
    $('#togglePassword').click(function() {
        $(this).toggleClass('bi-eye-slash bi-eye-fill');
        var type = $(this).hasClass('bi-eye-fill') ? "text" : "password";
        var title = $(this).hasClass('bi-eye-fill') ? "Ocultar" : "Mostrar";
        $(this).attr('title', title + ' contraseña')
        var target = $(this).attr('for');
        $('#' + target).attr('type', type);
    });

    $('#buttonlessForm select, #buttonlessForm input').on('change', (e) => {
        let form = $(e.target).parents('form:first');
        form.submit();
    })

    $('#reloadForm').on('click', (e) => {
        let formId = $(e.target).attr('for');
        $('#' + formId).submit();
    })
});