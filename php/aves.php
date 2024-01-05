<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aves</title>
  <link rel="icon" href="../img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/categoria/modal.css">
    <link rel="stylesheet" href="../css/categoria/categoria.css">
   <link rel="stylesheet" href="../css/estilos.css" type="text/css">

</head>
<body>

  <!--Cabecera -->
  <?php include "navegacionM.php";?>
   <?php include "navegacion.php";?>
<!-- CARRUSEL Colibrí Pechinegro (Aglaeactis aliciae)-->
<div class="modal fade" id="myModal" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Colibrí Pechinegro (Aglaeactis aliciae)</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <br>
                    <div id="theCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicadores -->
                        <ol class="carousel-indicators">
                            <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#theCarousel" data-slide-to="1"></li>
                            <li data-target="#theCarousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="../img/categoria/aves/colibri1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Plumaje distintivo</h3>
                                    <p>El Colibrí Pechinegro presenta un plumaje caracterizado por tonos oscuros y metálicos. El macho tiene un plumaje predominantemente negro en la parte superior, mientras que la hembra tiene colores más apagados y menos llamativos.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/categoria/aves/colibri2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Marcado parche púrpura en la garganta</h3>
                                    <p>Una de las características más distintivas de esta especie es el parche púrpura brillante en la garganta de los machos. Este detalle a menudo se destaca en contraste con el resto del plumaje oscuro.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/categoria/aves/colibri3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block"><br>
                                    <h3>Comportamiento territorial y alimentación</h3>
                                    <p>Estos colibríes son conocidos por su comportamiento territorial. Defienden agresivamente sus territorios de alimentación, que suelen estar asociados con parches de flores ricas en néctar. Se alimentan principalmente de néctar, utilizando su largo pico y su capacidad para el vuelo estacionario para acceder a las flores.</p>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#theCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">anterior</span>
                            </a>
                            <a class="right carousel-control" href="#theCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">siguiente</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- CARRUSEL Trepador de Páramo (Anairetes alpinus)-->
  <div class="modal fade" id="myModal1" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Sapo Corredor</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <br>
                      <div id="theCarousel1" class="carousel slide" data-ride="carousel">
                          <!-- Indicadores -->
                          <ol class="carousel-indicators">
                              <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#theCarousel" data-slide-to="1"></li>
                              <li data-target="#theCarousel" data-slide-to="2"></li>
                          </ol>

                          <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <img src="../img/categoria/aves/trepador1.jpeg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Plumaje grisáceo con detalle amarillo en la cabeza</h3>
                                      <p>El Trepador de Páramo tiene un plumaje predominantemente grisáceo en el cuerpo, pero presenta un distintivo parche amarillo brillante en la cabeza, lo que lo hace fácilmente reconocible.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/aves/trepador2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Cola larga y puntiaguda</h3>
                                      <p>Esta especie se caracteriza por tener una cola larga y puntiaguda, lo que le proporciona estabilidad y ayuda durante sus actividades de búsqueda de alimento en ambientes de páramo.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/aves/trepador3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block"><br>
                                      <h3>Comportamiento de búsqueda activa</h3>
                                      <p>El Trepador de Páramo es conocido por su comportamiento activo de búsqueda de alimento. Se desplaza rápidamente entre las ramas y arbustos, explorando activamente para encontrar insectos y otros invertebrados de los cuales se alimenta.</p>
                                  </div>
                              </div>

                              <a class="left carousel-control" href="#theCarousel1" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">anterior</span>
                              </a>
                              <a class="right carousel-control" href="#theCarousel1" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">siguiente</span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- CARRUSEL Jilguero de Anteojos (Spinus ophthalmicus):-->
  <div class="modal fade" id="myModal2" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Jilguero de Anteojos (Spinus ophthalmicus)
