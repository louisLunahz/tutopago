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

    //estos son losvalores que tendr?? por defecto la pagina, es decir los de la captura 1 

    $("#zoom_01").attr("src", rutas[i]);
    $("#zoom_01").attr("data-zoom-image", rutas[i]);

    $("#header1").text("Recordatorio"); 
    $("#tituloTarjeta1").text("Instala la aplicaci??n antes de comenzar");
    $("#contenidoTarjeta1").text("La aplicaci??n se llama BBVA y se encuentra en la playstore, abrela haciendo click sobre ella y despues da click en 'no soy cliente' ");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("BBVA cuenta con dos aplicaciones");
          $("#contenidoTarjeta2").text("Asegurate de instalar la que diga (BANCOMER MOVIL)");
            //tarjeta 3, es decir, la verde
            $("#header3").text("Informaci??n Importante"); 
            $("#tituloTarjeta3").text("La otra aplicaci??n se llama BBVA WALLET");
            $("#contenidoTarjeta3").text("Su proposito es diferente aunque tambien deber??as instalarla");
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
               $("#tituloTarjeta1").text("Instala la aplicaci??n antes de comenzar");
               $("#contenidoTarjeta1").text("La aplicaci??n se llama BBVA y se encuentra en la playstore, abrela haciendo click sobre ella y despues da click en 'no soy cliente' ");

              //tarjeta 2, es decir, la amarilla
              $("#header2").text("Cuidado"); 
              $("#tituloTarjeta2").text("BBVA cuenta con dos aplicaciones");
              $("#contenidoTarjeta2").text("Asegurate de instalar la que diga (BANCOMER MOVIL)");
                //tarjeta 3, es decir, la verde
                $("#header3").text("Informaci??n Importante"); 
                $("#tituloTarjeta3").text("La otra aplicaci??n se llama BBVA WALLET");
                $("#contenidoTarjeta3").text("Su proposito es diferente aunque tambien deber??as instalarla");
                //tarjeta 4, es decir, la roja
                $("#header4").text("Cuidado"); 
                $("#tituloTarjeta4").text("Este tutorial solo funciona para telefonos con sistema operativo Android");
                $("#contenidoTarjeta4").text("A??n no contamos con un tutorial para IOS pero pronto lo tendremos");


                break;
                case 1:
         //tarjeta 1, es decir, la blanca
         $("#header1").text("Informaci??n adicional"); 
         $("#tituloTarjeta1").text("Permisos requeridos");
         $("#contenidoTarjeta1").text("Todo tipo de aplicaci??n requiere de ciertos permisos para poder realizar ciertas funciones dentro de ella, las m??s comunes son acceso a el contenido multimedia (fotos, im??genes, videos) as?? como poder guardar documentos, im??genes, etc.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Rechazo de permisos"); 
          $("#tituloTarjeta2").text("ya rechac?? los permisos");
          $("#contenidoTarjeta2").text("En caso de rechazar los permisos deberas aceptarlos despues al hacer alguna operaci??n");
            //tarjeta 3, es decir, la verde
            $("#header3").text("Paso 2 "); 
            $("#tituloTarjeta3").text("Permisos para utilizar los servicios de telecomunicaciones");
            $("#contenidoTarjeta3").text("Al finalizar el paso 1 de inmediato la aplicaci??n pedir??n permisos para utilizar el servicio de telecomunicaciones que usted utilice, esto con el fin de que la aplicaci??n requiere de verificar la identidad algunos movimientos as?? como para el inicio de sesi??n por motivos de seguridad.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Prevenciones"); 
            $("#tituloTarjeta4").text("Que pasa si niego el permiso?");
            $("#contenidoTarjeta4").text("El negar este permiso a la aplicaci??n puede repercutir en el funcionamiento de la misma, algunas opciones de la aplicaci??n no estar??n disponibles y es necesario tener control total de estas.");
            break;

            case 2: 
         //tarjeta 1, es decir, la blanca
         $("#header1").text("Recordatorio"); 
         $("#tituloTarjeta1").text("No desconf??e, no es un fraude");
         $("#contenidoTarjeta1").text("Es importante dar estos permisos a la aplicaci??n, son importantes para que la aplicaci??n funcione correctamente");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Advertencias."); 
          $("#tituloTarjeta2").text("??Que hice?");
          $("#contenidoTarjeta2").text("Es importante no dar el bot??n atr??s o presionar alg??n otro lugar de la pantalla del tel??fono, esto puede hacer que desaparezca la opci??n de permitir.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 3"); 
          $("#tituloTarjeta3").text("Aceptar permisos sobre el acceso a los archivos multimedia (fotos, audio, videos) ");
          $("#contenidoTarjeta3").text("Vamos a pulsar la palabra de color azul permitir, esto le da acceso a la aplicaci??n a fotos y documentos, as?? como la autorizaci??n para que esta pueda guardar datos en su tel??fono, con la finalidad de brindarle un servicio m??s eficiente y que la aplicaci??n tenga un buen funcionamiento.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Prevenciones"); 
            $("#tituloTarjeta4").text("??Que pasa si niego el permiso?");
            $("#contenidoTarjeta4").text("El negar este permiso a la aplicaci??n puede repercutir en el funcionamiento de la misma, algunas opciones de la aplicaci??n no estar??n disponibles y es necesario tener control total de estas.");

            break;
            case 3:
         //tarjeta 1, es decir, la blanca
         $("#header1").text("Recordatorio"); 
         $("#tituloTarjeta1").text("Requisitos");
         $("#contenidoTarjeta1").text("Es importante leer cuidadosamente todo lo aparecido en pantalla, antes de seguir con el tr??mite es importante tener a la mano los documentos requeridos por la aplicaci??n");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Sobre los tipos de cuenta");
          $("#contenidoTarjeta2").text("Informate bien sobre los tipos de cuenta que puedes contratar y cual se adecua mejor a ti");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 4"); 
          $("#tituloTarjeta3").text("Caracter??sticas sobre el tipo de cuenta que se va a solicitar");
          $("#contenidoTarjeta3").text("Poco a poco usted tendr?? que deslizar la pantalla de su equipo celular, se mostrar??n las caracter??sticas sobre las cuenta a solicitar as?? como los documentos que m??s adelante se nos solicitaran. Una vez haya bajado hasta el final se mostrar?? un bot??n en color azul con el texto ???Abrir cuenta??? al cual deberemos de presionar.");
           //tarjeta 4, es decir, la roja
           $("#header4").text("Advertencia"); 
           $("#tituloTarjeta4").text("Tarjeta Digital");
           $("#contenidoTarjeta4").text("Recuerda que esta es una tarjeta digital, si planeas rea??lizar compras en tiendas fisicas tal vez prefieras usar un tarjeta fisica.");


           break;

           case 4:
          //tarjeta 1, es decir, la blanca
          $("#header1").text("Informaci??n adicional"); 
          $("#tituloTarjeta1").text("T??rminos y condiciones");
          $("#contenidoTarjeta1").text("Antes de iniciar a llenar datos personales usted puede conocer los t??rminos y condiciones del servicio a contratar asi como el aviso de privacidad presionando los textos resaltados en color blanco que se encuentran arriba del bot??n ???Empezar ahora??? del final de la pesta??a");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Advertencias."); 
          $("#tituloTarjeta2").text("??Que hice?");
          $("#contenidoTarjeta2").text("Es importante no dar el bot??n atr??s o presionar alg??n otro lugar de la pantalla del tel??fono, esto puede hacer que desaparezca la opci??n de permitir.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 5"); 
          $("#tituloTarjeta3").text("Beneficios de la cuenta y requisitos previos");
          $("#contenidoTarjeta3").text("Nuevamente se mostraran beneficios de la cuenta a contratar as?? como beneficios adicionales que se estar??n brindando a usted como cliente nuevo. En esta pesta??a de deber?? ir deslizando la pantalla recordando leer todo lo aparecido en esta determinadamente, al finalizar esta pesta??a encontrar?? un bot??n de color azul con la leyenda ???Empezar ahora??? la cual se tendr?? que presionar. ");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencias"); 
            $("#tituloTarjeta4").text("??Qu?? no hacer?");
            $("#contenidoTarjeta4").text("Es importante no presionar el bot??n atr??s debido a que se puede perder todo el avance hecho hasta ahora");

            break;
            case 5:
            //tarjeta 1, es decir, la blanca
            $("#header1").text("Informacion adicional"); 
            $("#tituloTarjeta1").text("sobre los campos");
            $("#contenidoTarjeta1").text("No te preocupes por poner mayusculas en las iniciales de tu nombre ni de los acentos");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Requisito de edad");
          $("#contenidoTarjeta2").text("Para poder crear una cuenta debes de ser mayor de 18 a??os y contar con un doumento que lo avale(IFE/INE)");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 6"); 
          $("#tituloTarjeta3").text("Datos Personales");
          $("#contenidoTarjeta3").text("1.  Comienza por tu nombre en el primer recuadro, En el segundo recuadro tu apellido paterno y en el tercer recuadro apellido materno. En el cuadro recuadro te saldr?? un calendario donde debes elegir el a??o de nacimiento seguido del mes y d??a");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Peligro"); 
            $("#tituloTarjeta4").text("protocolos de seguridad");
            $("#contenidoTarjeta4").text("Asegurate de haber descargdo la aplicaci??n de un sitio oficial como la play Store.");


            break;

            case 6:
           //tarjeta 1, es decir, la blanca
           $("#header1").text("N??mero de INE"); 
           $("#tituloTarjeta1").text("Ubicaci??n");
           $("#contenidoTarjeta1").text("Recuerda que el numero de INE se encuentra en la parte de atras, consta de 13 numeros y va despues de los dos signos '>>'");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("IFE/INE");
          $("#contenidoTarjeta2").text("Si haz perdido tu identificaci??n, obten otra para poder regstrarte, no uses los datos de la que perdiste");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 7"); 
          $("#tituloTarjeta3").text("Datos adicionales");
          $("#contenidoTarjeta3").text("En esta parte deber??s colocar tu sexo, nacionalidad, lugar de nacimiento, numero de INE y a??o de registro, asegurate de que sean correctos");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("INE/IFE");
            $("#contenidoTarjeta4").text("No coloques datos deuna identificaci??n falsa o perdida, la instituci??n bancaria verificar?? tus datos.");


            break;
            case 7:
            //tarjeta 1, es decir, la blanca
            $("#header1").text("Digitos adicionales y clave de elector"); 
            $("#tituloTarjeta1").text("Ubicaci??n");
            $("#contenidoTarjeta1").text("los digitos adicionales son dos y los encuentras en la parte de enfrente de tu credencial justo despues de el a??o de registro mientras que la clave de elector consta de 17 digitos y esta al frente de la misma");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text(""); 
          $("#tituloTarjeta2").text("");
          $("#contenidoTarjeta2").text("");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 8"); 
          $("#tituloTarjeta3").text("Datos adicionales");
          $("#contenidoTarjeta3").text("En esta parte deber??s colocar los digitos adicionales de tu IFE/INE y la clave de elector de la misma. Al terminar solo deber dar al boton de aceptar para continuar el registro");
            //tarjeta 4, es decir, la roja
            $("#header4").text(""); 
            $("#tituloTarjeta4").text("");
            $("#contenidoTarjeta4").text("");

            break;
            case 8:
               //tarjeta 1, es decir, la blanca
               $("#header1").text("Codigo Postal"); 
               $("#tituloTarjeta1").text("Ubicacion");
               $("#contenidoTarjeta1").text("Si tu INE/IFE incluye tu domicilio, entonces deberias encontrar el codigo postal tambi??n.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("cambio de domicilio");
          $("#contenidoTarjeta2").text("si cambiaste de domicilio, coloca el nuevo y ve pronto a renovar tu IFE/INE antes de continuar con el proceso");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 9"); 
          $("#tituloTarjeta3").text("Datos Domiciliarios");
          $("#contenidoTarjeta3").text("En esta parte deber??s colocar tu codigo postal, recuerda que es un numero de 5 digitos y despues darle al boton de buscar para que  la aplicacione te deje agregar tu direcci??n");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Cambio de domicilio");
            $("#contenidoTarjeta4").text("Si cambiaste de domicilio no coloques la direccion anterior, podr??a traerte problemas a futuro con la instituci??n bancaria");


            break;
            case 9:
                  //tarjeta 1, es decir, la blanca
                  $("#header1").text("Colonia"); 
                  $("#tituloTarjeta1").text("Seleccionar");
                  $("#contenidoTarjeta1").text("Como puedes ver, la colonia no la puedes escribir sino solo seleccionarla. Si vives en otro tipo de asentamiento no te preocupes, tambi??n aparecer?? como colonia");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Asegurate de escribir bien tu calle y numero");
          $("#contenidoTarjeta2").text("segurate de colocar tu direccion correcta, el banco se encargar?? de verificar la informaci??n proporcionada.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 10"); 
          $("#tituloTarjeta3").text("Datos domiciliarios");
          $("#contenidoTarjeta3").text("La aplicacion detectar?? tu estado y municipio, asegurate de que sean correctos y de ser as??, ingresa tus otros datos domiciliarios como colonia, calle numero exterior y, si tienes numero interior ingresalo tambi??n");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Datos falsos"); 
            $("#tituloTarjeta4").text("no introduzcas informaci??n falsa");
            $("#contenidoTarjeta4").text("no introduzcas una direccion de alguien m??s, podrpias meter en problemas a alguien o a ti mismo");
            break;
            case 10:
                   //tarjeta 1, es decir, la blanca
                   $("#header1").text("Informaci??n Adicional"); 
                   $("#tituloTarjeta1").text("Aceptar ofertas y promociones");
                   $("#contenidoTarjeta1").text("BBVA cuenta con muchas promociones, al activar la casilla, aceptas que te manden correos o mensajes. Si no te gusta recibir mucha publicidad, puedes dejar el espacio en blanco");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("No introduzcas informacion de alguien m??s");
          $("#contenidoTarjeta2").text("No coloques un numero de celular o correo que no son tuyos, esto puede provocar que seas victima de robo de identidad");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 11"); 
          $("#tituloTarjeta3").text("Datos de contacto");
          $("#contenidoTarjeta3").text("La aplicaci??n necesitar?? contactarte a veces para notificarte de las operaciones que se llevan a cabo en tu cuenta, por lo tanto necesitar?? tu correo y tu n??mero de celular. Asegurate de tener acceso al correo que ingreses y de que tu n??mero de celular est?? activo");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Robo de identidad");
            $("#contenidoTarjeta4").text("Una de las tecnicas mas usadas para robar tu identidad es usar la recuperacion de cuenta. El banco te mandar?? un correo para recuperar tu cuenta y si alguien m??s tiene accesoa  tu cuenta, podrias ser victima.");

            break;
            case 11:
                      //tarjeta 1, es decir, la blanca
                      $("#header1").text("Informaci??n Adicional"); 
                      $("#tituloTarjeta1").text("Terminos y condiciones");
                      $("#contenidoTarjeta1").text("Son un conjunto de reglas y condiciones que establece el banco para el uso correcto de sus servicios");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Terminos y condiciones");
          $("#contenidoTarjeta2").text("Los terminos y condiciones pueden cambiar, cuando eso pase, el banco te informar?? con anticipaci??n");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 12"); 
          $("#tituloTarjeta3").text("Terminos y condiciones");
          $("#contenidoTarjeta3").text("Asegurate de leer los terminos y condiciones tanto del tipo de cuenta que seleccionaste como de los servicios digitales y activa las casillas para confirmar que est??s de acuerdo. Al finalizar da click en el recuadro para firmar, al hacerlo, la pantalla se girar?? para estar en horizontal y que puedas firmar mas comodamente.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Terminos y condiciones");
            $("#contenidoTarjeta4").text("Si no aceptas los terminos y condiciones, no podr??s usar tu cuenta.");


            break;
            case 12:
              //tarjeta 1, es decir, la blanca
              $("#header1").text("Informaci??n Adicional"); 
              $("#tituloTarjeta1").text("Sobre la firma");
              $("#contenidoTarjeta1").text("No te preocupes si tu firma no luce exactamente igual que la que sueles hacer en papel, es normal.");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Sobre la firma");
          $("#contenidoTarjeta2").text("la firma debe ser la misma que usas en tus documentos oficiales");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 13"); 
          $("#tituloTarjeta3").text("Firma");
          $("#contenidoTarjeta3").text("Dibuja tu firma en el recuadro, puedes hacerlo con el dedo o con un lapiz digital. Ademas, puedes borrar la firma si te equivocas y hacerla de nuevo. Al terminar dale al bot??n de aceptar y despues al boton de continuar");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Falsificaci??n");
            $("#contenidoTarjeta4").text("No falsifique la firma de alguien m??s, es un delito");

            break;
            case 13:
        //tarjeta 1, es decir, la blanca
        $("#header1").text("Informaci??n Adicional"); 
        $("#tituloTarjeta1").text("Contrase??a");
        $("#contenidoTarjeta1").text("la razon por la que el banco te pide un minimo de 10 caracteres y que uses letras mayusculas y numeros, es para que tu contrase??a sea m??s segura");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Sobre la contrase??a");
          $("#contenidoTarjeta2").text("No le des tu contrase??a a nadie que no sea de tu absoluta confianza, ademas, si crees que puedes olvidarla, usa un gestor de contrase??as.");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 14"); 
          $("#tituloTarjeta3").text("contrase??a");
          $("#contenidoTarjeta3").text("En esta parte deber??s agregar tu contrase??a, esta debe ser de entre 8 a 10 caracteres, ademas debe llevar como minimo una letra mayuscula y un n??mero. Coloquela en los dos recuadros y asegurese de que sea la misma");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("No uses la misma contrase??a que usas en otras cuentas");
            $("#contenidoTarjeta4").text("Usar la misma contrase??a en diversas cuentas te hace m??s propenso a sufrir robo de identidad");


            break;
            case 14:
             //tarjeta 1, es decir, la blanca
             $("#header1").text("Informaci??n Adicional"); 
             $("#tituloTarjeta1").text("Cuenta");
             $("#contenidoTarjeta1").text("Una vez que des al bot??n de aceptar, tu cuenta ser?? creada as?? que asegurate de que todo sea correcto");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text(""); 
          $("#tituloTarjeta2").text("");
          $("#contenidoTarjeta2").text("");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 15"); 
          $("#tituloTarjeta3").text("Revision de datos");
          $("#contenidoTarjeta3").text("En esta parte, la aplicaciones te muestra una pantalla con los datos que has ingresado para que puedas verificarlos, si tus datos son correctos, dale al bot??n de aceptar, si no es as??, puedes regresar y corregirlos");
            //tarjeta 4, es decir, la roja
            $("#header4").text(""); 
            $("#tituloTarjeta4").text("");
            $("#contenidoTarjeta4").text("");


            break;
            case 15:
             //tarjeta 1, es decir, la blanca
             $("#header1").text("Informaci??n Adicional"); 
             $("#tituloTarjeta1").text("SMS");
             $("#contenidoTarjeta1").text("Si no te llega el sms, puedes volver a enviarlo. Si haz concedido todos los permisos a la aplicacion esta podria detectar automaticamente el mensaje y avanzar al siguiente paso");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Envio de sms");
          $("#contenidoTarjeta2").text("Dale al bot??n de aceptar solo cuando ya est??s seguro de que puedes recibir mensajes en tu telefono");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 16"); 
          $("#tituloTarjeta3").text("Confirmaci??n de n??mero celular");
          $("#contenidoTarjeta3").text("En esta parte, la aplicaci??n te avisa que necesita enviarte un sms para confirmar tu n??mero de telefono. Pulsa el bot??n de entendido y te llegar?? un sms a tu celular.");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Suplantaci??n de identidad");
            $("#contenidoTarjeta4").text("La tarjeta SIM del numero que coloques estar?? ligada a tu cuenta. No la pierdas o prestes, como ya te comentamos, podr??as ser victima de suplantaci??n de identidad");

            break;
            case 16:
                 //tarjeta 1, es decir, la blanca
             $("#header1").text("Informaci??n Adicional"); 
             $("#tituloTarjeta1").text("Cuenta");
             $("#contenidoTarjeta1").text("Aqu?? te aparecer?? una peque??a rese??a que te indica que tipo de cuenta haz contratado adem??s de informaci??n adicional como el l??mite de depositos mensuales");

          //tarjeta 2, es decir, la amarilla
          $("#header2").text("Cuidado"); 
          $("#tituloTarjeta2").text("Seguridad");
          $("#contenidoTarjeta2").text("Ahora que tienes una cuenta digital, deber??as asegurarte de que tu celular tenga activo un metodo de acceso como un patr??n o una contrase??a");
          //tarjeta 3, es decir, la verde
          $("#header3").text("Paso 17"); 
          $("#tituloTarjeta3").text("Contrataci??n exitosa");
          $("#contenidoTarjeta3").text("Si todo ha ido bien, ahora te deberia aparecer una pantalla de confirmaci??n. Dale al bot??n de entendido y podr??s ver tu pantalla de inicio en la aplicaci??n");
            //tarjeta 4, es decir, la roja
            $("#header4").text("Advertencia"); 
            $("#tituloTarjeta4").text("Sesi??n");
            $("#contenidoTarjeta4").text("Si pasas m??s de 15 minutos inactivo en la aplicaci??n, tu sesi??n se cerrar?? y deber??s volver a entrar");


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