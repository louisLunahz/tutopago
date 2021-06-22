<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inicio Sesión</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/agregarContacto.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand - v2.1.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php 
  
  include 'navBar.php';
  $host="localhost";
  $user="root";
  $password="";
  $database="tutopago";
  $consulta="SELECT * FROM pasos where id_operacion=1";
  $link=mysqli_connect($host,$user,$password);
  $bandera=mysqli_select_db($link, $database);
  if ($result = mysqli_query($link, $consulta)) {
    $filas=mysqli_num_rows($result);
  }

  ?>




  <div class="container-fluid">
    <div class="row fila1" >
      <div class="col-sm-3">
        <div id="tarjeta1" class="card bg-light mb-3" style="max-width: 18rem;">
          <div id="header1" class="card-header">Header</div>
          <div class="card-body">
            <h5 id="tituloTarjeta1" class="card-title">Light card title</h5>
            <p id="contenidoTarjeta1" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div  id="tarjeta2" class="card text-white bg-warning mb-3" style="max-width: 18rem;">
          <div id="header2" class="card-header">Header</div>
          <div class="card-body">
            <h5 id="tituloTarjeta2" class="card-title">Warning card title</h5>
            <p id="contenidoTarjeta2" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

      </div>
      
      <div class="col-sm-6 cajaPrimaria">

        <div class="botonAtras">
         <a href="#" class="button adelante" id="btnAtras"> <img src="img/atras.svg" alt="boton adelante"></a>           
       </div>
       <div class="cajaImagenes">
         <div class="caja-imagen-celular">
          <img id="zoom_01" src="img/pasos_registro/1.png" alt="" class="mx-auto d-block imagen-celular" width="100%" data-zoom-image="img/pasos_registro/1.png">
        </div> 

        <div class="cajaFonfoTelefono">
         <img id="zoom_02" src="img/plantillaTelefonoFinal.png" alt="" class="mx-auto d-block fondo-telefono" width="100%" data-zoom-image="img/plantillaTelefonoFinal.png">
       </div>

     </div>


     <div class="botonAdelante">
       <a href="#" class="button adelante" id="btnAdelante"> <img src="img/adelante.svg" alt="boton adelante"></a>           
     </div>

     
   </div>

   <div class="col-sm-3">
    <div id="tarjeta3"  class="card text-white bg-info mb-3" style="max-width: 18rem;">
      <div id="header3" class="card-header">Header</div>
      <div class="card-body">
        <h5 id="tituloTarjeta3" class="card-title">Info card title</h5>
        <p id="contenidoTarjeta3" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div id="tarjeta4" class="card text-white bg-danger mb-3" style="max-width: 18rem;">
      <div id="header4" class="card-header">Header</div>
      <div class="card-body">
        <h5 id="tituloTarjeta4" class="card-title">Danger card title</h5>
        <p id="contenidoTarjeta4" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

  </div>
</div>
<div class="row">

</div>
</div>


