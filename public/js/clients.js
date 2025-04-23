$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    var baseUrl    = window.location.origin + "/";
    
    if ($("#clientInformation").length) {
        $('#clientInformation').on("shown.bs.modal", function (e) {
            var tit = $(e.relatedTarget).data('title');
            var data = $(e.relatedTarget).data('id');
            
            $('#clientInformation #informationTitle').html('Informação do Cliente: <b>' + tit + '</b>');
            
            // Mostrar o preload e esconder o conteúdo
            $('#preload').show();
            $('#content').hide();
            
            $.ajax({
                type: 'POST',
                dataType: "json",
                url: baseUrl + "admin/clientes/getInformation",
                data: { 
                    clientID: data
                },
                success: function (result) { 
                    $('#cli_name').text(result.cli_name);
                    $('#cli_email').text(result.cli_email);
                    $('#cli_phone').text(result.cli_phone); 
                    $('#cli_address1').text(result.cli_address1);
                    $('#cli_address2').text(result.cli_address2);
                    $('#cli_zipcode').text(result.cli_zipcode);
                    $('#cli_city').text(result.cli_city);

                    // Esconder o preload e mostrar o conteúdo
                    $('#preload').hide();
                    $('#content').show();
                },
                error: function (xhr, status, error) {
                    if (xhr.status > 0)
                        alert('Encontrado o erro: ' + xhr.status);

                    // Esconder o preload em caso de erro
                    $('#preload').hide();
                    $('#content').show();
                }
            });
        });
    }
});
