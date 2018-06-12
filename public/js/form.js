$(document).ready(function() {
    $('#feedback').submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                alert('Ваше сообщение успешно отправлено!');
                window.history.back();
            },
        });
    });
});