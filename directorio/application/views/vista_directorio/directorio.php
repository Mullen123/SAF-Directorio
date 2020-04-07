<main>
  <div class="container"> 
   <div class="Sidebar"> <!--esto es lo del seccion de la izquierda-->
    <div><!-- es esta-->
      <div class="Sidebar-heading" style="font-size:100%; margin-left: 90px">
        <a class="Sidebar-title" href="http://www.finanzas.cdmx.gob.mx/secretaria">
          <div style="color: #000000;" class="Title">
         
            <h2>
              Secretaría
            </h2>
          </div>
        </a>
        <a data-toggle="collapse" data-parent="#Sidebar-nav" href="http://www.finanzas.cdmx.gob.mx/secretaria/directorio#Sidebar-nav-body" aria-expanded="true" aria-controls="collapseSidebar" class="Sidebar-action">
        </a>
      </div>

      <!--SE MUESTRA LO DEL LADO IZQUIERDO-->

      <div class="Sidebar-body collapse in" id="Sidebar-nav-body" aria-expanded="true" style="margin-left: 60px">
        <ul class="Sidebar-nav-items">
          <div>
            <br>

            <a style="color: #009288; font-size:110%; "  href= "http://www.finanzas.cdmx.gob.mx/secretaria/acerca-de">
             Acerca de
           </a>
         </div><br>  
         <div>
          <a style="color: #009288; font-size:110%;"  href="<?php echo site_url('Directorio') ?>">
            Directorio
          </a>
        </div><br>  

        <div>
          <a style="color: #009288; font-size:110%;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/estructura">
            Estructura Orgánica
          </a>
        </div><br>  
        <div>
          <a style="color: #009288; font-size:110%;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/marco-normativo">
            Marco Normativo
          </a><br>
        </div><br>  

        <div>
         <a style="color: #009288; font-size:110%;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/transparencia">
          Transparencia
        </a>
      </div><br>  
      <div>
        <a style="color: #009288; font-size:110%;"  href="http://www.finanzas.cdmx.gob.mx/contacto">
          Contacto
        </a>  
      </div>
    </ul>
  </div>



</div>
</div><!--fin del slide-->

<div class="Cont
ent">                             
<div class="ListDirectorio-Component">
  <div class="Panel-elements Filters">
    <div style="color: #000000;" class="Title">
      <h2>
        Secretaría de Administración y Finanzas
      </h2>
    </div>
    <div class="Filter-double">
      <form action="#" data-request="listdirectorio::onSelectStructure">
        <input type="hidden" name="page" value="1">
        <div class="Filter-select-group">
          <div class="Filter-select-label">
            Por nivel
          </div>



          <!--esto en de la parte desplegable de seleccionar-->

          <select class="Filter-select-input" name="selectByCharge"  onchange="getval(this);">

           <?php 

           foreach($resultados->result () as $row){
           ?> <option value="<?php echo $row->id_empleado; ?>" label="<?php echo $row->nombre_cargo." ".$row->desc_puesto; ?>"></option>.'<br>'.'<br>' <?php
         }

         ?>
       </select>
     </div>
     <div class="Filter-select-group">
      <div class="Filter-select-label">
        Por persona 
      </div>
      <div class="input-group">
        <!--BUSCADOR POR PERSONA --> 
        <input type="text" class="form-control"  placeholder="Ingrese nombre de la persona..." name="por_nombre" id="por_nombre">
        <span class="input-group-btn">
         <button class="btn btn-default">
          <i class="fa fa-search"></i>
        </button>
      </span>
    </div>
  </div>
</form>
</div>



