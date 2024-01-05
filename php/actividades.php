<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Educación</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <link rel="stylesheet" type="text/css" href="../css/page.css">
  <link rel="stylesheet" type="text/css" href="../css/actividades.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </script>
  <link rel="stylesheet" href="../css/estilos.css" type="text/css">
  <body>
    <!--Cabecera -->
     <?php include "navegacion.php";?>
    <div class="portada3">

    </div>
    <section class="center-align">
      <div class="carta">
        <div class="caja">
          <div class="imgcaja">
            <img src="../img/programas.jpeg"/>
          </div>
          <div class="contenidocaja">
            <div>
              <h2>Programas</h2>
              <p>SOS Animales en peligro<br>Bosque Seco y Agua<br><br></p>
              <a class="waves-effect orange darken-3 waves-light btn modal-trigger" href="#modal1">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carta">
        <div class="caja">
          <div class="imgcaja">
            <img src="../img/proyectos.jpeg"/>
          </div>
          <div class="contenidocaja">
            <div>
              <h2>Proyectos</h2>
              <p>Quito Biodiverso<br>Desafío Naturaleza Urbana<br><br></p>
              <a class="waves-effect orange darken-3 waves-light btn modal-trigger" href="#modal2">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carta">
        <div class="caja">
          <div class="imgcaja">
            <img src="../img/campañas.jpeg"/>
          </div>
          <div class="contenidocaja">
            <div>
              <h2>Campañas</h2>
              <p>Uillis Uillis<br>Cóndores<br><br></p>
              <a class="waves-effect orange darken-3 waves-light btn modal-trigger" href="#modal3">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal para programas-->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Programas</h4>
        <p>Descubre la diversidad de programas especializados que ofrecemos en nuestro zoológico para la conservación y protección de animales en peligro. Desde la cautivadora exploración de nuestros programas destacados como Bosque Seco y Agua, hasta una variedad de opciones dedicadas a preservar hábitats y especies vulnerables. ¡Sumérgete en un viaje emocionante hacia la conservación animal y descubre cómo trabajamos para garantizar un futuro próspero para todos estos seres increíbles!</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
      </div>
    </div>

    <!-- Modal para Proyectos-->
    <div id="modal2" class="modal">
      <div class="modal-content">
        <h4>Proyectos</h4>
        <p>Descubre la innovadora visión de conservación de nuestro zoológico a través de dos proyectos emblemáticos: Quito Biodiverso y Desafío Naturaleza Urbana. Quito Biodiverso se enfoca en la preservación de hábitats locales y especies endémicas, promoviendo la biodiversidad en nuestra región. Por otro lado, Desafío Naturaleza Urbana busca integrar la vida silvestre en entornos urbanos, creando espacios sostenibles para la coexistencia armoniosa entre la naturaleza y la ciudad. Estos proyectos representan nuestro compromiso con la conservación, adoptando estrategias innovadoras para proteger y celebrar la vida salvaje en todos los escenarios.</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
      </div>
    </div>

    <!-- Modal para Campañas-->
    <div id="modal3" class="modal">
      <div class="modal-content">
        <h4>Campañas</h4>
        <p>Únete a nuestras campañas dedicadas a la protección de dos especies emblemáticas: los Uillis Uillis y los Cóndores. A través de esfuerzos de concienciación y conservación, buscamos preservar el hábitat y fomentar la supervivencia de los Uillis Uillis, especie única en peligro crítico.<br>
        <img class="responsive-img" src="../img/uilli.jpg"/>
          Del mismo modo, nuestras campañas se extienden para garantizar la preservación de los majestuosos Cóndores, símbolos de la fauna andina en riesgo. Únete a nosotros en esta noble causa para salvaguardar el futuro de estas fascinantes especies y garantizar su continuidad en nuestro ecosistema</p>
        <img class="responsive-img" src="../img/condores.jpg"/>
      </div><
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
      </div>
    </div>
        <br><br><br>
        <footer class="page-footer" style="padding: 20px 0 0 0; background-color: #ec091f!important;">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Zoologico MRP</h5>
                <p class="grey-text text-lighten-4">La experiencia va más allá de simplemente observar animales</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes sociales</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/quito_zoo/">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/QuitoZoo/?locale=es_LA">Facebook</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright" style="background-color: #ff6675;!important">
            <div class="container">
              @Zoologico-Morales-Ramirez-Pozo
            </div>
          </div>
        </footer>
  </body>
  <script>
    M.AutoInit();
  </script>
</html>