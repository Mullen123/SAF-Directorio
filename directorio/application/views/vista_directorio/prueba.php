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
    <!--<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('vendors/font-awesome/css/font-awesome.css');?>">
    <!--  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.css">  -->
    
    <link rel="stylesheet" href= "<?php echo base_url('styles/main.css');?>">
    <!--  <link rel="stylesheet" href="styles/main.css">-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/favicons.png');?>">
    <!--  <link rel="shortcut icon" type="image/x-icon" href="assets/favicons.png">-->

    <link   href="<?php echo base_url('styles/blog-img.css');?>" rel="stylesheet" type="text/css">

    <!--<link href="styles/blog-img.css" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->

    <link   href="<?php echo base_url('styles/style.css');?>" rel="stylesheet" type="text/css">

    <!--<link href="styles/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery-3.3.0.js" integrity="sha256-TFWSuDJt6kS+huV+vVlyV1jM3dwGdeNWqezhTxXB/X8="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin=" anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    

    <script type="text/javascript" src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.js');?>"></script>
    <!--<script type="text/javascript" src="vendors/bootstrap/dist/js/bootstrap.js"></script> -->
    
    <script type="text/javascript" src=  "<?php echo base_url('js/dropdown.js');?>"  ></script>
    <!--<script type="text/javascript" src="js/dropdown.js"></script>-->

    <script type="text/javascript" src=    "<?php echo base_url('slider/jquery.js');?>"></script>
    <!-- <script type="text/javascript" src="slider/jquery.js"></script>-->




    <!-- nuevo  -->
  
    
    <link rel="stylesheet"  href="<?php echo base_url('css/item.css');?>"> 
    <!--    <link rel="stylesheet" href="css/item.css">  -->
    <link rel="stylesheet" href="<?php  echo base_url('ccs/submenu.css');?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

    <link rel="stylesheet" href="<?php  echo base_url('css/Pagination.css');?>">
    <!--<link rel="stylesheet" href="css/Pagination.css"> -->
    
    
