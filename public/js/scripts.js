$(document).ready(function() {
    // ver circuitos completos
    $(".scheme-container .header").append("<button class='btn btn-dark btn-scheme' class='btn btn-secondary'>Ver esquema completo</button>");

    $(".btn-scheme").click(function() {
        let img = $(".img-scheme");
        let expanded = img.hasClass("expanded");
        
        img.css({
            "height": expanded ? "400px" : "100%"
        });
        
        img.toggleClass("expanded");    
    });
    
    // botão de informação que aparece em cada imagem de código para mostrar a informação
    $(".img-code").append("<br><br><button class='btn btn-secondary btn-detail'><i class='fa fa-info'></i></button>")

    $(".btn-detail").click(function() {
        let info = $(this).closest(".img-code").next(".information");
        let expanded = info.hasClass("expanded");
        
        info.css({
            "height": expanded ? "0px" : "100%",
        });

        info.toggleClass("info");
        info.toggleClass("expanded");
    });
})
