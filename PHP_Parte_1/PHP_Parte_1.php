<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" lang="es" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Author" lang="es" content="Óscar Javier Vargas Diaz, oscarjaviervargas@hotmail.com"> 
  <meta name="DC.identifier" lang="es" content=""><!--Aqui va la pagina SOLUMOBIL.............................-->
  <META http-equiv="Expires" lang="es" content="0"><!--ESTA NOSE PARA QUE ES.-->
  <meta name="Keywords" lang="es" content="Engativa,Colombia, Bogota,
  servicio tecnico, localidad, Quitar Cuenta Google,
  reparacion, celulares, pantalla, dañada, puerto de carga, tablets, baratos,
  flasheo de celulares o tablets, cambio de pantalla, cambio de repuestos.">
  <META http-equiv="PICS-Label" content='
  (PICS-1.1 "http://www.gcf.org/v2.5"
  labels on "1994.11.05T08:15-0500"
  until "1995.12.31T23:59-0000"
  for "http://w3.org/PICS/Overview.html"
  ratings (suds 0.5 density 0 color/hue 1)) 
 '><!--Esto es para ayudar a los padres y a las escuelas a controlar los lugares a los
   que pueden acceder los niños en Internet, también facilita otros usos para las etiquetas, 
  incluyendo firmas de código, privacidad, y gestión de los derechos de la propiedad
  intelectual.-->
  <META name="copyright" content="&copy; 2020 Solumobil Company.">
  <meta name="Description" lang="es" content="Pagina de servicio profesional
  enfocada en el mantenimiento y reparacion de celulares en la ciudad de Bogota-Colombia.
  Servicio tecnico de moviles.">
  <META name="date" content="19:05:09, sábado 29, febrero 2020 -05">
  <meta name="generator" content="HTML-KIT 2.9"/>
  <meta name="language" content="es"/>
  <meta name="revisit-after" content="1 month"/>
  <meta name="robots" content="index, follow"/>
  <meta name="application-name" content="servicio tecnico web de reparacion de celulares" />
  <meta name="encoding" charset="utf-8" />
  <meta http-equiv="refresh" content="300" />
  <meta http-equiv=»X-UA-Compatible». />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="organization" content="Solumobil Company" />
  <meta name="revisit" content="7" />

  <!----------------------------------------------------------------------------------->
  <!----------------------------------------------------------------------------------->
  <!--TERMINA AQUI --------------------------------------------------------------META-->
  <!----------------------------------------------------------------------------------->

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="Shortcut Icon" href="../img/1.ico"/>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="../js/modernizr.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <title>PHP | Solumobil</title>


</head>
<body>

  <div class="page-container">

    <nav class="full-reset nav-phonestore">
     <div class="logo tittles-pages">
      Solumobil
    </div>
    <ul class="list-unstyled full-reset navigation-list">
      <li class="liLineas"><a href="../Solumobil/index.php" class="fa fa-home"></a></li><!-- index.php-->
      <li><a href="">PRODUCTOS</a></li>  <!-- product.php-->
      <li><a href="../Solumobil/news.php">NOSOTROS</a></li><!-- news.php-->
      <li><a href="../Solumobil/services.php">SERVICIOS</a></li><!--services.php-->


      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="PHP_Parte_1.php">PHP</a>
      <div class="dropdown-menu dropdown-toggle">
          <a id="i1" class="dropdown-item" href="PHP_Parte_1.php">PHP | Parte 1</a>
          <a id="i1" class="dropdown-item" href="../PHP_Parte_2/PHP_Parte_2.php">PHP | Parte 2</a>
          <a id="i1" class="dropdown-item" href="../PHP_Parte_3/PHP_Parte_3.php">PHP | Parte 3</a>
        </div></li> <!-- PHP -->


      <li class="liLineas"><a href="../Solumobil/contact.php" class="fa fa-phone"></a></li><!-- contact.html-->

      <li><a href="../views/Login_and_Signin/inicioSesion.php" class="acceder">Acceder</a></li><!-- contact.php-->
      <li><a href="../views/Login_and_Signin/registro.php" class="crearCuenta">Crear cuenta</a></li><!-- contact.php-->

    </ul>
    
    <i class="fa fa-bars visible-xs btn-mobile"></i>
  </nav>


  <section class="fondo_PHP section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <p class="titulo-servicio">Aprende PHP con ejercicios</p>
          <br><br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-5">
          <div class="logo-fondo">
            <p style="font-size: 90px; text-align: center;"><i
              ><img src="../img/1.ico"></i></p>
              <h3 class="text-center">PHP | Parte 1</h3>
              <p class="text-justify">
              </p>
            </div>
          </div>

          <hr>
          <h4>             1. Ingresar 5 números y calcular su media.
          </h4><br>


          <?php 


          require_once 'Ej_1.php';



          ?>

         <!--  <p>Codigo</p>

          <pre>


            <code>


              <?php 


              // $nums=[5,5,5,5,5];

              // $media=array_sum($nums)/count($nums);

              // echo('Numeros a promediar: ');

              // echo "<pre>";

              // echo var_dump($nums);

              // echo "</pre>";

              // echo 'La media o promedio de los numeros es: ' . $media;


              ?>

            </code>
          </pre>
        -->



        <hr>
        <br>
        <br>
        <br>


        <hr>
        <h4>2. Escribir el algoritmo necesario para calcular y mostrar el cuadrado de un número. El número debe
         ser mayor que cero, en caso de error que aparezca el mensaje "ERROR, el número debe ser mayor
       que cero".</h4><br>



       <?php 


       require_once 'Ej_2.php';



       ?>



       <hr>
       <br>
       <br>
       <br>
       <hr>

       <h4>3. De 10 números ingresados indicar cuantos son mayores a cero y cuantos son menores a cero. </h4><wbr>


         <?php 


         require_once 'Ej_3.php';



         ?>
         <hr>
         <br>
         <br>
         <br>
         <hr>


         <h4>4. Diseñar un algoritmo que calcule la longitud de la circunferencia y el área del círculo de radio
         dado.  </h4><br>



         <p></p>
         <form action="Ej_4.php" method="POST">
           <label>Ingrese el valor del radio : </label>
           <input type="text" name="radio" id="radio" />
           <label for="opcion"><br />
            <br />
          opciones :  </label>
          <select name="opcion" id="opcion">
            <option value="1">circulo</option>
            <option value="2">circunferencia</option>
          </select>
        </p>

        <br>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
      </br>
      <p>

       <label for="resultado">
       </p>   
     </form>  






     <hr>
     <br>
     <br>
     <br>
     <hr>

     <h4>5. Diseñar un algoritmo que calcule la superficie de un triángulo a partir del ingreso de su base y
     altura y muestre el resultado.</h4>



     <p></p>
     <br>



     <form method="POST">
       <label>valor de la base</label><br>
       <input type="text" name="base" id="base" /><br>
       <label>valor de la altura</label><br>

       <input type="text" name="altura" id="altura" />

     </p>

     <br>
     <input type="submit" name="enviar" id="enviar" value="Enviar" />
   </br>
   <p>

     <label for="resultado">
     </p>   
   </form> 










   <hr>
   <br>

   <br>
   <br>
   <br>
   <hr>

   <h4>  
     6. Hacer el algoritmo que nos permita introducir un número por teclado y nos informe si es positivo
   o negativo. </h4>
   <br>
   <br>



   <form action="Ej_6.php" method="POST">


    Ingrese el numero: <input type="text" name="num" placeholder="numero">
    <input type="submit" value="Enviar">






  </form>
  <br>
  <br>













  <hr>
  <br>


  <br>
  <br>
  <br>
  <hr>


  <h4>7. Hacer el algoritmo que nos permita introducir un número por teclado y nos informe si es par o
  impar.</h4>

  <hr>
  <br>

  <br>
  <br>



  <form action="Ej_7.php" method="POST">


    Ingrese el numero: <input type="text" name="num" placeholder="numero">
    <input type="submit" value="Enviar">






  </form>
  <br>

  <br>
  <br>
  <hr>


  <h4>8. Escribir el algoritmo que me permita leer un número decimal que representa una cantidad de
   grados Celsius y convierta dicho valor a la cantidad equivalente en grados Fahrenheit. La salida del
 programa puede ser de la siguiente forma: 100 grados celsius son 212 grados Fahrenheit </h4>

 <hr>
 <br>

 <form action="Ej_8.php" method="POST">


  Ingrese el numero: <input type="text" name="num" placeholder="numero">
  <input type="submit" value="Enviar">






