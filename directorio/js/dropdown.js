$(document).ready(function () {
    $('.finanzas-submenu a.enlaces-secretaria').on("click", function (e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});

jQuery(document).ready(function(){
    $(".oculto").hide();
    $(".inf").click(function(){
        var nodo = $(this).attr("href");

        if ($(nodo).is(":visible")){
            $(nodo).hide();
            return false;
        }else{
            $(".oculto").hide("slow");
            $(nodo).fadeToggle("fast");
            return false;
        }
    });
});

