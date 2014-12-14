<!DOCTYPE html>
<html>
    <head>
        <title>Apartamentos A La Playa</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="view/css/reset.css">
        <link rel="stylesheet" type="text/css" href="view/css/unsemantic.css">
        <link rel="stylesheet" type="text/css" href="view/css/jquery-ui-1.11.2/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="view/css/style.css">
        <link rel="stylesheet" type="text/css" href="view/css/carrusel.css">
        <script src="view/css/jquery-ui-1.11.2/external/jquery/jquery.js"></script>
        <script src="view/css/jquery-1.11.1.min.js"></script>
        <script src="view/css/jquery-ui-1.11.2/jquery-ui.min.js"></script>
        <script src="view/css/jquery-ui-1.11.2/jquery-ui.structure.min.css"></script>
        <script src="view/css/jquery-ui-1.11.2/jquery-ui.theme.min.css"></script>
        <script>
            $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '<Ant',
            nextText: 'Sig>',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
            $(function () {
                $("#entrada").datepicker();
            });
            $(function () {
                $("#salida").datepicker();
            });
            $(function() {
                $( "#number" )
                .selectmenu()
                .selectmenu( "menuWidget" )
                .addClass( "overflow" );
            });
            $(function() {
                $( "#niños" )
                .selectmenu()
                .selectmenu( "menuWidget" )
                .addClass( "overflow" );
            });
        </script>
        <script>
        $(document).ready(function(){
           $(".buttonService").click(function(evento){
              evento.preventDefault();
              $(".title").load("libs/ServiceTitle.php", {nombre: $(this).text()}, function(){
                  // Usamos el tamaño por brujería de las strings
                  var title = $(this).text().length;
                  var photo_path = "";
                  if(title===30){
                      title = 1;
                      photo_path = "view/img/piscina.jpg";
                  }
                  else if(title===27){
                      title = 2;
                      photo_path = "view/img/wifi.png";
                  }
                  else if(title===31){
                      title = 3;
                      photo_path = "view/img/animales.png";
                  }
                  else if(title===47){
                      title = 4;
                      photo_path = "view/img/habitaciones.jpg";
                  }
                  
                  $(".descripcion").load("libs/ServiceDescription.php", {descripcion: title}, function(){
                      $(".fotoDesc img").attr("src",photo_path);
                  });
              });
           });
        });
        </script>
        <script>
        $(document).ready(function(){
           $(".buttonComplex").click(function(evento){
              evento.preventDefault();
              $(".title").load("libs/ServiceTitle.php", {nombre: $(this).text()}, function(){
                  // Usamos el tamaño por brujería de las strings
                  var title = $(this).html().length;
                  var photo_path = "";
                  if(title===35){
                      title = 1;
                      photo_path = "view/img/apartamentos.jpg";
                  }
                  else if(title===32){
                      title = 2;
                      photo_path = "view/img/recepcion.jpg";
                  }
                  else if(title===36){
                      title = 3;
                      photo_path = "view/img/aparcamiento.jpg";
                  }
                  else if(title===26){
                      title = 4;
                      photo_path = "view/img/bar.jpg";
                  }
                  
                  $(".descripcion").load("libs/ServiceDescription.php", {descripcion: title}, function(){
                      $(".fotoDesc img").attr("src",photo_path);
                  });
              });
           });
        });
        </script>
         <script>
            $(function() {
            $( "#dialog" ).dialog({
            autoOpen: false,
            buttons: {
                  Login: function() {$(this).dialog("close");}
            },
            show: {
            effect: "blind",
            duration: 1000
            },
            hide: {
            effect: "blind",
            duration: 1000
            } 
            });
            $( "#opener" ).click(function() {
            $( "#dialog" ).dialog( "open" );
            });
            });
        </script>
    </head>
    <body>
        <div id="wrapper" class="grid-container">
            <div id="header" class="grid-100 header">
		<div class="grid-40 topHeader1">
                <img id="logo" src="view/img/logo.png"></img>
            </div>
            <div class="grid-55 topHeader2">
                <img id="principal" src="view/img/principal.png"></img>
            </div>
            <div class="grid-5 idiomas">
            <img id="idiomas" src="view/img/españa.png"></img>       
            <img id="idiomas" src="view/img/reino_unido.png"></img>       
            <img id="idiomas" src="view/img/alemania.png"></img>       
            </div>
            <div class="grid-100 buttons">
           		<div class="grid-20" id="bheader">
                    <form action="Inicio" method="post">
                        <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                            <span class="ui-button-text">Inicio</span>
                        </button>
                    </form>
                </div>
                <div class="grid-15" id="bheader">
                    <form action="Servicios" method="post">
                        <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                            <span class="ui-button-text">Servicios</span>
                        </button>
                    </form>
                </div>
                <div class="grid-15" id="bheader">
                    <form action="Instalaciones" method="post">
                        <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                            <span class="ui-button-text">Instalaciones</span>
                        </button>
                    </form>
                </div>
                <div class="grid-15" id="bheader">
                    <form action="Ubicacion" method="post">
                        <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                            <span class="ui-button-text">Ubicación</span>                       
                        </button>
                    </form>
                </div>
                <div class="grid-15" id="bheader">
                    <form action="Contacto" method="post">
                        <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                            <span class="ui-button-text">Contacto</span>
                        </button>
                    </form>
                </div>
                <div class="grid-20" id="bheader">
                    <a id="opener" href="#" id="dialog-link" class="ui-state-default ui-corner-all">Login</a>
                </div>
            </div>
        </div>
            <div id="content" class="grid-100">
                <div id="dialog" title="Login">
    <p class="validateTips">Todos los campos son obligatorios</p>
    <form>
        <fieldset>
                <label for="email">Email</label>
                <input type="text" name="email" id="email"  class="text ui-widget-content ui-corner-all">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"  class="text ui-widget-content ui-corner-all">
                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>
                