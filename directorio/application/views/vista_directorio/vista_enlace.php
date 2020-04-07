                
<main>
 <div class="container">

    <?php
    $actual_link = $this->uri->segment(3);
    $actual_link = intval($actual_link);





    foreach ($resultados->result () as $row) {

       if ($actual_link ==$row->id_empleado) {

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

           '<div class="FullContent">'.
           '<div class="Panel-elements Header">'.
           '<div class="Title">'.
           '<h1>',
           $row->nombre_cargo. " ".$row->desc_puesto

           ,'</h1>'.
           '</div>'.
           '<div class="Text">'.



           '</div>'.
           '</div>'.
           '</div>'.

           '<div class="Sidebar">'.


           '<div class="Panel-elements Incumbent Sm">'.
           '<div class="Title">'.
           '<h2>
           Titular
           </h2>'.
           '</div>'.
           '<div class="Image">'.
           "<img width='343'height=''
           src='..\\..\\$row->path_picture'/>".
           '</div>'.
           '<div class="Title">'.
           '<h2>',
           $row->nombre_emp.'<br>'.$row->ape_pat." ".$row->ape_mat
           ,'</h2>'.
           '</div>'.              
           '<div class="Text">'.
           '<strong>Dirección :</strong>'.'<br>'.
           '<span>'."Calle ",$row->calle, " ", "Número"." ".$row->numero. ", "."Colonia ".$row->colonia.", "."C.P. ".$row->cp." , "."Delegación ".$row->delegacion.", ".$row->ciudad,'</span>'.'</div>'.

           '<div class="Text">'.
           '<p>'.
           '<strong>Teléfonos:</strong>'.'<br>'.
           '<span>',str_replace( $remove, "", $string1),'</span>'.'<br>'.
           '</p>'.
           '</div>'.
           '<div class="Text">'.
           '<p>'.
           '<strong>Correo:</strong>'.'<br>'.
           '<a href="">',$row->email,'</a>'.
           '</p>'.
           '</div>'.
           '</div>'.
          

           '</div>';



       }else{


           $string1=$row->telefono;
           $remove[] = '"';
           $remove[] = '[';
           $remove[] = '{';
           $remove[] = '{';
           $remove[] = '}';
           $remove[] = ']';
           echo 

           '<div class="FullContent">'.
           '<div class="Panel-elements Header">'.
           '<div class="Title">'.
           '<h1>',
           $row->nombre_cargo. " ".$row->desc_puesto

           ,'</h1>'.
           '</div>'.
           '<div class="Text">'.



           '</div>'.
           '</div>'.
           '</div>'.

           '<div class="Sidebar">'.


           '<div class="Panel-elements Incumbent Sm">'.
           '<div class="Title">'.
           '<h2>
           Titular
           </h2>'.
           '</div>'.
           '<div class="Image">'.
           "<img width='343'height=''
           src='..\\..\\$row->path_picture'/>".
           '</div>'.
           '<div class="Title">'.
           '<h2>',
           $row->nombre_emp.'<br>'.$row->ape_pat." ".$row->ape_mat

              //$row->nombre_emp.'<br>'.$row->ape_pat." ".$row->ape_mat
           ,'</h2>'.
           '</div>'.              
           '<div class="Text">'.
           '<p>'.
           '<strong>Teléfonos:</strong>'.'<br>'.
           '<span>',str_replace( $remove, "", $string1),'</span>'.'<br>'.
           '</p>'.
           '</div>'.
           '<div class="Text">'.
           '<p>'.
           '<strong>Correo:</strong>'.'<br>'.
           '<a href="">',$row->email,'</a>'.
           '</p>'.
           '</div>'.
           '</div>'.
        

           '</div>';

  }//termina el else

    }//temrina if que valida si el dato pasado corresposde al id del empleado

 }//terminal for


 ?>


 <div class="Content">


    <?php
    foreach ($resultados->result () as $row) {

     if($actual_link == $row->id_empleado)
        echo'<div class="Panel-elements Structure">'.
    '<div class="Title">'.
    '<h2>
    Área a la que pertenece
    </h2>'.
    '</div>'.
    '<div class="Link">'.

    '<a href="'.site_url('Directorio/enlace/').$row->id_jefe.'">'.'<i class="fa fa-chevron-left"></i>',
    $row->jefe_departamento. " ",$row->puesto_jefe,
    '</a>'.

    '</div>'.
    '</div>';

}//termina el foreach
?>


