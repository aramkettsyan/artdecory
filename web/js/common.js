$('body').on('click', '.click-link', function() {
    window.location = $(this).attr('attr-href');
}) 