<div class="list-wrapper" id="contenedorElementos">
  <ul id="accordion" class="accordion">

    <?php
    $ar = $resultados->result();
    foreach($resultados->result () as $row){
    if($row->vacante != 1){
    $string1=$row->telefono;

    $remove[] = '"';
    $remove[] = '[';
    $remove[] = '{';
    $remove[] = '{';
    $remove[] = '}';
    $remove[] = ']';

    $email = $row->email;
    $calle = $row->calle;
    $numero = $row->numero;
    $colonia = $row->colonia;
    $cp = $row->cp;
    $delegacion = $row->cp;
    $ciudad = $row->ciudad;

    echo 
    '<div class="list-item">'.
      ' <div class="link">'.
        '<a href="'.site_url('Directorio/enlace/').$row->id_empleado.'">',
          $row->nombre_cargo ." ".$row->desc_puesto.    
        '</a>'.'<i class="fa fa-chevron-down"></i>'. 
      '</div>'.

      '<ul  id = "MYUL" class="submenu">'.
       '<div class="cd-item">'.
        "<img src='$row->path_picture' class='w3-left w3-circle w3-margin-right' alt='Item Preview'>". 
      '</div>'.




      '<a style="color: #000000;"><strong>Titular: </strong>',$row->nombre_emp ." ".$row->ape_pat." ".$row->ape_mat,'</a>'.'<br /> '.'<br /> '.'<br /> '.
      '<a style="color: #000000;"><strong>Contacto: </strong>',(($email) ? $email : 'sin dato'),'</a>'.'<br /> '.'<br /> '.'<br /> '. 
      '<a style="color: #000000;"><strong>Telefono: </strong>',str_replace( $remove, "", ($string1) ? $string1 : 'sin dato'),'</a>'.'<br /> '.'<br /> '.'<br /> '.
      '<a style="color: #000000;"><strong>Dirección: </strong>',"Calle ".(($numero) ? $numero : 'sin dato'). ", "."Colonia ",(($colonia) ? $colonia : 'sin dato'),", "."C.P. ",(($cp) ? $cp : 'sin dato')," , "."Delegación ",(($delegacion) ? $delegacion : 'sin dato'),", Ciudad ",(($ciudad) ? $ciudad :'sin dato'),'</a>'.'<br /> '.'<br /> '.'<br /> '.

    '</ul>'.'</div>'; 
  }

}

?>
</ul>
</div>
<div id="pagination-container"></div>
</ul>

</div> <!-- fin panel elements-->

</div> <!--  <div class="ListDirectorio-Component">-->

</div>  <!--fin del content -->
</div> <!--fin del container -->  

