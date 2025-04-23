
$(document).ready(function () {
    var baseUrl = window.location.origin + "/";

    $('.datatableList').each(function () {
        $(this).DataTable({// Verifica se a tabela já foi inicializada
            "aaSorting": [], 
            "language": {
                "lengthMenu": "Mostrar _MENU_ registos por página",
                "search": "Procurar",
                "zeroRecords": "Sem registos - Desculpe",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Sem registos disponíveis",
                "infoFiltered": "(filtrado de _MAX_ registos totais)",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Seguinte"
                }
            },
            "pageLength": 10 // Número padrão de registos por página
        });
    });

    $('.cancel-button').on('click', function (event) {
        event.preventDefault();
        var route = $(this).data('route');
        if (route) {
            window.location.href = baseUrl + route;
        }
    });

    if ($('.setFocus').length) {
        $(".setFocus").focus();
    }
    ;

    if ($('.alert').length) {
        setTimeout(function () {
            $('.alert').fadeOut('slow');
        }, 5000);
    }
    ;

    if ($('.calendarFormat').length) {
        $(".calendarFormat").datetimepicker({
            format: 'DD/MM/YYYY',
            defaultDate: new Date()
        });
    }
    ;
});




