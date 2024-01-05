<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anfibios</title>
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
   <?php include "navegacion.php";?>
<!-- CARRUSEL SAPO COMUN-->
<div class="modal fade" id="myModal" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Sapo Común</h4>
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
                                <img src="../../img/categoria/anfibios/sapoComun1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Piel rugosa y glandular</h3>
                                    <p>A diferencia de las ranas, los sapos tienen una piel más seca y rugosa. Además, presentan glándulas especializadas en la piel que segregan toxinas como medida de defensa contra depredadores.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/categoria/anfibios/sapoComun2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Ojos prominentes</h3>
                                    <p>Los sapos comunes generalmente tienen ojos grandes y saltones, lo que les proporciona una visión panorámica y les ayuda a detectar presas o posibles amenazas. Estos ojos prominentes son una característica común en muchos anuros.</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="../img/categoria/anfibios/sapoComun3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                <div class="carousel-caption d-none d-md-block"><br>
                                    <h3>Glándulas parótidas</h3>
                                    <p>En la parte posterior de la cabeza, los sapos poseen glándulas parótidas que secretan sustancias tóxicas. Estas toxinas pueden causar irritación en la piel o mucosas de posibles depredadores, brindando así una forma de defensa pasiva.</p>
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

  <!-- CARRUSEL SAPO CORREDOR-->
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
                                  <img src="../img/categoria/anfibios/sapoCorredor1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Extremidades posteriores robustas</h3>
                                      <p>Los sapos que son ágiles y tienen habilidades de carrera a menudo tienen extremidades posteriores musculosas y fuertes. Estas les permiten dar saltos largos y rápidos para moverse con agilidad.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/anfibios/sapoCorredor2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Piel adaptada a ambientes terrestres: </h3>
                                      <p>A diferencia de algunas ranas que prefieren hábitats acuáticos, los sapos corredores tienden a tener una piel más seca y adaptada a la vida terrestre. Esto les ayuda a moverse eficientemente en entornos más secos y a evitar la deshidratación.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/anfibios/sapoCorredor3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block"><br>
                                      <h3>Ojos grandes y alerta</h3>
                                      <p>Los sapos corredores suelen tener ojos grandes y alerta que les proporcionan una visión periférica aguda. Esto les ayuda a detectar presas o peligros en su entorno y les permite reaccionar rápidamente, ya sea para cazar o escapar de posibles amenazas.</p>
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

  <!-- CARRUSEL RANA COMUN-->
  <div class="modal fade" id="myModal2" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Rana común o verde (Rana ridibunda)
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
                                  <img src="../img/categoria/anfibios/ranaComun1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Coloración verde</h3>
                                      <p> Como su nombre indica, la rana común a menudo presenta un color verde brillante en su piel dorsal, aunque la tonalidad puede variar. Esta coloración verde proporciona camuflaje en ambientes acuáticos y terrestres.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/anfibios/ranaComun2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block">
                                      <h3>Ojos prominentes y membrana timpánica visible </h3>
                                      <p>Las ranas comunes tienen ojos grandes y prominentes que les proporcionan una visión aguda. Además, presentan membranas timpánicas bien visibles a ambos lados de la cabeza, que son estructuras auditivas que les permiten detectar sonidos y comunicarse con otras ranas.</p>
                                  </div>
                              </div>

                              <div class="item">
                                  <img src="../img/categoria/anfibios/ranaComun3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                  <div class="carousel-caption d-none d-md-block"><br>
                                      <h3>Vocalización distintiva</h3>
                                      <p>Los machos de rana común son conocidos por su vocalización distintiva durante la temporada de reproducción. Emiten un sonido similar a un "ribbit" para atraer a las hembras. Esta vocalización es una característica común en muchas especies de ranas y es esencial para el cortejo.</p>
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

    <!-- CARRUSEL RANA MERIDIONAL-->
    <div class="modal fade" id="myModal3" tabindex="-1" data-backdrop="static" data-keyboard="true" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ranita meridional (Hyla meridionalis)</h4>
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
                                    <img src="../img/categoria/anfibios/ranaMeridional1.jpg" alt="Ilustracion" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Coloración variable</h3>
                                        <p>La coloración de la ranita meridional puede variar, pero generalmente presenta tonalidades de verde o marrón, lo que le permite camuflarse en su entorno arbóreo.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../img/categoria/anfibios/ranaMeridional2.jpg" alt="fotografia" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Tamaño pequeño a mediano</h3>
                                        <p>Las ranitas meridionales son relativamente pequeñas en comparación con algunas otras especies de ranas. Los machos suelen ser más pequeños que las hembras. Su tamaño puede oscilar entre 3 y 5 centímetros de longitud.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="../img/categoria/anfibios/ranaMeridional3.jpg" alt="pintura" class="carrusel_img" style="height: 270px;">
                                    <div class="carousel-caption d-none d-md-block"><br>
                                        <h3>Hábitat arborícola</h3>
                                        <p>Como su nombre indica, la ranita meridional es principalmente arbórea. Se encuentra comúnmente en bosques, zonas de matorrales y áreas cercanas a cursos de agua. Pasan la mayor parte de su tiempo en árboles y arbustos.</p>
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
        <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/anfibios/sapoComun.jpg"
            alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal"></div>
        <div class="animal-details">
          <h3 class="titulo_animal"> Sapo Común</h3>
          <div class="descripcion_animal">
            <p>El sapo común o sapo europeo (Bufo bufo) es una especie de anfibio anuro de la familia Bufonidae muy habitual en toda clase de hábitats europeos, sobre todo en aguas estancadas: balsas de riego, albercas, etc. al ser más resistente a las aguas insalubres que otras especies de anfibios durante la fase de renacuajo.[cita requerida] Se distribuye por toda Europa salvo Irlanda, Islandia y algunas islas mediterráneas, además de Asia noroccidental y pequeñas partes del noreste africano. Es uno de los anfibios más conocidos, dada su distribución y requerimientos ecológicos laxos. </p>
          </div>
          <div class="localizacion_animal">
            <p class="text_localizacion">Localización</p>
            <div class="tipos_caracteristicas">
            <p>Zonas cultivadas, incluso de secano, también áreas de montaña y cerca de la costa. Durante la época de reproducción es fácil verlos cerca de estanques y charcas.</p>
            </div>
          </div>
          <div class="costumbres">
            <p class="text_costumbres">Costumbres:</p>
            <p>Los sapos son de hábitos nocturnos, pero en la estación de cría se muestran activos también de día. Se alimentan de insectos e invertebrados sobre todo caracoles y babosas. Cuando se siente amenazado se levanta sobre sus cuatro patas para aparentar mayor tamaño.</p>
          </div>
        </div>
      </div>';
  
  echo '<div class="animal-info">
    <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/anfibios/sapoCorredor.jpg"
        alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"></div>
    <div class="animal-details">
      <h3 class="titulo_animal"> Sapo Corredor</h3>
      <div class="descripcion_animal">
        <p>Representante típico de la familia de los sapos, puede alcanzar hasta los 9 - 10 cm., normalmente menos, sobre todo los machos, que son siempre más pequeños. El sapo corredor tiene las patas traseras bastante cortas, más que otros sapos, por lo que le resulta muy difícil saltar, sin embargo es un buen trepador, y sobre todo buen corredor.</p>
      </div>
      <div class="localizacion_animal">
        <p class="text_localizacion">Localización</p>
        <div class="tipos_caracteristicas">
        <p>Vive en todo tipo de terrenos, preferentemente campos con suelos arenosos, pero en también lugares montañosos y cerca dela costa, se aproxima a las zonas húmedas para reproducirse.</p>
        </div>
      </div>
      <div class="costumbres">
        <p class="text_costumbres">Costumbres:</p>
        <p>El sapo corredor desarrolla su actividad principalmente en las horas crepusculares y nocturnas, de día se entierra en un hoyo que el mismo excava o permanece escondido debajo de una piedra. Se alimenta de todo tipo de insectos, hormigas, escarabajos, también gusanos y larvas.