<div class="Panel-elements Structure">
    <div class="Title">
        <h2>
            Estructura interna
        </h2>
    </div>


    <?php  

    $actual_link = $this->uri->segment(3);
    $actual_link = intval($actual_link);


    foreach ($resultados->result () as $row) {

        if( $actual_link == $row->id_jefe){




            echo  
            '<div class="List-unlisted Structure">'.
            '<ul id="collapseNav"
            class="Accordion-directory-body collapse in"
            aria-expanded="true">'.
            '<li class="Accordion-directory">'.
            '<div class="Accordion-directory-heading">'.
            '<a href="'.site_url('Directorio/enlace/').$row->id_empleado.'">',$row->nombre_cargo ." ".$row->desc_puesto,
            '</a>'.
            '</div>'.

             '</li>'.
            '</ul>'.

            '</div>';




        }


    }

    ?>
</div>

<div class="Panel-functions-label">
    <font face="Calibri" size="5" color ="#566573"><strong><a href="<?php echo site_url('Directorio') ?>">Regresar a Directorio general</a></strong></font>

</div>

</div>    </div>
<div id="BackTop"><a href="#" id="BackTop-action"></a></div>
</main>
<footer class="Footer">
    <div class="Footer-child">
        <div class="container">
            <div class="Footer-section--c4">
                <div class="Footer-card">
                    <div class="Footer-card-logo">
                        <img src="https://s3.amazonaws.com/cdmxassets/themes/base/assets/images/logos/Logo_Generico_F.png" alt="Logo de la Dependencia">
                    </div>
                    <div class="Footer-card-data">
                        <div class="Footer-title">
                            <h3>
                                Atención ciudadana
                            </h3>
                        </div>
                        <div class="Footer-card-address">
                            <div class="Text">
                                <strong>Dirección:</strong> Calle Plaza de la Constitución 1<br>
                                Colonia Centro,
                                Delegación Cuauhtémoc
                                C.P. 06000, Ciudad de México
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

                        <a href="https://www.facebook.com/AdministracionyFinanzasCiudadDeMexico/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="FooterSocial-item">

                        <a href="https://twitter.com/Finanzas_CDMX" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="FooterSocial-item">

                        <a href="https://www.youtube.com/channel/UCvLAefd2Zj6tKK0Y6sYHciQ/" target="_blank"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <div class="Footer-section--c3">
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
                        <li class="Footer-links-link"><a href="/secretaria/transparencia">Transparencia</a></li>
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
                            <a href="https://www.cdmx.gob.mx/"  target=_blank>
                                Portal de la Ciudad 
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="https://tudinero.cdmx.gob.mx/"  target=_blank>
                                Tu Ciudad, Tu dinero
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
                            <a href="https://data.finanzas.cdmx.gob.mx/programas_anuales_evaluacion.html"  target=_blank>
                                Programas Anuales de Evaluación
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="http://data.finanzas.cdmx.gob.mx/proveedores.html"  target=_blank>
                                Procedimiento para la solicitud
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="https://www.congresocdmx.gob.mx/"  target=_blank>
                                Congreso de la Ciudad de México
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="http://www.infodf.org.mx/"  target=_blank>
                                infoDF
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="http://www.data.consejeria.cdmx.gob.mx/index.php/gaceta"  target=_blank>
                                Gaceta Oficial de la Ciudad de México
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="https://www.fidere.cdmx.gob.mx/" >
                                FIDERE
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="https://www.sacmex.cdmx.gob.mx/"  target=_blank>
                                SACMEX
                            </a>
                        </li>
                        <li class="FooterLinks-link">
                            <a href="https://www.semovi.cdmx.gob.mx/" >
                                SEMOVI
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="Footer-section--c2">
                <!--  <div class="Footer-banners">
        <div class="Footer-banners-item">
        <a href="http://www.tramitesyservicios.df.gob.mx/wb/TyS/ventanillas_unicas_delegacionales_vud_aacs"
           target="_blank">
            <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/storage/app/uploads/public/58b/99b/e5c/58b99be5c9bb5169939914.jpg" alt="Ventanilla Única Delegacional"/>
        </a>
    </div>
        <div class="Footer-banners-item">
        <a href="http://www.tramitesyservicios.df.gob.mx/wb/TyS/directorio_de_responsables_de_cesac"
           target="_blank">
            <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/storage/app/uploads/public/58b/99c/022/58b99c0226d5e943090764.jpg" alt="Centros de Servicios y Atención Ciudadana (CESAC)"/>
        </a>
    </div>
        <div class="Footer-banners-item">
        <a href="http://www.datosabiertos.cdmx.gob.mx"
           target="_blank">
            <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/storage/app/uploads/public/5a2/6fc/e61/5a26fce61345d914525206.jpg" alt="Datos Abiertos"/>
        </a>
    </div>
        <div class="Footer-banners-item">
        <a href="http://www.contratosabiertos.cdmx.gob.mx/"
           target="_blank">
            <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/storage/app/uploads/public/58b/99b/b12/58b99bb12e47a841803433.jpg" alt="Contrataciones Abiertas"/>
        </a>
    </div>
