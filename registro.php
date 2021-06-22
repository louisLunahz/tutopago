<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registro</title>
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
  let rutas = ["img/pasos_registro/1.png", "img/pasos_registro/2.png", "img/pasos_registro/3.png", "img/pasos_registro/4.png", "img/pasos_registro/5.png", "img/pasos_registro/6.png", "img/pasos_registro/7.png", "img/pasos_registro/8.png", "img/pasos_registro/9.png", "img/pasos_registro/10.png", "img/pasos_registro/11.png", "img/pasos_registro/12.png", "img/pasos_registro/13.png", "img/pasos_registro/14.png", "img/pasos_registro/15.png", "img/pasos_registro/16.png", "img/pasos_registro/17.png"];

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

    $("#header1").text("Recordatorio"); 
    $("#tituloTarjeta1").text("Instala la aplicación antes de comenzar");
    $("#contenidoTarjeta1").text("La aplicación se llama BBVA y se encuentra en la playstore, abrela haciendo click sobre ella y despues da click en 'no soy cliente' ");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("BBVA cuenta con dos aplicaciones");
          $("#contenidoTarjeta2").text("Asegurate de instalar la que diga (BANCOMER MOVIL)");
            //tarjeta 3, es decir, la verde
            $("#header3").text("Información Importante"); 
            $("#tituloTarjeta3").text("La otra aplicaciòn se llama BBVA WALLET");
            $("#contenidoTarjeta3").text("Su proposito es diferente aunque tambien deberías instalarla");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Cuidado"); 
            $("#tituloTarjeta4").text("Este tutorial solo funciona para telefonos con sistema operativo Android");
            $("#contenidoTarjeta4").text("Aun no contamos con un tutorial para IOS pero pronto lo tendremos");





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
               $("#header1").text("Recordatorio"); 
               $("#tituloTarjeta1").text("Instala la aplicación antes de comenzar");
               $("#contenidoTarjeta1").text("La aplicación se llama BBVA y se encuentra en la playstore, abrela haciendo click sobre ella y despues da click en 'no soy cliente' ");

              //tarjeta 2, es decir, la amarilla
              $("#header2").text("Cuidado"); 
              $("#tituloTarjeta2").text("BBVA cuenta con dos aplicaciones");
              $("#contenidoTarjeta2").text("Asegurate de instalar la que diga (BANCOMER MOVIL)");
                //tarjeta 3, es decir, la verde
                $("#header3").text("Información Importante"); 
                $("#tituloTarjeta3").text("La otra aplicaciòn se llama BBVA WALLET");
                $("#contenidoTarjeta3").text("Su proposito es diferente aunque tambien deberías instalarla");
                //tarjeta 4, es decir, la roja
                $("#header4").text("Cuidado"); 
                $("#tituloTarjeta4").text("Este tutorial solo funciona para telefonos con sistema operativo Android");
                $("#contenidoTarjeta4").text("Aún no contamos con un tutorial para IOS pero pronto lo tendremos");


                break;
                case 1:
         //tarjeta 1, es decir, la blanca
         $("#header1").text("Información adicional"); 
         $("#tituloTarjeta1").text("Permisos requeridos");
         $("#contenidoTarjeta1").text("Todo tipo de aplicación requiere de ciertos permisos para poder realizar ciertas funciones dentro de ella, las más comunes son acceso a el contenido multimedia (fotos, imágenes, videos) así como poder guardar documentos, imágenes, etc.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Rechazo de permisos"); 
          $("#tituloTarjeta2").text("ya rechacé los permisos");
          $("#contenidoTarjeta2").text("En caso de rechazar los permisos deberas aceptarlos despues al hacer alguna operación");
            //tarjeta 3, es decir, la verde
            $("#header3").text("Paso 2 "); 
            $("#tituloTarjeta3").text("Permisos para utilizar los servicios de telecomunicaciones");
            $("#contenidoTarjeta3").text("Al finalizar el paso 1 de inmediato la aplicación pedirán permisos para utilizar el servicio de telecomunicaciones que usted utilice, esto con el fin de que la aplicación requiere de verificar la identidad algunos movimientos así como para el inicio de sesión por motivos de seguridad.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Prevenciones"); 
            $("#tituloTarjeta4").text("Que pasa si niego el permiso?");
            $("#contenidoTarjeta4").text("El negar este permiso a la aplicación puede repercutir en el funcionamiento de la misma, algunas opciones de la aplicación no estarán disponibles y es necesario tener control total de estas.");
            break;

            case 2: 
         //tarjeta 1, es decir, la blanca
         $("#header1").text("Recordatorio"); 
         $("#tituloTarjeta1").text("No desconfíe, no es un fraude");
         $("#contenidoTarjeta1").text("Es importante dar estos permisos a la aplicación, son importantes para que la aplicación funcione correctamente");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Advertencias."); 
          $("#tituloTarjeta2").text("¿Que hice?");
          $("#contenidoTarjeta2").text("Es importante no dar el botón atrás o presionar algún otro lugar de la pantalla del teléfono, esto puede hacer que desaparezca la opción de permitir.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 3"); 
          $("#tituloTarjeta3").text("Aceptar permisos sobre el acceso a los archivos multimedia (fotos, audio, videos) ");
          $("#contenidoTarjeta3").text("Vamos a pulsar la palabra de color azul permitir, esto le da acceso a la aplicación a fotos y documentos, así como la autorización para que esta pueda guardar datos en su teléfono, con la finalidad de brindarle un servicio más eficiente y que la aplicación tenga un buen funcionamiento.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Prevenciones"); 
            $("#tituloTarjeta4").text("¿Que pasa si niego el permiso?");
            $("#contenidoTarjeta4").text("El negar este permiso a la aplicación puede repercutir en el funcionamiento de la misma, algunas opciones de la aplicación no estarán disponibles y es necesario tener control total de estas.");

            break;
            case 3:
         //tarjeta 1, es decir, la blanca
         $("#header1").text("Recordatorio"); 
         $("#tituloTarjeta1").text("Requisitos");
         $("#contenidoTarjeta1").text("Es importante leer cuidadosamente todo lo aparecido en pantalla, antes de seguir con el trámite es importante tener a la mano los documentos requeridos por la aplicación");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Sobre los tipos de cuenta");
          $("#contenidoTarjeta2").text("Informate bien sobre los tipos de cuenta que puedes contratar y cual se adecua mejor a ti");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 4"); 
          $("#tituloTarjeta3").text("Características sobre el tipo de cuenta que se va a solicitar");
          $("#contenidoTarjeta3").text("Poco a poco usted tendrá que deslizar la pantalla de su equipo celular, se mostrarán las características sobre las cuenta a solicitar así como los documentos que más adelante se nos solicitaran. Una vez haya bajado hasta el final se mostrará un botón en color azul con el texto “Abrir cuenta” al cual deberemos de presionar.");
           //tarjeta 4, es decir, la roja
           $("#header4").text("Advertencia"); 
           $("#tituloTarjeta4").text("Tarjeta Digital");
           $("#contenidoTarjeta4").text("Recuerda que esta es una tarjeta digital, si planeas reañlizar compras en tiendas fisicas tal vez prefieras usar un tarjeta fisica.");


           break;

           case 4:
          //tarjeta 1, es decir, la blanca
          $("#header1").text("Información adicional"); 
          $("#tituloTarjeta1").text("Términos y condiciones");
          $("#contenidoTarjeta1").text("Antes de iniciar a llenar datos personales usted puede conocer los términos y condiciones del servicio a contratar asi como el aviso de privacidad presionando los textos resaltados en color blanco que se encuentran arriba del botón “Empezar ahora” del final de la pestaña");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Advertencias."); 
          $("#tituloTarjeta2").text("¿Que hice?");
          $("#contenidoTarjeta2").text("Es importante no dar el botón atrás o presionar algún otro lugar de la pantalla del teléfono, esto puede hacer que desaparezca la opción de permitir.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 5"); 
          $("#tituloTarjeta3").text("Beneficios de la cuenta y requisitos previos");
          $("#contenidoTarjeta3").text("Nuevamente se mostraran beneficios de la cuenta a contratar así como beneficios adicionales que se estarán brindando a usted como cliente nuevo. En esta pestaña de deberá ir deslizando la pantalla recordando leer todo lo aparecido en esta determinadamente, al finalizar esta pestaña encontrará un botón de color azul con la leyenda “Empezar ahora” la cual se tendrá que presionar. ");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencias"); 
            $("#tituloTarjeta4").text("¿Qué no hacer?");
            $("#contenidoTarjeta4").text("Es importante no presionar el botón atrás debido a que se puede perder todo el avance hecho hasta ahora");

            break;
            case 5:
            //tarjeta 1, es decir, la blanca
            $("#header1").text("Informacion adicional"); 
            $("#tituloTarjeta1").text("sobre los campos");
            $("#contenidoTarjeta1").text("No te preocupes por poner mayusculas en las iniciales de tu nombre ni de los acentos");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Requisito de edad");
          $("#contenidoTarjeta2").text("Para poder crear una cuenta debes de ser mayor de 18 años y contar con un doumento que lo avale(IFE/INE)");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 6"); 
          $("#tituloTarjeta3").text("Datos Personales");
          $("#contenidoTarjeta3").text("1.  Comienza por tu nombre en el primer recuadro, En el segundo recuadro tu apellido paterno y en el tercer recuadro apellido materno. En el cuadro recuadro te saldrá un calendario donde debes elegir el año de nacimiento seguido del mes y día");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Peligro"); 
            $("#tituloTarjeta4").text("protocolos de seguridad");
            $("#contenidoTarjeta4").text("Asegurate de haber descargdo la aplicación de un sitio oficial como la play Store.");


            break;

            case 6:
           //tarjeta 1, es decir, la blanca
           $("#header1").text("Número de INE"); 
           $("#tituloTarjeta1").text("Ubicación");
           $("#contenidoTarjeta1").text("Recuerda que el numero de INE se encuentra en la parte de atras, consta de 13 numeros y va despues de los dos signos '>>'");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("IFE/INE");
          $("#contenidoTarjeta2").text("Si haz perdido tu identificación, obten otra para poder regstrarte, no uses los datos de la que perdiste");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 7"); 
          $("#tituloTarjeta3").text("Datos adicionales");
          $("#contenidoTarjeta3").text("En esta parte deberás colocar tu sexo, nacionalidad, lugar de nacimiento, numero de INE y año de registro, asegurate de que sean correctos");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("INE/IFE");
            $("#contenidoTarjeta4").text("No coloques datos deuna identificación falsa o perdida, la institución bancaria verificará tus datos.");


            break;
            case 7:
            //tarjeta 1, es decir, la blanca
            $("#header1").text("Digitos adicionales y clave de elector"); 
            $("#tituloTarjeta1").text("Ubicación");
            $("#contenidoTarjeta1").text("los digitos adicionales son dos y los encuentras en la parte de enfrente de tu credencial justo despues de el año de registro mientras que la clave de elector consta de 17 digitos y esta al frente de la misma");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text(""); 
          $("#tituloTarjeta2").text("");
          $("#contenidoTarjeta2").text("");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 8"); 
          $("#tituloTarjeta3").text("Datos adicionales");
          $("#contenidoTarjeta3").text("En esta parte deberás colocar los digitos adicionales de tu IFE/INE y la clave de elector de la misma. Al terminar solo deber dar al boton de aceptar para continuar el registro");
            //tarjeta 4, es decir, la roja
            $("#header4").text(""); 
            $("#tituloTarjeta4").text("");
            $("#contenidoTarjeta4").text("");

            break;
            case 8:
               //tarjeta 1, es decir, la blanca
               $("#header1").text("Codigo Postal"); 
               $("#tituloTarjeta1").text("Ubicacion");
               $("#contenidoTarjeta1").text("Si tu INE/IFE incluye tu domicilio, entonces deberias encontrar el codigo postal también.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("cambio de domicilio");
          $("#contenidoTarjeta2").text("si cambiaste de domicilio, coloca el nuevo y ve pronto a renovar tu IFE/INE antes de continuar con el proceso");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 9"); 
          $("#tituloTarjeta3").text("Datos Domiciliarios");
          $("#contenidoTarjeta3").text("En esta parte deberás colocar tu codigo postal, recuerda que es un numero de 5 digitos y despues darle al boton de buscar para que  la aplicacione te deje agregar tu dirección");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Cambio de domicilio");
            $("#contenidoTarjeta4").text("Si cambiaste de domicilio no coloques la direccion anterior, podría traerte problemas a futuro con la institución bancaria");


            break;
            case 9:
                  //tarjeta 1, es decir, la blanca
                  $("#header1").text("Colonia"); 
                  $("#tituloTarjeta1").text("Seleccionar");
                  $("#contenidoTarjeta1").text("Como puedes ver, la colonia no la puedes escribir sino solo seleccionarla. Si vives en otro tipo de asentamiento no te preocupes, también aparecerá como colonia");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Asegurate de escribir bien tu calle y numero");
          $("#contenidoTarjeta2").text("segurate de colocar tu direccion correcta, el banco se encargará de verificar la información proporcionada.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 10"); 
          $("#tituloTarjeta3").text("Datos domiciliarios");
          $("#contenidoTarjeta3").text("La aplicacion detectará tu estado y municipio, asegurate de que sean correctos y de ser así, ingresa tus otros datos domiciliarios como colonia, calle numero exterior y, si tienes numero interior ingresalo también");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Datos falsos"); 
            $("#tituloTarjeta4").text("no introduzcas información falsa");
            $("#contenidoTarjeta4").text("no introduzcas una direccion de alguien más, podrpias meter en problemas a alguien o a ti mismo");
            break;
            case 10:
                   //tarjeta 1, es decir, la blanca
                   $("#header1").text("Información Adicional"); 
                   $("#tituloTarjeta1").text("Aceptar ofertas y promociones");
                   $("#contenidoTarjeta1").text("BBVA cuenta con muchas promociones, al activar la casilla, aceptas que te manden correos o mensajes. Si no te gusta recibir mucha publicidad, puedes dejar el espacio en blanco");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("No introduzcas informacion de alguien más");
          $("#contenidoTarjeta2").text("No coloques un numero de celular o correo que no son tuyos, esto puede provocar que seas victima de robo de identidad");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 11"); 
          $("#tituloTarjeta3").text("Datos de contacto");
          $("#contenidoTarjeta3").text("La aplicación necesitará contactarte a veces para notificarte de las operaciones que se llevan a cabo en tu cuenta, por lo tanto necesitará tu correo y tu número de celular. Asegurate de tener acceso al correo que ingreses y de que tu número de celular esté activo");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Robo de identidad");
            $("#contenidoTarjeta4").text("Una de las tecnicas mas usadas para robar tu identidad es usar la recuperacion de cuenta. El banco te mandará un correo para recuperar tu cuenta y si alguien más tiene accesoa  tu cuenta, podrias ser victima.");

            break;
            case 11:
                      //tarjeta 1, es decir, la blanca
                      $("#header1").text("Información Adicional"); 
                      $("#tituloTarjeta1").text("Terminos y condiciones");
                      $("#contenidoTarjeta1").text("Son un conjunto de reglas y condiciones que establece el banco para el uso correcto de sus servicios");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Terminos y condiciones");
          $("#contenidoTarjeta2").text("Los terminos y condiciones pueden cambiar, cuando eso pase, el banco te informará con anticipación");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 12"); 
          $("#tituloTarjeta3").text("Terminos y condiciones");
          $("#contenidoTarjeta3").text("Asegurate de leer los terminos y condiciones tanto del tipo de cuenta que seleccionaste como de los servicios digitales y activa las casillas para confirmar que estás de acuerdo. Al finalizar da click en el recuadro para firmar, al hacerlo, la pantalla se girará para estar en horizontal y que puedas firmar mas comodamente.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Terminos y condiciones");
            $("#contenidoTarjeta4").text("Si no aceptas los terminos y condiciones, no podrás usar tu cuenta.");


            break;
            case 12:
              //tarjeta 1, es decir, la blanca
              $("#header1").text("Información Adicional"); 
              $("#tituloTarjeta1").text("Sobre la firma");
              $("#contenidoTarjeta1").text("No te preocupes si tu firma no luce exactamente igual que la que sueles hacer en papel, es normal.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Sobre la firma");
          $("#contenidoTarjeta2").text("la firma debe ser la misma que usas en tus documentos oficiales");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 13"); 
          $("#tituloTarjeta3").text("Firma");
          $("#contenidoTarjeta3").text("Dibuja tu firma en el recuadro, puedes hacerlo con el dedo o con un lapiz digital. Ademas, puedes borrar la firma si te equivocas y hacerla de nuevo. Al terminar dale al botón de aceptar y despues al boton de continuar");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Falsificación");
            $("#contenidoTarjeta4").text("No falsifique la firma de alguien más, es un delito");

            break;
            case 13:
        //tarjeta 1, es decir, la blanca
        $("#header1").text("Información Adicional"); 
        $("#tituloTarjeta1").text("Contraseña");
        $("#contenidoTarjeta1").text("la razon por la que el banco te pide un minimo de 10 caracteres y que uses letras mayusculas y numeros, es para que tu contraseña sea más segura");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Sobre la contraseña");
          $("#contenidoTarjeta2").text("No le des tu contraseña a nadie que no sea de tu absoluta confianza, ademas, si crees que puedes olvidarla, usa un gestor de contraseñas.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 14"); 
          $("#tituloTarjeta3").text("contraseña");
          $("#contenidoTarjeta3").text("En esta parte deberás agregar tu contraseña, esta debe ser de entre 8 a 10 caracteres, ademas debe llevar como minimo una letra mayuscula y un número. Coloquela en los dos recuadros y asegurese de que sea la misma");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("No uses la misma contraseña que usas en otras cuentas");
            $("#contenidoTarjeta4").text("Usar la misma contraseña en diversas cuentas te hace más propenso a sufrir robo de identidad");


            break;
            case 14:
             //tarjeta 1, es decir, la blanca
             $("#header1").text("Información Adicional"); 
             $("#tituloTarjeta1").text("Cuenta");
             $("#contenidoTarjeta1").text("Una vez que des al botón de aceptar, tu cuenta será creada así que asegurate de que todo sea correcto");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text(""); 
          $("#tituloTarjeta2").text("");
          $("#contenidoTarjeta2").text("");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 15"); 
          $("#tituloTarjeta3").text("Revision de datos");
          $("#contenidoTarjeta3").text("En esta parte, la aplicaciones te muestra una pantalla con los datos que has ingresado para que puedas verificarlos, si tus datos son correctos, dale al botón de aceptar, si no es así, puedes regresar y corregirlos");
            //tarjeta 4, es decir, la roja
            $("#header4").text(""); 
            $("#tituloTarjeta4").text("");
            $("#contenidoTarjeta4").text("");


            break;
            case 15:
             //tarjeta 1, es decir, la blanca
             $("#header1").text("Información Adicional"); 
             $("#tituloTarjeta1").text("SMS");
             $("#contenidoTarjeta1").text("Si no te llega el sms, puedes volver a enviarlo. Si haz concedido todos los permisos a la aplicacion esta podria detectar automaticamente el mensaje y avanzar al siguiente paso");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Envio de sms");
          $("#contenidoTarjeta2").text("Dale al botón de aceptar solo cuando ya estás seguro de que puedes recibir mensajes en tu telefono");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 16"); 
          $("#tituloTarjeta3").text("Confirmación de número celular");
          $("#contenidoTarjeta3").text("En esta parte, la aplicación te avisa que necesita enviarte un sms para confirmar tu número de telefono. Pulsa el botón de entendido y te llegará un sms a tu celular.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Suplantación de identidad");
            $("#contenidoTarjeta4").text("La tarjeta SIM del numero que coloques estará ligada a tu cuenta. No la pierdas o prestes, como ya te comentamos, podrías ser victima de suplantación de identidad");

            break;
            case 16:
                 //tarjeta 1, es decir, la blanca
             $("#header1").text("Información Adicional"); 
             $("#tituloTarjeta1").text("Cuenta");
             $("#contenidoTarjeta1").text("Aquí te aparecerá una pequeña reseña que te indica que tipo de cuenta haz contratado además de información adicional como el límite de depositos mensuales");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Seguridad");
          $("#contenidoTarjeta2").text("Ahora que tienes una cuenta digital, deberías asegurarte de que tu celular tenga activo un metodo de acceso como un patrón o una contraseña");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 17"); 
          $("#tituloTarjeta3").text("Contratación exitosa");
          $("#contenidoTarjeta3").text("Si todo ha ido bien, ahora te deberia aparecer una pantalla de confirmación. Dale al botón de entendido y podrás ver tu pantalla de inicio en la aplicación");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Sesión");
            $("#contenidoTarjeta4").text("Si pasas más de 15 minutos inactivo en la aplicación, tu sesión se cerrará y deberás volver a entrar");


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