<script src='jquery-1.8.3.min.js'></script>
<script src='jquery.elevatezoom.js'></script>
<script>
  let rutas = ["img/pasos_inicio/1.png", "img/pasos_inicio/2.png", "img/pasos_inicio/3.png", "img/pasos_inicio/4.png", "img/pasos_inicio/5.png", "img/pasos_inicio/6.png", "img/pasos_inicio/7.png", "img/pasos_inicio/8.png", "img/pasos_inicio/9.png", "img/pasos_inicio/10.png"];

  console.log(rutas.length);




  
  






  $(document).ready(function(){  //la ejecucion de jquery comienza hasta que la pagina este completamente cargada
    let i=0;


//      $('#zoom_01').elevateZoom({
  //    zoomType        : "inner",
    //   cursor: "crosshair"
     //}); 

    //estos son losvalores que tendrá por defecto la pagina, es decir los de la captura 1 

    $("#zoom_01").attr("src", rutas[i]);
    $("#zoom_01").attr("data-zoom-image", rutas[i]);

    $("#header1").text("Consejo de Seguridad"); 
    $("#tituloTarjeta1").text("Wifi público");
    $("#contenidoTarjeta1").text("No introduzcas tus datos personales o bancarios utilizando un wifi público gratuito o abierto. ");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("seguridad");
          $("#contenidoTarjeta2").text("Cambia la contraseña de acceso de forma periódica.");
            //tarjeta 3, es decir, la verde
            $("#header3").text("Paso1"); 
            $("#tituloTarjeta3").text("Inicio de sesión");
            $("#contenidoTarjeta3").text("Introduce tu número de celular Ingresa tu contraseña  y da clic en entrar");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Importante "); 
            $("#tituloTarjeta4").text("La contraseña");
            $("#contenidoTarjeta4").text("Debe de ser compleja, añadiendo diferentes caracteres, números y letras minúsculas/mayúsculas");





            $("#btnAdelante").click(function(){
              if(i<rutas.length-1){
                i++;

                cambiarContenido(i);
              }
            });  


            $("#btnAtras").click(function(){
              if(i>0){
               i--;
               cambiarContenido(i);
             }


           }); 


            function cambiarContenido(pagina){
              $("#zoom_01").attr("src", rutas[pagina]);
              $("#zoom_01").attr("data-zoom-image", rutas[pagina]);
              switch (pagina) {
               case 0:
               //tarjeta 1, es decir, la blanca
               $("#header1").text("Consejo de Seguridad"); 
               $("#tituloTarjeta1").text("Wifi público");
               $("#contenidoTarjeta1").text("No introduzcas tus datos personales o bancarios utilizando un wifi público gratuito o abierto. ");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("seguridad");
          $("#contenidoTarjeta2").text("Cambia la contraseña de acceso de forma periódica.");
            //tarjeta 3, es decir, la verde
            $("#header3").text("Paso1"); 
            $("#tituloTarjeta3").text("Inicio de sesión");
            $("#contenidoTarjeta3").text("Introduce tu número de celular Ingresa tu contraseña  y da clic en entrar");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Importante "); 
            $("#tituloTarjeta4").text("La contraseña");
            $("#contenidoTarjeta4").text("Debe de ser compleja, añadiendo diferentes caracteres, números y letras minúsculas/mayúsculas");


                break;
                case 1:
         //tarjeta 1, es decir, la blanca
         $("#header1").text("¿ Qué es Token Móvil?"); 
         $("#tituloTarjeta1").text("¿ y para qué sirve?");
         $("#contenidoTarjeta1").text("Es un elemento de seguridad que genera claves irrepetibles y de uso único para autorizar tus operaciones, de manera segura y fácil, en bbva.mx y en BBVA México.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alertas"); 
          $("#tituloTarjeta2").text("Actualizaciones");
          $("#contenidoTarjeta2").text("Ten siempre actualizado el navegador y el sistema operativo");
            //tarjeta 3, es decir, la verde
            $("#header3").text("Paso 2 "); 
            $("#tituloTarjeta3").text("Activar Token Móvil");
            $("#contenidoTarjeta3").text("Lee atentamente el mensaje  Y clique en entendido");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Importante"); 
            $("#tituloTarjeta4").text("Token físico ");
            $("#contenidoTarjeta4").text("Si en lugar del token móvil decides usar un token físico, éste tiene un costo adicional; para más información, consulta nuestra sección de costos y comisiones de nuestros productos");
            break;

            case 2: 
         //tarjeta 1, es decir, la blanca
         $("#header1").text("¿Que es CoDi?"); 
         $("#tituloTarjeta1").text("Cobro Digital (CoDi)");
         $("#contenidoTarjeta1").text("CoDi es una plataforma del Banco de México para entrelazar cuentas de bancos, SPEI y smartphones, de manera que los usuarios puedan pagar solo con su dispositivo móvil, y sin necesidad de cargar con tarjetas de débito o crédito");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("Seguridad");
          $("#contenidoTarjeta2").text("Todos los datos que ingresas y recibes se transmiten encriptados y no se guardan en el celular");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 3"); 
          $("#tituloTarjeta3").text("Registro CoDi ");
          $("#contenidoTarjeta3").text("Lee atentamente el mensaje de la pantalla Y cliquea registrar");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Importante "); 
            $("#tituloTarjeta4").text("Recuerda:");
            $("#contenidoTarjeta4").text("Cerrar la sesión tras realizar las operaciones o al retirarte del ordenador, aunque sea solo un momento.");

            break;
            case 3:
         //tarjeta 1, es decir, la blanca
         $("#header1").text(""); 
         $("#tituloTarjeta1").text("Paga y cobra con mayor eficiencia sin usar efectivo");
         $("#contenidoTarjeta1").text("CoDi® es la nueva forma de pago a través de la app BBVA, con la que puedes realizar tus operaciones de pago y cobro a clientes de cualquier banco, de manera más rápida y segura sin usar efectivo y sin cobro de comisiones.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("Seguridad");
          $("#contenidoTarjeta2").text("Puedes cancelar el servicio en caso de extraviar tu celular, llamando a Línea BBVA");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 4"); 
          $("#tituloTarjeta3").text("Registro CoDi");
          $("#contenidoTarjeta3").text("Te mostrara tu nombre de usuario , los ultimos 4 digitos de tu número celurar y tu cuenta vinculada a ese número celular. Debes de leer cuidadosamente los Terminos y condiciones antes de aceptar y despues cliquea continuar");
           //tarjeta 4, es decir, la roja
           $("#header4").text("Información"); 
           $("#tituloTarjeta4").text("");
           $("#contenidoTarjeta4").text(" Los pagos son hechos vía lectura de código QR del vendedor, además de comunicación NFC para transmitir el mensaje de cobro.");


           break;

           case 4:
          //tarjeta 1, es decir, la blanca
          $("#header1").text("¿Qué es SMS?"); 
          $("#tituloTarjeta1").text("Servicio de mensajes cortos");
          $("#contenidoTarjeta1").text("Se refiere a los mensajes de texto a celular ");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("¿Qué puedes hacer con esta app?");
          $("#contenidoTarjeta2").text("Genera códigos para hacer Retiros sin tarjeta, para ti u otras personas");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 5"); 
          $("#tituloTarjeta3").text("Codigo SMS ");
          $("#contenidoTarjeta3").text("Se te enviara un codigo  via SMS para recibirlo cliquea continuar");
            //tarjeta 4, es decir, la roja
            $("#header4").text(""); 
            $("#tituloTarjeta4").text("");
            $("#contenidoTarjeta4").text("");

            break;
            case 5:
            //tarjeta 1, es decir, la blanca
            $("#header1").text("¿Cómo funciona CoDi?"); 
            $("#tituloTarjeta1").text("Cuando el comprador acepta un mensaje de cobro, se traduce en una transferencia electrónica vía SPEI en caso de que comprador y vendedor sean de distintos bancos, o bien, una transferencia local sin SPEI en caso de que ambas cuentas pertenezcan a la misma institución.");
            $("#contenidoTarjeta1").text("");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("¿Qué puedes hacer con esta app?");
          $("#contenidoTarjeta2").text("Apaga y enciende tus tarjetas de crédito cuando lo necesites");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 6"); 
          $("#tituloTarjeta3").text("");
          $("#contenidoTarjeta3").text("Espera a recibir el codigo ");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Importante "); 
            $("#tituloTarjeta4").text("Tener registrado tu número telefónico válido");
            $("#contenidoTarjeta4").text(" para recibir notificaciones relacionadas a tu cuenta");


            break;

            case 6:
           //tarjeta 1, es decir, la blanca
           $("#header1").text("¿Qué hago cuando me llegue un mensaje de cobro?"); 
           $("#tituloTarjeta1").text("El comprador tiene hasta tres opciones: aceptar, rechazar o posponer la operación. Si se acepta, la identidad del comprador debe ser autenticada por mecanismos elegidos por cada banco, que puede ser desde reingresar contraseña o solo registrar huella digital en el smartphone. ");
           $("#contenidoTarjeta1").text("");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("¿Qué puedes hacer con esta app?");
          $("#contenidoTarjeta2").text("Consulta saldos, movimientos y tu CLABE; consulta tus estados de cuenta en formato PDF");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 7"); 
          $("#tituloTarjeta3").text("");
          $("#contenidoTarjeta3").text("Ingresa el codigo en el recuadro y cliquea continuar ");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Importante"); 
            $("#tituloTarjeta4").text("");
            $("#contenidoTarjeta4").text(" Si se rechaza la transacción no se requiere autenticar identidad. Si la operación se pospone entonces el mensaje de cobro se almacena para luego ser aceptado o rechazado.");


            break;
            case 7:
            //tarjeta 1, es decir, la blanca
            $("#header1").text(""); 
            $("#tituloTarjeta1").text("¿CoDi es seguro?");
            $("#contenidoTarjeta1").text("Banco de México asegura que ha diseñado protocolos de cifrado de la información para cada uno de los mensajes vía CoDi");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("¿Qué puedes hacer con esta app?");
          $("#contenidoTarjeta2").text("Haz transferencias a cuentas de BBVA y de otros bancos a cualquier hora, todos los días del año, sin costo ni comisiones");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 8"); 
          $("#tituloTarjeta3").text("Datos adicionales");
          $("#contenidoTarjeta3").text("Esperar a que sea validado");
            //tarjeta 4, es decir, la roja
            $("#header4").text(""); 
            $("#tituloTarjeta4").text("La app BBVA está disponible las 24 horas del día, los 7 días de la semana.");
            $("#contenidoTarjeta4").text("");

            break;
            case 8:
               //tarjeta 1, es decir, la blanca
               $("#header1").text("Token Movil"); 
               $("#tituloTarjeta1").text("Garantiza");
               $("#contenidoTarjeta1").text("la seguridad de tus operaciones en  BBVA México y la Banca por Internet (bbva.mx)");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text(""); 
          $("#tituloTarjeta2").text(" ");
          $("#contenidoTarjeta2").text("Autoriza todas tus operaciones con Token Móvil ");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 9"); 
          $("#tituloTarjeta3").text("");
          $("#contenidoTarjeta3").text("Haz hecho el registro correctamente");
            //tarjeta 4, es decir, la roja
            $("#header4").text(""); 
            $("#tituloTarjeta4").text("");
            $("#contenidoTarjeta4").text("");


            break;
            case 9:
                  //tarjeta 1, es decir, la blanca
                  $("#header1").text("CoDi"); 
                  $("#tituloTarjeta1").text("El Cobro Digital");
                  $("#contenidoTarjeta1").text("llegan a transformar nuestra vida y a eliminar los riesgos relacionados con el manejo de efectivo");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Alerta"); 
          $("#tituloTarjeta2").text("Seguridad");
          $("#contenidoTarjeta2").text("La aplicación se cierra automáticamente después de 2 minutos de no realizarse alguna operación");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 10"); 
          $("#tituloTarjeta3").text("Inicio de Sesón");
          $("#contenidoTarjeta3").text("Te encuentras dentro de inicio de sesión, te muestra tu cuenta y tu saldo disponible ");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Importante"); 
            $("#tituloTarjeta4").text("Recuerda que la cobertura del servicio dependerá de tu conexión a internet.");
            $("#contenidoTarjeta4").text("");
            break;
            
           
            default:
          // statements_def
          break;
        }
      }






    });





  </script>





  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->

  
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>