<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamiferos</title>
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

    <link rel="stylesheet" href="../../css/categoria/modal.css">
    <link rel="stylesheet" href="../../css/categoria/categoria.css">
   <link rel="stylesheet" href="../../css/estilos.css" type="text/css">

</head>
<body>
  <!--Cabecera -->
   <?php include "navegacion.php";?>
<!-- CARRUSEL Oso de anteojos (Tremarctos ornatus)-->
<div class="modal fade" id="myModal" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Oso de anteojos (Tremarctos ornatus)</h4>
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
                                <img src="../../img/categoria/mamifero/oso1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Pelaje y Marcas Faciales</h3>
                                    <p>El oso de anteojos tiene un pelaje denso y corto, que varía en color desde negro a marrón oscuro. Una de sus características más distintivas es la banda blanca que cruza su hocico y rodea sus ojos, pareciendo que lleva anteojos, de ahí su nombre común.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../../img/categoria/mamifero/oso2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Construcción Corporal</h3>
                                    <p>Son osos de tamaño mediano, con cuerpos robustos y patas fuertes. Los machos tienden a ser más grandes que las hembras. Tienen garras fuertes y curvadas que les ayudan en actividades como trepar árboles en busca de alimentos.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../../img/categoria/mamifero/oso3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block"><br>
                                    <h3>Hábitos Alimenticios</h3>
                                    <p>La dieta del oso de anteojos es omnívora, pero su alimentación está dominada por plantas. Se alimenta de frutas, brotes, bromelias, raíces, y en ocasiones, pequeños mamíferos y carroña. Su capacidad para trepar árboles les permite acceder a recursos alimenticios que otros osos no pueden alcanzar.</p>
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

  <!-- CARRUSEL Conejo de los Andes (Sylvilagus andinus)-->
  <div class="modal fade" id="myModal1" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Conejo de los Andes (Sylvilagus andinus):</h4>
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
                                  <img src="../../img/categoria/mamifero/conejo1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Tamaño y Morfología</h3>
                                      <p>El Conejo de los Andes es de tamaño mediano, con un cuerpo compacto y orejas relativamente cortas. Su longitud y altura varían, pero en general, tienen un aspecto robusto y adaptado a su entorno de alta montaña.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../../img/categoria/mamifero/conejo2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Pelaje</h3>
                                      <p>Su pelaje es denso y suave, adaptado a las condiciones climáticas de su hábitat. La coloración del pelaje puede variar, pero generalmente se camufla con los tonos de su entorno, proporcionándoles cierta protección contra depredadores.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../../img/categoria/mamifero/conejo3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block"><br>
                                      <h3>Hábitos Alimenticios y Comportamiento</h3>
                                      <p>Son animales herbívoros que se alimentan de una variedad de plantas, hierbas y brotes disponibles en su entorno. Son principalmente crepusculares y nocturnos, lo que significa que son más activos durante el amanecer y el anochecer. Su comportamiento suele ser discreto, y tienden a ser solitarios, aunque pueden formar grupos sociales pequeños en ocasiones.</p>
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

  <!-- CARRUSEL Murciélago de Thomas (Platyrrhinus dorsalis)-->
  <div class="modal fade" id="myModal2" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Murciélago de Thomas (Platyrrhinus dorsalis)
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
                                  <img src="../../img/categoria/mamifero/murcielago1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Tamaño y Morfología</h3>
                                      <p>El Murciélago de Thomas es de tamaño mediano en comparación con otras especies de murciélagos. Presenta alas largas y estrechas, adaptadas para el vuelo ágil, y orejas relativamente grandes.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../../img/categoria/mamifero/murcielago2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Localización y Hábitat </h3>
                                      <p>Este murciélago es endémico de los Andes ecuatorianos y se encuentra en elevaciones moderadas. Habita en diferentes tipos de bosques, desde bosques montanos hasta bosques nublados, buscando refugio en grietas rocosas, cuevas o estructuras abandonadas durante el día.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../../img/categoria/mamifero/murcielago3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block"><br>
                                      <h3>Hábitos Alimenticios y Ecolocación</h3>
                                      <p>El Murciélago de Thomas se alimenta principalmente de insectos, utilizando la ecolocación para detectar presas mientras vuela durante la noche. Su dieta puede incluir una variedad de insectos, como escarabajos, polillas y mosquitos.</p>
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

    <!-- CARRUSEL Zarigüeya de Thomas (Didelphis pernigra):-->
    <div class="modal fade" id="myModal3" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Zarigüeya de Thomas (Didelphis pernigra):</h4>
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
                                    <img src="../../img/categoria/mamifero/zari1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Pelaje y Morfología</h3>
                                        <p>La Zarigüeya de Thomas tiene un pelaje denso y oscuro, adaptado a su entorno en bosques húmedos. Su cuerpo es alargado y su cola es larga y prensil, lo que le permite trepar árboles y equilibrarse.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../../img/categoria/mamifero/zari2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Hábitos Alimenticios</h3>
                                        <p>La Zarigüeya de Thomas es omnívora y se alimenta de una variedad de alimentos, incluyendo frutas, insectos, pequeños vertebrados y carroña. Su dieta versátil le permite adaptarse a diferentes recursos alimenticios en su entorno.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../../img/categoria/mamifero/zari3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block"><br>
                                        <h3>Comportamiento Nocturno</h3>
                                        <p>Es una especie nocturna, lo que significa que es más activa durante la noche. Durante el día, se refugia en árboles, cuevas u otras estructuras para descansar y evitar a los depredadores.</p>
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
        <div class="cont_imgAnimal"><img class="animal-image" src="../../img/categoria/mamifero/oso.jpg"
            alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal"></div>
        <div class="animal-details">
          <h3 class="titulo_animal">Oso de anteojos (Tremarctos ornatus)</h3>
          <div class="descripcion_animal">
            <p>Tremarctos ornatus se distribuye en los Andes de Venezuela, Colombia, Ecuador, Perú, Bolivia y Argentina (Castellanos, 2010). Aunque su presencia en el norte de Argentina originalmente se basaba en evidencia indirecta y controversial (Garshelis, 2009) Cosse et al. (2014) reportan la presencia de esta especie al norte de Argentina con base a fragmentos de ADN, extraídos de pelo y heces, por tanto, se incluye dentro de la lista más reciente de mamíferos de Argentina (Teta et al., 2018). En Ecuador está presente en la Sierra, Amazonía y estribaciones de los Andes dentro de los bosques subtropicales, templados, altoandinos y páramos (Tirira, 2017).</p>
          </div>
          <div class="localizacion_animal">
            <p class="text_localizacion">Localización</p>
            <div class="tipos_caracteristicas">
            <p>Aunque no es endémico de la sierra ecuatoriana, se encuentra en varias regiones de América del Sur, incluyendo bosques nublados y páramos en las altas montañas de los Andes.</p>
            </div>
          </div>
          <div class="costumbres">
            <p class="text_costumbres">Costumbres:</p>
            <p>Son animales solitarios y nocturnos. Su dieta varía e incluye frutas, bromelias, raíces, insectos y pequeños mamíferos. La conservación del oso de anteojos es crucial debido a su estatus de especie vulnerable.</p>
          </div>
        </div>
      </div>';

  echo '<div class="animal-info">
    <div class="cont_imgAnimal"><img class="animal-image" src="../../img/categoria/mamifero/conejo.jpg"
        alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"></div>
    <div class="animal-details">
      <h3 class="titulo_animal">Conejo de los Andes (Sylvilagus andinus)</h3>
      <div class="descripcion_animal">
        <p>El conejo de páramo es una especie herbívora, solitaria y terrestre (Emmons y Feer, 1999). Consume hojas, brotes, ramas jóvenes y en ocasiones la corteza de ciertos árboles (Tirira, 2007). Las especies del género Sylvilagus que habitan en los páramos se sugiere son especies oportunistas que pueden consumir de tres hasta 12 especies de plantas, dependiendo de su disponibilidad (Valero y Duarte, 2001). Se han registrado a especies de las familias Poaceae y Cyperaceae como parte de su dieta (Valero y Durante, 2001). No se conoce con exactitud más información de la historia natural y biología de esta especie. Se indican aquí los datos de S. brasiliensis. Esta especie se reproduce durante todo el año, el periodo de gestación es de 44 días y con un promedio de 4.7 individuos cada año (S. b. meridensis) y camadas en promedio de 1.2 individuos (Durant, 1983; Chapman y Ceballos, 1990).</p>
      </div>
      <div class="localizacion_animal">
        <p class="text_localizacion">Localización</p>
        <div class="tipos_caracteristicas">
        <p>Endémico de los Andes ecuatorianos, se encuentra en áreas de alta montaña, incluyendo bosques y páramos.</p>
        </div>
      </div>
      <div class="costumbres">
        <p class="text_costumbres">Costumbres:</p>
        <p> Son animales principalmente crepusculares y nocturnos. Se alimentan de una variedad de plantas, hierbas y brotes. Su comportamiento es discreto, y tienden a ser solitarios.</p>
      </div>
    </div>
  </div>';

   echo '<div class="animal-info">
      <div class="cont_imgAnimal"><img class="animal-image" src="../../img/categoria/mamifero/murcielago.jpg"
          alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"></div>
      <div class="animal-details">
        <h3 class="titulo_animal">Murciélago de Thomas (Platyrrhinus dorsalis)</h3>
        <div class="descripcion_animal">
          <p>Platyrrhinus dorsalis chocoensis es una subespecie de tamaño mediano dentro del género.  Con pelaje denso, suave y bicoloreado en el vientre y el dorso de color marrón oscuro. La linea dorsal es delgada de color blanco. Las líneas faciales son tenues y poco evidentes. Los bordes de la hoja nasal son oscuros. Orejas a veces con los bordes pálidos, pero nunca amarillos. Membranas de color marrón oscuro, codos densamente peludos, con pelos de color similar al dorso. Membrana caudal muy corta en el centro con una profunda muesca en forma de V y con abundantes pelos cortos. El dorso de las patas tiene pelo corto y escaso (Alberico y Velazco, 1991; Emmons y Feer, 1999; Velazco, 2005; Gardner, 2007).</p>
        </div>
        <div class="localizacion_animal">
          <p class="text_localizacion">Localización</p>
          <div class="tipos_caracteristicas">
          <p>Endémico de los Andes ecuatorianos, habita en elevaciones moderadas.</p>
          </div>
        </div>
        <div class="costumbres">
          <p class="text_costumbres">Costumbres:</p>
          <p>Es un murciélago nocturno que utiliza la ecolocación para cazar insectos durante la noche. Se refugia en cuevas, grietas rocosas o estructuras abandonadas durante el día.</p>
        </div>
      </div>
    </div>';

   echo '<div class="animal-info">
      <div class="cont_imgAnimal"><img class="animal-image" src="../../img/categoria/mamifero/zari.jpg"
          alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal3"></div>
      <div class="animal-details">
        <h3 class="titulo_animal">Zarigüeya de Thomas (Didelphis pernigra)</h3>
        <div class="descripcion_animal">
          <p>Es nocturna, solitaria y mayormente terrestre pero buena trepadora. No se conoce información específica para esta especie; sin embargo se presenta información de sus congéneres y general del orden Didelphimorphia. Especie omnívora, alimentándose de insectos, otros invertebrados, frutos y eventualmente pequeños vertebrados, dependiendo de la disponibilidad de estos recursos (Tirira, 2007; Astúa, 2015). Durante el día se refugia en árboles huecos, cavidades en el suelo o entre rocas (Tirira, 2007). En Colombia esta especie registra un periodo de gestación de 12 días, y una media del tamaño de la camada de 4.2, con un rango de dos a siete crías. Se ha registrado a esta especie con tres crías en el marsupio en el mes de octubre en Quito (QCAZ 3946).</p>
        </div>
        <div class="localizacion_animal">
          <p class="text_localizacion">Localización</p>
          <div class="tipos_caracteristicas">
          <p> Endémica de la región andina de Ecuador, se encuentra en bosques húmedos.</p>
          </div>
        </div>
        <div class="costumbres">
          <p class="text_costumbres">Costumbres:</p>
          <p>Es un animal nocturno que se alimenta principalmente de frutas, insectos, pequeños vertebrados y carroña. Son excelentes trepadores y pasan mucho tiempo en los árboles.</p>
        </div>
      </div>
    </div>';
?>


  <?php include "footer.php";?>
</body>
</html>