En época de cría se acerca a las zonas húmedas, pero cualquier charca le sirve a este sapo para poner sus huevos, hasta 3.000, que son depositados por la hembra ocultos entre la vegetación de las orillas. Los sapos tardan 5 -6 días en nacer, y tras dos meses de metamorfosis salen del agua convertidos en pequeños sapos de tan solo 1,5 cm.</p>
      </div>
    </div>
  </div>';

   echo '<div class="animal-info">
      <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/anfibios/ranaComun.jpg"
          alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"></div>
      <div class="animal-details">
        <h3 class="titulo_animal"> Rana común o verde (Rana ridibunda)</h3>
        <div class="descripcion_animal">
          <p>Como en casi todos los anfibios, las hembras de rana común son de mayor tamaño que los machos, pudiendo alcanzar estas los 14 - 15 cm. La coloración es muy variada, destacan tanto los tonos pardos como los verdes y mezclas de ellos con distintas manchas oscuras.</p>
        </div>
        <div class="localizacion_animal">
          <p class="text_localizacion">Localización</p>
          <div class="tipos_caracteristicas">
          <p>Todo tipo de zonas húmedas, arroyos, charcas, incluso de aguas residuales o contaminadas. Común en toda la Comunidad Valenciana.</p>
          </div>
        </div>
        <div class="costumbres">
          <p class="text_costumbres">Costumbres:</p>
          <p>La rana verde es un anfibio de hábitos principalmente diurnos, no es difícil de sorprender mientras toma el sol al borde de las charcas donde vive.