</main>
<!-- footer -->
<footer  class="Footer">
  <div  class="Footer-child">
    <div class="container" id="container-footer">
      <div class="Footer-section--c4">
        <div class="Footer-card">
          <div class="Footer-card-logo">
            <a href="http://www.finanzas.cdmx.gob.mx/">
              <img src="<?php echo base_url('assets/Logo_Generico_F.png');
              ?>" alt="Logo de la Dependencia">
            </a>
          </div>
          <div  class="Footer-card-data">
            <div class="Footer-title">  
              <h3>
                Atención ciudadana
              </h3>
            </div>
            <div class="Footer-card-address">
              <div class="Text">
                <strong>Dirección:</strong> Calle Plaza de la Constitución 1Colonia Centro, 
                Delegación Cuauhtémoc C.P. 06000, Ciudad de México
              </div>              
            </div>
          </div>
        </div>

        <ul class="Footer-social">
          <li class="Footer-title">
            <h3>
              Redes sociales
            </h3>
          </li>

          <li class="FooterSocial-item">
            <a href="https://es-es.facebook.com/FinanzasCDMX?sk=wall" target="_blank"><i class="fa fa-facebook" id="facebook"></i></a>
          </li>
          <li class="FooterSocial-item">
            <a href="https://twitter.com/Finanzas_CDMX" target="_blank"><i class="fa fa-twitter" id="twitter"></i></a>
          </li>
          <li class="FooterSocial-item">
            <a href="https://www.youtube.com/channel/UC2wcbLYzyWq5kL2t0M2MrFA?feature=guide" target="_blank"><i class="fa fa-youtube" id="youtube"></i></a>
          </li>
        </ul>
      </div>

      <div  class="Footer-section--c3">
        <div class="Footer-links">

          <ul class="Footer-links-content">
            <li class="Footer-title">
              <h3>
                Navegación
              </h3>
            </li>
            <li class="Footer-links-link"><a href="http://www.finanzas.cdmx.gob.mx">Inicio</a></li>
            <li class="Footer-links-link">
              <a href="http://www.finanzas.cdmx.gob.mx/secretaria">
                Secretaría
              </a>
            </li>
            <li class="Footer-links-link">
              <a href="http://www.finanzas.cdmx.gob.mx/servicios">
                Servicios
              </a>
            </li>
            <li class="Footer-links-link">
              <a href="http://www.finanzas.cdmx.gob.mx/programas">
                Programas
              </a>
            </li>
            <li class="Footer-links-link">
              <a href="http://www.finanzas.cdmx.gob.mx/notificaciones">
                Notificaciones
              </a>
            </li>
            <li class="Footer-links-link"><a href="http://www.finanzas.cdmx.gob.mx/secretaria/transparencia">Transparencia</a></li>
          </ul>
        </div>
      </div>
      <div class="Footer-section--c3">
        <div class="Footer-links">
          <ul class="Footer-links-content">
            <li class="Footer-title">
              <h3>
                Sitios relacionados
              </h3>
            </li>
            <li class="FooterLinks-link">
              <a href="http://www.data.consejeria.cdmx.gob.mx/index.php/gaceta"  target=_blank>
                Gaceta Oficial de la Ciudad de México
              </a>
            </li>
            <li class="FooterLinks-link">
              <a href="http://www.fidere3.df.gob.mx/"  target=_blank>
                Fidere
              </a>
            </li>
            <li class="FooterLinks-link">
              <a href="http://www.finanzas.cdmx.gob.mx/servicios-al-contribuyente/constancia-de-credito-simple" >
                Contratación de Crédito Simple 2016
              </a>
            </li>
            <li class="FooterLinks-link">
              <a href="http://www.finanzas.cdmx.gob.mx/credito-simple-2017" >
               Contratación de Crédito Simple 2017
             </a>
           </li>
           <li class="FooterLinks-link">
            <a href="http://www.finanzas.cdmx.gob.mx/storage/app/uploads/public/585/c35/b5e/585c35b5e8c44585173852.pdf" >
              Contrato de Crédito HSBC 2016
            </a>
          </li>
          <li class="FooterLinks-link">
            <a href="https://data.finanzas.cdmx.gob.mx/programas_anuales_evaluacion.html" >
             Programas Anuales de Evaluación
           </a>
         </li>
         <li class="FooterLinks-link">
          <a href="https://data.finanzas.cdmx.gob.mx/proveedores.html" >
            Procedimiento para la solicitud
          </a>
        </li>
      </ul>
    </div>
  </div>  
  <div class="Footer-section--c2">
    <div class="Footer-banners">
     <div class="Footer-banners-item">
      <div class="layer-agileits2">
        <a href="http://transparencia.finanzas.cdmx.gob.mx/"target="_blank">
         <img width="390" height="115" src="<?php echo base_url('assets/Tenencia/tranp-saf+copia.jpg'); ?>" alt="Ventanilla Única Delegacional"/>
       </a>
     </div> 
   </div>
   <div class="Footer-banners-item">
    <div class="layer-agileits2">
      <a href="https://www.transparencia.cdmx.gob.mx/oficialia-mayor-del-gobierno-de-la-ciudad-de-mexico"target="_blank">
        <img width="320" height="115" src="<?php echo base_url('assets/Tenencia/transp-om.jpg');?>" alt="Centros de Servicios y Atención Ciudadana (CESAC)"/>
      </a>
    </div>
  </div>
  <div class="Footer-banners-item">
    <div class="layer-agileits2">
      <a href="http://www.datosabiertos.cdmx.gob.mx"target="_blank">
        <img width="320" height="115" src=  "<?php echo base_url('assets/Tenencia/datos_abiertos.jpg');?>"  alt="Contrataciones Abiertas"/>
      </a>           
    </div>             
  </div>
  <div class="Footer-banners-item">
   <div class="layer-agileits2">
    <a href="http://www.contratosabiertos.cdmx.gob.mx/" target="_blank">



      <img width="320" height="115" src=  "<?php echo base_url('assets/Tenencia/contrataciones.jpg');?>" alt="Contrataciones Abiertas"/>
    </a>
  </div>
</div>
</div>
</div>
</div> <!--  <div class="container" id="container-footer" -->
</div> <!-- <div  class="Footer-child">-->



  <div class="Footer-child">
    <div class="container"> 
      <div class="Footer-info">   
        <div class="Footer-info-link">
          <b>
            CMS CDMX v1.18.0 2019
          </b>
        </div>

        <div class="Footer-info-link">
          <a href="http://www.finanzas.cdmx.gob.mx/terminos-y-condiciones">
            Términos y Condiciones
          </a>
        </div>

        <div class="Footer-info-link">
          <a href="http://www.finanzas.cdmx.gob.mx/terminos-y-condiciones#Datos-personales">
            Política de privacidad
          </a>
        </div>

        <div  class="Footer-info-link">
          <a href="http://www.cdmx.gob.mx/lgacdmx">
            Licencia de Gobierno Abierto CDMX
          </a>
        </div>

      </div>  
    </div>
  </div>  
</footer>

<!--Scripts Pag-->
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>

<script type="<?php echo base_url('js/buscador.js');?>"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js'></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js'></script>

