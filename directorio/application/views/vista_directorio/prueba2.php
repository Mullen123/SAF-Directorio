<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secretaria de Finanzas de la Ciudad de México</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--URL Paginador-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('vendors/font-awesome/css/font-awesome.css');?>"> 
    <link rel="stylesheet" href= "<?php echo base_url('styles/main.css');?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/favicons.png');?>">
    <link   href="<?php echo base_url('styles/blog-img.css');?>" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link   href="<?php echo base_url('styles/style.css');?>" rel="stylesheet" type="text/css">
    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery-3.3.0.js" integrity="sha256-TFWSuDJt6kS+huV+vVlyV1jM3dwGdeNWqezhTxXB/X8="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin=" anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    

    <script type="text/javascript" src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.js');?>"></script>  
    <script type="text/javascript" src=  "<?php echo base_url('js/dropdown.js');?>"  ></script>
    <script type="text/javascript" src=    "<?php echo base_url('slider/jquery.js');?>"></script>
    <!-- nuevo  -->
    <link rel="stylesheet"  href="<?php echo base_url('css/item.css');?>"> 
    <link rel="stylesheet" href="<?php  echo base_url('ccs/submenu.css');?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php  echo base_url('css/Pagination.css');?>">
    
    <!--EMPIEZA EL  CCS DEL DROPDOWN -->
    <style>
        body {

            font-family:BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";

        }

        .topnav {
          overflow: hidden;
          background-color: #f3f3f3;
      }

      .topnav a {
          float: left;
          display: block;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
      }

      .active {

          color: white;
      }

      .topnav .icon {
          display: none;
      }

      .dropdown {
          float: left;
          overflow: hidden;

      }

      .dropdown .dropbtn_S {
          font-size: 17px;    
          border: none;
          outline: none;
          color: black;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
      }

      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
      }

      .topnav a:hover, .dropdown:hover .dropbtn_S {
          background-color: #555;
          color: white;
      }

      .dropdown-content a:hover {
          background-color: #ddd;
          color: black;
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }

      @media screen and (max-width: 600px) {
          .topnav a:not(:first-child), .dropdown .dropbtn_S {
            display: none;
        }
        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
    }
    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
    .topnav.responsive .dropdown {float: none;}
    .topnav.responsive .dropdown-content {position: relative;}
    .topnav.responsive .dropdown .dropbtn_S {
        display: block;
        width: 100%;
        text-align: left;
    }
}
.text{
    display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    padding: 0px;
}

/* visited link */
a:visited {
  color: #009288 ;
}

/* mouse over link */
a:hover {
  color: #bdbfbf;
}

</style> 

</head>
<body> 
    <header class="Header">
     <div class="Header-top">
        <div class="container">
            <div class="row">
                <div class="Header-content"> 
                    <!-- EN ESTA SECCION VA EL LOGO DE SEFIN-->
                    <div class="HeaderLogo">
                        <a href="http://www.finanzas.cdmx.gob.mx">

                            <img class="Logo-cdmx" src= "<?php  echo base_url('assets/Logo_CDMX.png');?>"/> 
                            <img class="Logo-dep" src="<?php echo base_url('assets/Logo_SEFIN.png');?>"/>
                        </a>
                    </div>
                </div>
                <!--ESTA PARTE MUESTRA EL LADO SUPERIOR DERECHO DE LA VISTA-->   
                <div class="Header-links" style="color:#009288";>
                    <ul class="Items">
                        <h4><a href="https://www.cdmx.gob.mx" target="_blank">CDMX</a> /  <a href="https://www.cdmx.gob.mx/gobierno/gabinete/secretarias" target="_blank">Secretarías</a> / SAF</h4>
                        <p style="line-height: 20px"><a href="http://transparencia.finanzas.cdmx.gob.mx/" target="_blank">Transparencia</a></p>
                        <p style="line-height: 20px"><a href="https://data.finanzas.cdmx.gob.mx/ssac/index.php" target="_blank">Atención Ciudadana</a></p>
                        <p style="line-height: 20px"><a href="https://data.finanzas.cdmx.gob.mx/atencion_ciudadana/" target="_blank">Trámites y Servicios</a></p>
                </ul>
            </div>   


        </div>
    </div>