</div>-->

<div class="Footer-section--c2">
    <div class="Footer-banners">
        <div class="Footer-banners-item">
            <a href="http://transparencia.finanzas.cdmx.gob.mx/" target="_blank">
                <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/media/Nuevas+imagenes/tranp-saf+copia.jpg" alt="Transparencia SAF">
            </a>
        </div>
        <div class="Footer-banners-item">
           <a href="https://www.transparencia.cdmx.gob.mx/oficialia-mayor-del-gobierno-de-la-ciudad-de-mexico" target="_blank">
            <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/media/Nuevas+imagenes/transp-om.jpg" alt="Transparencia Histórico OM">
        </a>
    </div>
    <div class="Footer-banners-item">
        <a href="http://www.datosabiertos.cdmx.gob.mx" target="_blank">
            <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/storage/app/uploads/public/5a2/6fc/e61/5a26fce61345d914525206.jpg" alt="Datos Abiertos">
        </a>
    </div>
            <!--  
                <div class="Footer-banners-item">
                <a href="http://www.contratosabiertos.cdmx.gob.mx/" target="_blank">
                    <img width="320" height="180" src="https://s3.amazonaws.com/cdmxassets/storage/app/uploads/public/58b/99b/b12/58b99bb12e47a841803433.jpg" alt="Contrataciones Abiertas">
                </a>
            </div> -->
        </div>
    </div>


</div>
</div>
</div>
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
               <!--   <div class="Footer-info-link">
                    <a href="http://www.cdmx.gob.mx/lgacdmx">
                        Licencia de Gobierno Abierto CDMX
                    </a> -->
                </div>
            </div>
        </div>
    </footer><script src="https://s3.amazonaws.com/cdmxassets/themes/base/assets/js/dist/vendor.js"></script>
    <script src="https://s3.amazonaws.com/cdmxassets/themes/base/assets/js/dist/framework.js"></script>
    <script>
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-80703668-8', 'auto');
    ga('require', 'linkid');
    ga('send', 'pageview');
</script>
</body>
</html>