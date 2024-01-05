<html>
  <head>
    <title>Zoológico SEM</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--slider-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  </head>
  <body>
    <nav class="navNuevo">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i>&#9776;</i>
      </label>
      <ul>
        <li><a class="activate " href="#">Inicio</a></li>
        <li><a href="php/horarios.php">Horario</a></li>
        <li><a href="php/eventos.php">Eventos</a></li>
        <li><a href="php/actividades.php">Educación</a></li>
        <li><a href="php/anfibios.php">Anfibios</a></li>
        <li><a href="php/reptiles.php">Reptiles</a></li>
        <li><a href="php/mamiferos.php">Mamíferos</a></li>
        <li><a href="php/aves.php">Aves</a></li>
      </ul>
    </nav>
    <nav class="navPr">
      <div class="logo">
        <img src="img/logo.png" alt="Nombre del Logo">
      </div>
        <div class="menu"><a href="index.php" class="menup ">Inicio</a></div>
        <div class="menu"><a href="#sliderCategoria" class="menup ">Categorias</a>
            <ul class="submenu">
                <li class="submenup"><a href="php/anfibios.php">Anfibios</a></li>
                <li class="submenup"><a href="php/aves.php">Aves</a></li>
                <li class="submenup" ><a href="php/mamiferos.php">Mamíferos</a></li>
              <li class="submenup" ><a href="php/reptiles.php">Reptiles</a></li>
            </ul>

        </div>
        <div class="menu"><a href="php/horarios.php" class="menup " >Horarios</a></div>
        <div class="menu"><a href="php/eventos.php" class="menup ">Evento</a></div>
        <div class="menu"><a href="php/actividades.php" class="menup ">Educación</a></div>
    </nav>
    <div id="carouselExampleSlidesOnly " class="carousel slide portadaPri" data-bs-ride="carousel">
      <div class="carousel-inner portada-zoo">
        <div class="carousel-item active">
          <img src="./img/zoo-portada1.png" class="d-block w-100" alt="Zoo">
        </div>
        <div class="carousel-item">
          <img src="./img/zoo-portada2.jpg" class="d-block w-100" alt="Leon">
        </div>
        <div class="carousel-item">
          <img src="./img/zoo-portada3.jpeg" class="d-block w-100" alt="Oso">
        </div>
      </div>
    </div>
    <!--Informacion-->
     <div class="contenedor-informacion">
            <div class="">
                <p>En Zoologico, la experiencia va más allá de simplemente observar animales; es un viaje a través del tiempo y la imaginación. Cada sección temática es un portal que transporta a los visitantes a épocas remotas y futuros imaginarios, creando una conexión única entre el pasado, el presente y el futuro de la vida animal.
    En Zoologico, cada sección no solo presenta una exhibición de animales, sino que también crea una narrativa envolvente que educa y entretiene. Esta experiencia única brinda a los visitantes la oportunidad de explorar la rica historia y el potencial futuro de la vida animal en un entorno cautivador y emocionante. Zoologico se convierte así en un destino donde la maravilla y la imaginación se entrelazan con la ciencia y la educación
    </p>
            </div>
            <div class="">
                <img src="./img/img1.jpg" alt="">
            </div>
        </div>


    
    <!--Slider--->
    <div class="swiper mySwiper" align="center" id="sliderCategoria">
      <div class="swiper-wrapper">
        <a href="php/aves.php" class="swiper-slide">
          <h3 align="center">Aves</h3>
          <img src="img/categoria/aves/colibri1.jpg" />
        </a>
        <a href="php/reptiles.php" class="swiper-slide">
          <h3 align="center">Reptiles</h3>
          <img src="img/categoria/reptiles/iguana.jpg" />
        </a>
        <a href="php/mamiferos.php" class="swiper-slide">
          <h3 align="center">Mamíferos</h3>
          <img src="img/categoria/mamifero/oso1.jpg" />
        </a>
        <a href="php/anfibios.php" class="swiper-slide">
          <h3 align="center">Anfibios</h3>
          <img src="img/categoria/anfibios/ranaMeridional.jpg" />
        </a>
      </div>
    </div>
    <footer class="page-footer red darken-4">
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
              <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/QuitoZoo/?">Facebook</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container ">
          <p class="center">@Zoologico-Morales-Ramirez-Pozo</p>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/slider.js"></script>
  </body>
</html>