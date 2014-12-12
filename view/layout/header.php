<!DOCTYPE html>
<html>
    <head>
        <title>Apartamentos A La Playa</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="view/css/reset.css">
        <link rel="stylesheet" type="text/css" href="view/css/unsemantic.css">
        <link rel="stylesheet" type="text/css" href="view/css/jquery-ui-1.11.2/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="view/css/style.css"
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
           $(".buttonLocation").click(function(evento){
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
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-100 header">
                <div class="grid-40">
                    <img src="view/img/logo.png"></img>
                </div>
                <div class="grid-55">
                </div>
                <div class="grid-5">
                    
                </div>
            </div>
            <div class="grid-100 buttons">
                <div class="grid-20" id="bheader">
                    <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                        <span class="ui-button-text">Inicio</span>
                    </button>
                </div>
                <div class="grid-15" id="bheader">
                    <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                        <span class="ui-button-text">Servicios</span>
                    </button>
                </div>
                <div class="grid-15" id="bheader">
                    <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                        <span class="ui-button-text">Instalaciones</span>
                    </button>
                </div>
                <div class="grid-15" id="bheader">
                    <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                        <span class="ui-button-text">Ubicación</span>
                    </button>
                </div>
                <div class="grid-15" id="bheader">
                    <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                        <span class="ui-button-text">Contacto</span>
                    </button>
                </div>
                <div class="grid-20" id="bheader">
                    <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button">
                        <span class="ui-button-text">Login</span>
                    </button>
                </div>
            </div>