</head>
<body> 
    <header class="Header">
     <div class="Header-top">
        <div class="container">
            <div class="row">
                <div class="Header-content">
                    <section></section>
                    <div class="HeaderLogo">
                        <a href="http://www.finanzas.cdmx.gob.mx">

                            <img class="Logo-cdmx" src= "<?php  echo base_url('assets/Logo_CDMX.png');?>"/> 

                            <!--<img class="Logo-cdmx" src="assets/Logo_CDMX.png"/>-->
                            
                            <img class="Logo-dep" src="<?php echo base_url('assets/Logo_SEFIN.png');?>"/> 


                            <!--<img class="Logo-dep" src="assets/Logo_SEFIN.png"/> -->

                        </a>
                    </div>
                    
                            
                </div>
                <div class="Header-links">
                    <ul class="Items">
                      <li><a href="http://www.cdmx.gob.mx" target="_blank">CDMX</a> 
                          <a href="http://www.cdmx.gob.mx/gobierno/gabinete/secretarias" target="_blank">Secretarías</a> / <strong>SAF</strong></li>
                          <li><a href="http://transparencia.finanzas.cdmx.gob.mx" target="_blank">Transparencia</a></li>
                          <li><a href="http://data.finanzas.cdmx.gob.mx/ssac/index.php" target="_blank">Atención Ciudadana</a></li>
                          <li><a href="http://data.finanzas.cdmx.gob.mx/atencion_ciudadana/" target="_blank">Trámites y Servicios</a></li>
                      </ul>
                  </div>      
              </div>
          </div>
      </div>





      <!--Empieza la barra de navegacion del menu-->
      <div class="HeaderMenu">
        <div class="HeaderNav-mobile">
            <a href="#" class="Mobile-actions dropdown-toggle parent" id="drop-header" data-toggle="dropdown" aria-haspopup="false"
            aria-expanded="false">
            Menú
        </a>
        <div class="Header-finder"
           <a href="http://www.finanzas.cdmx.gob.mx/#" class="Mobile-actions">
            Buscar
        </a>
    </div>  

    <div class="dropdown-menu child" id="mobile-menu">
        <div class="only-mobile">
            <a id="enlaces-sefin" href="http://transparencia.finanzas.cdmx.gob.mx" target="_blank">
                <i class="fa fa-bolt" aria-hidden="true"></i> Transparencia
            </a>
            <a id="enlaces-sefin" href="http://data.finanzas.cdmx.gob.mx/ssac/index.php" target="_blank">
                <i class="fa fa-bolt" aria-hidden="true"></i> Atención Ciudadana
            </a>

            <a id="enlaces-sefin" href="http://data.finanzas.cdmx.gob.mx/atencion_ciudadana/" target="_blank">
                <i class="fa fa-bolt" aria-hidden="true"></i> Trámites y Servicios
            </a>
        </div>


        <div class="finanzas-submenu">
            <a id="inicio" class="enlaces-secretaria" href= "views/index.html">
                Inicio
            </a>
        </div>


        <!--submenu de la parte de secretaria-->
        <div class="finanzas-submenu">
            <a href="#" class="enlaces-secretaria" id="enlaces-secretaria">
                Secretaría
            </a>
            <ul class="lista-enlaces" id="list-mobile" style="display: none">
                <li>
                    <a id="links-secretaria" class="secre-primero" href="http://www.finanzas.cdmx.gob.mx/secretaria/acerca-de">
                        Acerca de 
                    </a>
                </li>

                <li>
                    <a id="links-secretaria" href="http://www.finanzas.cdmx.gob.mx/secretaria/directorio">
                        Directorio
                    </a>
                </li>

                <li>
                    <a id="links-secretaria" href="http://www.finanzas.cdmx.gob.mx/secretaria/estructura">
                        Estructura Orgánica
                    </a>
                </li>

                <li>
                    <a id="links-secretaria" href="http://www.finanzas.cdmx.gob.mx/secretaria/marco-normativo">
                        Marco Normativo
                    </a>
                </li>

                <li>
                    <a id="links-secretaria" href="http://www.finanzas.cdmx.gob.mx/secretaria/transparencia">
                        Transparencia
                    </a>
                </li>

                <li>
                    <a id="links-secretaria" class="secre-ultimo" href="http://www.finanzas.cdmx.gob.mx/contacto">
                        Contacto
                    </a>
                </li>

            </ul>
        </div>


        <div class="finanzas-submenu">

            <a href="http://www.finanzas.cdmx.gob.mx/servicios" class="enlaces-secretaria">
                Servicios
            </a>

        </div>

        <div class="finanzas-submenu">

            <a href="http://www.finanzas.cdmx.gob.mx/programas" class="enlaces-secretaria">
                Programas
            </a>
        </div>


        <div class="finanzas-submenu" id="last-item">
            <a href="#" class="enlaces-secretaria" id="enlaces-notificaciones">
                Notificaciones
            </a>
            <ul class="lista-enlaces" id="list-mobile" style="display: none">
                <li>
                    <a id="links-notificaciones" href="http://www.finanzas.cdmx.gob.mx/notificaciones/teso-subastas-cdmx">Teso-Subastas CDMX</a>
                </li>
                <li>
                    <a id="links-notificaciones" href="http://www.finanzas.cdmx.gob.mx/notificaciones/remates-y-enajenaciones">Remates y Enajenaciones</a>
                </li>
                <li>
                    <a id="links-notificaciones" href="http://www.finanzas.cdmx.gob.mx/notificaciones/licitaciones">Licitaciones</a>
                </li>
                <li>
                    <a id="links-notificaciones" href="http://www.finanzas.cdmx.gob.mx/notificaciones/notificaciones-federales">Notificaciones Federales</a>
                </li>
            </ul>
        </div>
    </div>
</div>