</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <br>
                      <div id="theCarousel2" class="carousel slide" data-ride="carousel">
                          <!-- Indicadores -->
                          <ol class="carousel-indicators">
                              <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#theCarousel" data-slide-to="1"></li>
                              <li data-target="#theCarousel" data-slide-to="2"></li>
                          </ol>

                          <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <img src="../img/categoria/aves/jilguero1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Plumaje amarillo y negro</h3>
                                      <p>El jilguero andino presenta un plumaje amarillo brillante en la mayor parte de su cuerpo, con marcas negras en la cabeza, espalda y alas. Los machos y las hembras suelen tener colores similares, aunque a veces los machos pueden exhibir tonos más vibrantes.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/aves/jilguero2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Anteojos amarillos alrededor de los ojos </h3>
                                      <p>Una característica distintiva de esta especie es la presencia de un anillo o "anteojos" amarillos alrededor de los ojos, que contrasta con el plumaje oscuro alrededor de la cabeza.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/aves/jilguero3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block"><br>
                                      <h3>Alimentación principalmente de semillas</h3>
                                      <p>Esta especie se alimenta principalmente de semillas, y a menudo se le observa en grupos buscando alimento entre la vegetación de páramo. También puede consumir insectos y otros pequeños invertebrados.</p>
                                  </div>
                              </div>

                              <a class="left carousel-control" href="#theCarousel2" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">anterior</span>
                              </a>
                              <a class="right carousel-control" href="#theCarousel2" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">siguiente</span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- CARRUSEL Pájaro Carpintero Andino (Veniliornis kirkii)-->
    <div class="modal fade" id="myModal3" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Pájaro Carpintero Andino (Veniliornis kirkii)</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <br>
                        <div id="theCarousel3" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                            <ol class="carousel-indicators">
                                <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#theCarousel" data-slide-to="1"></li>
                                <li data-target="#theCarousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="../img/categoria/aves/carpintero1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Plumaje distintivo</h3>
                                        <p>El Carpintero Ventriocre tiene un plumaje llamativo con una combinación de colores que incluyen negro, blanco y rojo. Suele tener un patrón de rayas en la cabeza y una mancha roja en la nuca.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../img/categoria/aves/carpintero2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Hábitat de bosques montanos y páramos</h3>
                                        <p>Este pájaro carpintero se encuentra en hábitats de bosques montanos y páramos en América del Sur, incluyendo regiones en Colombia, Ecuador y Perú.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../img/categoria/aves/carpintero3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block"><br>
                                        <h3>Alimentación y comportamiento de tamborileo</h3>
                                        <p>Como otros pájaros carpinteros, se alimenta principalmente de insectos y larvas que encuentra perforando la corteza de los árboles. También utiliza el tamborileo como medio de comunicación para establecer territorio y atraer pareja durante la temporada de reproducción.</p>
                                    </div>
                                </div>

                                <a class="left carousel-control" href="#theCarousel3" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">anterior</span>
                                </a>
                                <a class="right carousel-control" href="#theCarousel3" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">siguiente</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// Tu código PHP aquí

