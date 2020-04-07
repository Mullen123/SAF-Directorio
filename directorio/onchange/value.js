function getval(sel)
{
	var ruta = ruta_proyecto+sel.value;  
	rute = ruta.replace(/ /g, ""); 
	 //alert(ruta);
    //console.log(ruta);


window.location.href= ruta_proyecto+sel.value;
//window.location.href= "/codi/index.php/Controller1/enlace/"+sel.value;
}