</div>
<!--    EMPIEZA LA BARRA DE NAVEGACIÓN DEL MENÚ-->
<div class="text">
  <div style="border-bottom: 3px solid #00b140;">
    <div class="topnav" id="myTopnav">
      <a href="http://localhost:8080/grav-skeleton-helium-site/es" class="active">Inicio</a>
      <div class="dropdown">
        <button class="dropbtn_S">Secretaría 
          <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a href="http://localhost:8080/grav-skeleton-helium-site/es/secretaria/acerca-de">Acerca de</a>
          <a href="http://localhost:8080/grav-skeleton-helium-site/es/secretaria/directorio">Directorio</a>
          <a href="http://localhost:8080/grav-skeleton-helium-site/es/secretaria/estructura-organica">Estructura Orgánica</a>
          <a href="http://localhost:8080/grav-skeleton-helium-site/es/secretaria/marco-normativo">Marco Normativo</a>
          <a href="http://localhost:8080/grav-skeleton-helium-site/es/secretaria/transparencia">Transparencia</a>
          <a href="">Informes y reportes</a>
          <a href="http://localhost:8080/grav-skeleton-helium-site/es/secretaria/contacto">Contacto</a>
          <a href="http://localhost:8080/grav-skeleton-helium-site/es/secretaria/manuales-administrativos">Manual administrativo</a>
      </div>
  </div>
  <a href="http://localhost:8080/grav-skeleton-helium-site/es/servicios">Servicios</a>
  <a href="http://localhost:8080/grav-skeleton-helium-site/es/programas">Programas</a>
  <a href="http://localhost:8080/grav-skeleton-helium-site/es/notificaciones">Notificaciones</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>
</div>

</header>
<main>
    <div class="container"> 
     <div class="Sidebar">
      <div id="Sidebar-nav">
        <div class="Sidebar-heading">
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

        <div class="Sidebar-body collapse in" id="Sidebar-nav-body" aria-expanded="true" style="">
            <ul class="Sidebar-nav-items">
                <li class="Link-navigation ">
                    <a style="color: #009288;"  href= "http://www.finanzas.cdmx.gob.mx/secretaria/acerca-de">
                     Acerca de
                 </a>
             </li>
             <!--SE MUESTRA LO DEL LADO IZQUIERDO-->
             <li class="Link-navigation active">
                <a style="color: #009288;"  href="<?php echo site_url('Controller1') ?>">
                    Directorio
                </a>
            </li>
            <li class="Link-navigation ">
                <a style="color: #009288;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/estructura">
                    Estructura Orgánica
                </a>
            </li>
            <li class="Link-navigation ">
             <a style="color: #009288;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/marco-normativo">
                Marco Normativo
            </a>
        </li>                        
        <li class="Link-navigation ">
            <a style="color: #009288;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/transparencia">
                Transparencia
            </a>
        </li>
        <li class="Link-navigation ">
            <a style="color: #009288;"  href="http://www.finanzas.cdmx.gob.mx/contacto">
                Contacto
            </a>
        </li>
    </ul>
</div>
</div>

<div id="Sidebar-nav">
    <div class="Sidebar-heading">
        <a class="Sidebar-title" href="#">
          <div style="color: #000000;" class="Title">
            <h2>
                Directorio
            </h2>
        </div>
    </a>
    <a data-toggle="collapse" data-parent="#Sidebar-nav" href="http://www.finanzas.cdmx.gob.mx/secretaria/directorio#Sidebar-nav-body" aria-expanded="true" aria-controls="collapseSidebar" class="Sidebar-action">
    </a>
</div>

<div class="Panel-elements Header">
    <div style="color: #000000;"  class="Text">
        En esta sección encontrarás el listado de servidores públicos que conforman esta dependencia de la Ciudad de México, así como sus principales datos de contacto.
    </div>
</div>  

</div>

