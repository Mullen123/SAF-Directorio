function cargaXML(){

    var token = $('#_token').val();
 //guardo valores

    var xml = $('#xmlHidd').val();



#llamo funcion ajax


     ajaxCargaXML(xml, token).done(function (data) {

#si contesto bien el servidor hago lo que quiera


        $("#CargaXML").hide();

        $("#FormXML").show();

        $("#FormXML").html(data);




#data es lo que responde el servidor




     });

}



function ajaxCargaXML(xml, token) {

#configuracion de una peticion ajax basica

typo de peticion sea post o get

data: es lo que envio, aqui es un arreglo $xml->'xml'pero en lenguaje js

url: es donde llegara esa peticion, o sea a tu controlador en el server

datatype: es como quieres tratar la informacion, investiga los diferentes datatype

syc: significa que sea una peticion asincrona, investiga que es asincrono


    return $.ajax({

        type: "POST",

        data : {xml: xml, '_token':token},

        url: url + '/xmlVista',

        dataType: "html",

        sync:false

    });

}






$(document).ready(function(){

//declaro funcion rcarga lista que es la que hace peticion ajax
recargarLista(); 



});



function recargarLista(){

$




}