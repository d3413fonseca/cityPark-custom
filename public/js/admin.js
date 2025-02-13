$(document).ready(function () {
    var baseUrl    = window.location.origin + "/";
    
    $('.cancel-button').on('click', function(event) { 
        event.preventDefault();
        var route = $(this).data('route');
        if (route) {
            window.location.href = baseUrl + route;
        }
    });

    if ($('.alert').length){
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 5000);
    };
})