<div class="Panel-functions Share">
    <div class="Panel-functions-share">
        <div class="Panel-functions-label">
            Compartir
        </div>
        <div class="Panel-functions-buttons">
            <a href="mailto:?subject=Te%20comparto%20el%20sigueinte%20enlace&amp;body=Entra%20a%20Secretar%C3%ADa%20de%20Finanzas%20de%20la%20CDMX%20http://www.finanzas.cdmx.gob.mx/secretaria/directorio" target="_blank" class="Button-icon">
                <i class="fa fa-envelope"></i>
            </a>
            <a href="http://twitter.com/share?url=http://www.finanzas.cdmx.gob.mx/secretaria/directorio" target="_blank" class="Button-icon">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="http://www.facebook.com/sharer.php?u=http://www.finanzas.cdmx.gob.mx/secretaria/directorio" target="_blank" class="Button-icon">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="whatsapp://send?text=http://www.finanzas.cdmx.gob.mx/secretaria/directorio" target="_blank" class="Button-icon MobileDevices">
                <i class="fa fa-whatsapp"></i>
            </a>
        </div>
    </div>

    <div class="Panel-functions-print">
        <div class="Panel-functions-label">
            Imprimir
        </div>

        <div class="Panel-functions-buttons">
            <a href="javascript:window.print();" class="Button-icon">
                <i class="fa fa-print"></i>
            </a>
        </div>

    </div>

</div>  

</div> <!--fin del slide-->

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
                       ?> <option value="<?php echo   $row->id_empleado; ?>" label="<?php echo $row->nombre_cargo." ".$row->desc_puesto; ?>"></option>.'<br>'.'<br>' <?php
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
            <input type="text" class="form-control"  placeholder="Buscar" name="por_nombre" id="por_nombre">
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
            '<a href="'.site_url('Controller1/enlace/').$row->id_empleado.'">',
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
        '<a style="color: #000000;"><strong>Dirección: </strong>',"Calle ",(($calle) ? $calle : 'sin dato'), " ".(($numero) ? $numero : 'sin dato'). ", "."Colonia ",(($colonia) ? $colonia : 'sin dato'),", "."C.P. ",(($cp) ? $cp : 'sin dato')," , "."Delegación ",(($delegacion) ? $delegacion : 'sin dato'),", ",(($ciudad) ? $ciudad :'sin dato'),'</a>'.'<br /> '.'<br /> '.'<br /> '.

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
                            <img src="assets/Logo_Generico_F.png" alt="Logo de la Dependencia">
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
                 <img width="390" height="115" src="assets/Tenencia/tranp-saf+copia.jpg" alt="Ventanilla Única Delegacional"/>
             </a>
         </div> 
     </div>
     <div class="Footer-banners-item">
        <div class="layer-agileits2">
            <a href="https://www.transparencia.cdmx.gob.mx/oficialia-mayor-del-gobierno-de-la-ciudad-de-mexico"target="_blank">
                <img width="320" height="115" src="assets/Tenencia/transp-om.jpg" alt="Centros de Servicios y Atención Ciudadana (CESAC)"/>
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
    var basepath = <?php echo "'".site_url('Controller1/enlace/') ."'"?>;

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


            if(empleado.nombre_emp){

                var nombre = empleado.nombre_emp.toLowerCase();
                nombre = nombre.replace("á", "a");
                nombre = nombre.replace("é", "e");
                nombre = nombre.replace("í", "i");
                nombre = nombre.replace("ó", "o");
                nombre = nombre.replace("ú", "u");

                if(nombre.includes(input)){
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
                    '<a style="color: #000000;"><strong>Contacto: </strong>'+((empleado.email) ? empleado.email : 'sin dato') +'</a>'+'<br /> '+'<br /> '+'<br /> '+ 
                    '<a style="color: #000000;"><strong>Telefono: </strong>'+empleado.telefono.replace(/[{{[}\]]/gi, '')+'</a>'+'<br /> '+'<br /> '+'<br /> '+
                    '<a style="color: #000000;"><strong>Dirección: </strong>'+"Calle "+(empleado.calle ? empleado.calle : 'sin dato') + " " +((empleado.numero) ? empleado.email : 'sin dato') + ", "+"Colonia "+(empleado.colonia ? empleado.colonia : 'sin dato')+", "+"C.P. "+((empleado.cp) ? empleado.cp : 'sin dato')+" , "+"Delegación "+((empleado.delegacion) ? empleado.delegacion : 'sin dato')+", "+((empleado.ciudad) ? empleado.ciudad : 'sin dato')+'</a>'+'<br /> '+
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

<script type="text/javascript"> ruta_proyecto = "<?php echo site_url('Controller1/enlace/')?>"</script>

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