<ul class="HeaderNav">
    <div class="container">
        <ul class="Header-container">
            <li class="HeaderNav-element Fastlink"><a href="http://transparencia.finanzas.cdmx.gob.mx">Transparencia</a></li>
            <li class="HeaderNav-element Fastlink"><a href="http://data.finanzas.cdmx.gob.mx/ssac/index.php">Atención Ciudadana</a></li>
            <li class="HeaderNav-element Fastlink"><a href="http://data.finanzas.cdmx.gob.mx/atencion_ciudadana/">Trámites y Servicios</a></li>
            <li class="HeaderNav-element selected"><a href="index.html">Inicio</a></li>
            <li class="HeaderNav-element dropdown">
                <a class="dropdown-toggle" href="http://www.finanzas.cdmx.gob.mx/secretaria" data-toggle="dropdown" aria-haspopup="false"
                aria-expanded="false">
                Secretaría
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="acerca-de.html">
                        Acerca de
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Controller1') ?>">
                        Directorio
                    </a>
                </li>
                <li>
                    <a href="http://www.finanzas.cdmx.gob.mx/secretaria/estructura">
                        Estructura Orgánica
                    </a>
                </li>
                <li>
                    <a href="http://www.finanzas.cdmx.gob.mx/secretaria/marco-normativo">
                        Marco Normativo
                    </a>
                </li>
                <li>
                    <a href="http://www.finanzas.cdmx.gob.mx/secretaria/transparencia">
                        Transparencia
                    </a>
                </li>
                <li>
                    <a href="http://www.finanzas.cdmx.gob.mx/contacto">
                        Contacto
                    </a>
                </li>
            </ul>
        </li>

        <li class="HeaderNav-element">
            <a href="http://www.finanzas.cdmx.gob.mx/servicios">
                Servicios
            </a>
        </li>
        <li class="HeaderNav-element">
            <a href="http://www.finanzas.cdmx.gob.mx/programas">
                Programas
            </a>
        </li>
        <li class="HeaderNav-element dropdown">
            <a class="dropdown-toggle" href="http://www.finanzas.cdmx.gob.mx/notificaciones" data-toggle="dropdown" aria-haspopup="false"
            aria-expanded="false">
            Notificaciones
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/teso-subastas-cdmx">
                    Teso-Subastas CDMX
                </a>
            </li>
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/remates-y-enajenaciones">
                    Remates y Enajenaciones
                </a>
            </li>
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/licitaciones">
                    Licitaciones
                </a>
            </li>
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/notificaciones-federales-por-estrados">
                    Notificaciones Federales por Estrados
                </a>
            </li>
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/notificaciones-federales-por-edictos">
                    Notificaciones Federales por Edictos
                </a>
            </li>
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/notificaciones-locales-por-estrados">
                    Notificaciones Locales por Estrados
                </a>
            </li>
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/notificaciones-locales-por-edictos">
                    Notificaciones Locales por Edictos
                </a>
            </li>
            <li>
                <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/licitaciones-consolidadas">
                  Licitaciones consolidadas
              </a>
             </li>

          <li>
            <a href="http://www.finanzas.cdmx.gob.mx/notificaciones/listado-de-proveedores">
             Listado de proveedores
         </a>
         </li>

         </ul>
         </li>
         </ul>
    </div>
</ul>

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


                    <a style="color: #000000;"  href= "<?php echo base_url('v-aux/acerca-de.html');?>">
                        <!-- <a style="color: #000000;"  href="acerca-de.html"> -->

                            Acerca de
                        </a>
                    </li>



                    <!--se muestra en la parte izquierda de la pantalla-->
                    <li class="Link-navigation active">

                        <a style="color: #000000;"  href="<?php echo site_url('Controller1') ?>">


                            <!--    <a style="color: #000000;"  href="directorio.php">-->

                                Directorio
                            </a>
                        </li>
                        <li class="Link-navigation ">
                            <a style="color: #000000;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/estructura">
                                Estructura Orgánica
                            </a>
                        </li>
                        <li class="Link-navigation ">
                         <a style="color: #000000;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/marco-normativo">
                            Marco Normativo
                        </a>
                    </li>                        
                    <li class="Link-navigation ">
                        <a style="color: #000000;"  href="http://www.finanzas.cdmx.gob.mx/secretaria/transparencia">
                            Transparencia
                        </a>
                    </li>
                    <li class="Link-navigation ">
                        <a style="color: #000000;"  href="http://www.finanzas.cdmx.gob.mx/contacto">
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


    
                  <!-- <div class="list-item"> -->

               <!-- </ul>-->

            <!--</div> --> <!-- fin del <div class="list-wrapper"> -->

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


      


                    //(empleado.nombre_cargo ? empleado.nombre_cargo : '')
                    //console.log(indiceDelArray);
                    //console.log(empleado.telefono);
                    //console.log(JSON.parse(empleado.telefono));
                    //arrayDeCoincidencias.push(empleado.id_empleado);
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
           // console.log("Paginador");
           // $('#pagination-container').pagination('redraw');
           //$('#pagination-container').pagination('updateItems');
           //$('#pagination-container').pagination('updateItemsOnPage', 10);
           //$('#pagination-container').pagination('drawPage', 5);
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