Se alimenta de todo tipo de insectos, que caza con su lengua viscosa. Una semana después de la puesta de los huevos, nacen los renacuajos que, tras sufrir una metamorfosis, se convierten en ranas. Nos encontramos ante una especie endémica de la Península Ibérica y del sur de Francia que, además, ha sido introducida en los dos archipiélagos de nuestro país: islas Canarias e islas Baleares.

El hábitat de esta especie es sobre cualquier superficie acuática..</p>
        </div>
      </div>
    </div>';

   echo '<div class="animal-info">
      <div class="cont_imgAnimal"><img class="animal-image" src="../img/categoria/anfibios/ranaMeridional.jpg"
          alt="Imagen del animal" class="btn btn-primary" data-toggle="modal" data-target="#myModal3"></div>
      <div class="animal-details">
        <h3 class="titulo_animal">Ranita meridional (Hyla meridionalis)</h3>
        <div class="descripcion_animal">
          <p>La última especie por tratar dentro de los anfibios granadinos es la única que presenta hábitos arborícolas. Se trata de la ranita meridional, un anuro bastante peculiar en comparación con las otras especies con las que convive en la provincia. El rasgo que más llama la atención son sus vivos colores, verde, anaranjado, blanco y negro, y si además se la halla sobre una planta, la sorpresa está servida: inmediatamente nos recordará a las ranas tropicales, con las que posee un gran parentesco. Igualmente, cuando escuchamos su canto sin conocerlo, es muy difícil relacionarla con el mismo, ya que resulta  muy estridente y de gran potencia, sobre todo para un animal tan pequeño. Se la suele confundir con la ranita de San Antón, que es muy parecida, pero que no vive en territorio granadino.</p>
        </div>
        <div class="localizacion_animal">
          <p class="text_localizacion">Localización</p>
          <div class="tipos_caracteristicas">
          <p>En riberas de ríos y llanuras bajas húmedas, y también zonas muy calientes y secas con espacios acuáticos.</p>
          </div>
        </div>
        <div class="costumbres">
          <p class="text_costumbres">Costumbres:</p>
          <p>Los machos se congregan en grupos mas o menos grandes, de un número difícil de precisar, aunque pueden ser docenas, a cantar sin cesar en sus charcos al atardecer y de noche.</p>
        </div>
      </div>
    </div>';
?>
  <?php include "footer.php";?>

  

</body>
</html>