echo '<div class="animal-info">
        <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/aves/colibri.jpg"
            alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal"></div>
        <div class="animal-details">
          <h3 class="titulo_animal">Colibrí Pechinegro (Aglaeactis aliciae)</h3>
          <div class="descripcion_animal">
            <p>El colibrí pechinegro es una especie pequeña y vibrante con plumaje predominantemente negro en la parte superior y un distintivo parche púrpura en la garganta. Los machos suelen tener colores más llamativos que las hembras. Colibrí de apariencia manchada, restringido a una pequeña y remota área en los Andes del norte de Perú. Su plumaje es marrón-bronceado con irregulares manchas blancas en la cara, la garganta y el vientre, además en el pecho posee otras manchas del mismo color en forma de lágrima. El macho adulto tiene la parte inferior de la espalda púrpura y verde iridiscente, la cual es borrosa o ausente en las hembras y en los juveniles.</p>
          </div>
          <div class="localizacion_animal">
            <p class="text_localizacion">Localización</p>
            <div class="tipos_caracteristicas">
            <p>Endémico de la región andina en Ecuador, se encuentra especialmente en las áreas montañosas de la sierra.</p>
            </div>
          </div>
          <div class="costumbres">
            <p class="text_costumbres">Costumbres:</p>
            <p> Es conocido por su comportamiento territorial y agresivo. Se alimenta principalmente de néctar de flores, utilizando su largo pico y su habilidad para el vuelo estacionario.</p>
          </div>
        </div>
      </div>';

  echo '<div class="animal-info">
    <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/aves/trepador.jpg"
        alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"></div>
    <div class="animal-details">
      <h3 class="titulo_animal">Trepador de Páramo (Anairetes alpinus)</h3>
      <div class="descripcion_animal">
        <p>El trepador de páramo es un ave pequeña con un plumaje grisáceo y un parche distintivo de color amarillo brillante en la cabeza. Su cola larga y puntiaguda es característica. El Torito de Pecho Cenizo es todo gris con un centro pálido del vientre y dos anchas barras blancas en las alas. Tiene una cresta de plumas negras y un parche blanco en la corona. El pico es negro. Las plumas exteriores de la cola son blancas. Se asocia con bosques de Polylepis y matorrales adyacentes. Es inconfundible en su hábitat especializado y área de distribución limitada, pero vea al Tijeral de Ceja Blanca.</p>
      </div>
      <div class="localizacion_animal">
        <p class="text_localizacion">Localización</p>
        <div class="tipos_caracteristicas">
        <p> Endémico de las áreas de páramo en la sierra ecuatoriana, se encuentra en altitudes elevadas.</p>
        </div>
      </div>
      <div class="costumbres">
        <p class="text_costumbres">Costumbres:</p>
        <p>Es un especialista en trepar por la vegetación densa de los páramos en busca de insectos y larvas. Su cola le proporciona estabilidad mientras se desplaza entre las ramas.</p>
      </div>
    </div>
  </div>';

   echo '<div class="animal-info">
      <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/aves/jilguero.jpg"
          alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"></div>
      <div class="animal-details">
        <h3 class="titulo_animal">Jilguero de Anteojos (Spinus ophthalmicus):</h3>
        <div class="descripcion_animal">
          <p>Pinzón pequeño y amarillo que se encuentra en el bosque nuboso de la ladera este de los Andes. Nota las manchas amarillas en las alas y la cola. El macho tiene una capucha negra. Es difícil de separar de Hooded Siskin, excepto por su rango y el hábitat. Olivaceous Siskin se encuentra generalmente en elevaciones más bajas y prefiere un bosque más alto y más húmedo. El macho puede parecer ligeramente más dorado que el macho de Hooded Siskin, pero esto es difícil de juzgar. La hembra siempre es amarilla abajo, mientras que la mayoría (pero no todas) de las hembras de Hooded Siskin en el área de traslape son grisáceas abajo. No todas las aves pueden ser identificadas con certeza</p>
        </div>
        <div class="localizacion_animal">
          <p class="text_localizacion">Localización</p>
          <div class="tipos_caracteristicas">
          <p>Endémico de los páramos y bosques de montaña en la sierra ecuatoriana.</p>
          </div>
        </div>
        <div class="costumbres">
          <p class="text_costumbres">Costumbres:</p>
          <p>Se alimenta principalmente de semillas y es conocido por formar bandadas durante la temporada no reproductiva. Puede ser visto en áreas abiertas y también en bosques de altura.</p>
        </div>
      </div>
    </div>';

   echo '<div class="animal-info">
      <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/aves/carpintero.jpg"
          alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal3"></div>
      <div class="animal-details">
        <h3 class="titulo_animal">Pájaro Carpintero Andino (Veniliornis kirkii)</h3>
        <div class="descripcion_animal">
          <p>El Carpintero Ventriocre presenta un plumaje distintivo. La parte superior de su cabeza es de color negro con rayas blancas, y su nuca tiene una mancha roja. El dorso y las alas son de color negro con rayas blancas, mientras que la parte inferior es blanca con algunas rayas negras. Tiene un pico fuerte y puntiagudo, típico de los pájaros carpinteros.</p>
        </div>
        <div class="localizacion_animal">
          <p class="text_localizacion">Localización</p>
          <div class="tipos_caracteristicas">
          <p>Su distribución se encuentra principalmente en los bosques montanos y páramos de América del Sur, en regiones de Colombia, Ecuador y Perú. Estos hábitats incluyen áreas de elevación en las montañas.</p>
          </div>
        </div>
        <div class="costumbres">
          <p class="text_costumbres">Costumbres:</p>
          <p>El Carpintero Ventriocre habita en bosques montanos y páramos, donde se le puede encontrar en árboles altos. Se alimenta principalmente de insectos y larvas que extrae de la corteza de los árboles mediante golpes con su fuerte pico.
Utiliza el tamborileo como una forma de comunicación. Este comportamiento consiste en golpear repetidamente con su pico contra troncos de árboles para establecer su territorio y comunicarse con otros carpinteros.
Durante la temporada de reproducción, el tamborileo también puede utilizarse para atraer a una pareja. Construyen sus nidos en cavidades de los árboles, donde ponen sus huevos y crían a sus crías.</p>
        </div>
      </div>
    </div>';
?>

  <?php include "footer.php";?>

</body>
</html>