<script type="text/javascript">
  var inputBusqueda = document.getElementById('por_nombre');
  inputBusqueda.addEventListener('keyup', busqueda);

  var ar = <?php echo json_encode($ar) ?>;
  var basepath = <?php echo "'".site_url('Directorio/enlace/') ."'"?>;

  function busqueda(e){
    var arrayDeCoincidencias = [];
    var input = document.getElementById('por_nombre');
    input = input.value;
    input = input.toLowerCase();
    input = input.replace("á", "a");
    input = input.replace("é", "e");
    input = input.replace("í", "i");
    input = input.replace("ó", "o");
    input = input.replace("ú", "u");
    var contenedorElementos = document.getElementById('contenedorElementos');
    contenedorElementos.innerHTML = "";
    var textoHTML = "";
    ar.forEach(function(empleado,indiceDelArray){
      if(empleado.id_empleado == 577 || empleado.id_empleado == '577'){
        console.log(empleado);
      }

      if(empleado.nombre_emp){

        var nombre = empleado.nombre_emp.toLowerCase();
        nombre = nombre.replace("á", "a");
        nombre = nombre.replace("é", "e");
        nombre = nombre.replace("í", "i");
        nombre = nombre.replace("ó", "o");
        nombre = nombre.replace("ú", "u");

        if(nombre.includes(input)){
         // console.log(empleado.nombre_emp);
          //console.log(empleado.telefono);
          textoHTML += '<div class="list-item">'+
          ' <div class="link">'+
          '<a href="'+basepath+empleado.id_empleado+'">'+
          ((empleado.nombre_cargo) ? empleado.nombre_cargo : '')  +" "+((empleado.desc_puesto) ? empleado.desc_puesto : '')+
          '</a>'+'<i class="fa fa-chevron-down"></i>'+ 
          '</div>'+
          '<ul  id = "MYUL" class="submenu">'+
          '<div class="cd-item">'+
          "<img src='"+empleado.path_picture+"' class='w3-left w3-circle w3-margin-right' alt='Item Preview'>"+
          '</div>'+
          '<a style="color: #000000;"><strong>Titular: </strong>'+empleado.nombre_emp+" "+empleado.ape_pat+" "+empleado.ape_mat+
          '</a>'+'<br /> '+'<br /> '+'<br /> '+
          '<a style="color: #000000;"><strong>Contacto: </strong>'+((empleado.email) ? empleado.email : 'sin dato, ') +'</a>'+'<br /> '+'<br /> '+'<br /> '+ 

          '<a style="color: #000000;"><strong>Telefono: </strong>'+( empleado.telefono ? empleado.telefono.replace(/[{{[}\]]/gi, '') : 'sin dato, ')+'</a>'+'<br /> '+'<br /> '+'<br /> '+
          '<a style="color: #000000;"><strong>Dirección: </strong>'+"Calle: "+(empleado.calle ? empleado.calle : 'sin dato, ') + " "+"Colonia "+(empleado.colonia ? empleado.colonia : 'sin dato, ')+" "+"C.P. "+((empleado.cp) ? empleado.cp : 'sin dato, ')+"  "+"Delegación "+((empleado.delegacion) ? empleado.delegacion : 'sin dato, ')+" "+((empleado.ciudad) ? empleado.ciudad : 'sin dato')+'</a>'+'<br /> '+
          '<br /> '+'<br /> '+
          '</ul>'+'</div>';

        }
      }
    });

    contenedorElementos.innerHTML = textoHTML;
    $(function() {
     var items = $(".list-wrapper .list-item");
     var numItems = items.length;
     var perPage = 10;

     items.slice(perPage).hide();

     $('#pagination-container').pagination({
      items: numItems,
      itemsOnPage: perPage,
      prevText: "&laquo;",
      nextText: "&raquo;",
      onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
      }
    });
   });
  }



</script>

<script  src="<?php echo base_url('js/Pagination.js');?>"></script>
<script src= "<?php echo base_url('pagina/script.js');?>"></script>   
<script  src= "<?php echo base_url('js/submenu.js');?>"></script>

<script type="text/javascript"> ruta_proyecto = "<?php echo site_url('Directorio/enlace/')?>"</script>

<script  src= "<?php echo base_url('onchange/value.js');?>"></script>




<div style="margin-right: -20px; margin-bottom:-20px;" id="gotop"></div>


<script src= "<?php echo base_url('js/jquery.gotop.js');?>"></script>
<script>

  $('#gotop').gotop({
    customHtml: '<i class="fa fa-angle-up fa-2x"></i>',
    bottom: '2em',
    right: '2em'
  }); 

</script>
</body>
</html>