</form>



<br>
<br>
<br>
<hr>


<h4>9. Dados ciertos centímetros como entrada de tipo decimal, escribir su equivalente a pies    y
 pulgadas. Considerar 2.54 cm por pulgada y 12 pulgadas por pie. La salida podrá ser: 333.3 cm son
10 pies y 11.2 pulgadas. </h4>
<hr>
<br>


<form action="Ej_9.php" method="POST">


 Ingrese el numero: <input type="text" name="num" placeholder="numero">




 <input type="submit" value="Enviar">





</form>

<br>
<br>
<br>
<hr>

<h4>10. Escribir un programa que muestre los números impares entre 0 y 100 y que imprima cuantos
impares hay.</h4>
<hr>
<br>



<?php 


require_once 'Ej_10.php';



?>

<br>
<br>
<br>
<hr>
<h4> 11. Hacer el algoritmo que imprima los números pares entre el 1 y el 100.
</h4>
<hr>
<br>




<?php 


require_once 'Ej_11.php';



?>

<br>
<br>
<br>
<hr>
<h4>  12. Hacer el algoritmo que imprima los números del 1 al 100.
</h4>



<?php 


require_once 'Ej_12.php';



?>

<hr>
<br>
<br>
<br>
<br>
<hr>
<h4>   13. Realizar la serie Fibonacci.
</h4>
<hr>
<br>


<form action="Ej_13.php" method="POST">


 Ingrese el numero: <input type="text" name="num" placeholder="numero">




 <input type="submit" value="Enviar">



</form>


<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>




</p>
</div>
</div>


















<footer class="footer">
 <div class="container-fluid">
  <div class="col-xs-12 text-center">
   <h3>Siguenos en</h3>
   <ul class="list-unstyled list-social-icons">
    <li >
     <a href="https://www.facebook.com/SMQCgoogle/">
       <i class="fa fa-facebook" style="background-color: #3B5998;"></i> 
     </a>
   </li>
   <li>
     <a href="https://myaccount.google.com/u/1/personal-info">
      <i class="fa fa-google-plus" style="background-color: #DD4B39;"></i>
    </a>
  </li>
  <li>
   <a href="https://twitter.com/solumobil">
    <i class="fa fa-twitter"  style="background-color: #56A3D9;"></i>
  </a>
</li>
<li>
 <a href="https://www.youtube.com/channel/UCSnYERmeZDilOz3ydEabDFA?view_as=subscriber">
  <i class="fa fa-youtube" style="background-color: #BF221F;"></i>
</a>
</li>
</ul>
<h4>Solumobil &copy; 2020</h4>
</div>
</div>
</footer>
</div>

</body>
</html>