$(document).ready(function() {
    $("#btn-scheme").click(function() {
        let img = $("#img-scheme");
        let expanded = img.hasClass("expanded");

        img.css({
            "height": expanded ? "400px" : "100%"
        });

        img.toggleClass("expanded");    
    });

    $(".btn-detail").click(function() {
        let info = $(this).closest(".img-code").next(".information");
        let expanded = info.hasClass("expanded");
        
        info.css({
            "height": expanded ? "0px" : "100%",
            "background-color": expanded ? "white" : "grey",
            // continuar isto?
        });

        info.toggleClass("expanded");
        
    });
})
