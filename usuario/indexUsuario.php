<?php

if (strlen(session_id()) < 1)
  session_start();
if ($_SESSION['usuario']) {
  ?>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base");
  $usuario = $_SESSION['usuario'];
  $password = $_SESSION['password'];
  $rol = $_SESSION['rol'];
  $consulta = "SELECT*FROM prueba where usuario='" . $usuario . "' and pass ='" . $password . "'";
  $resultado = mysqli_query($conexion, $consulta);
  $filas = mysqli_num_rows($resultado);
  if ($filas) {
    $row2 = mysqli_fetch_row($resultado);
    $usuario = $row2[0];
    $pass = $row2[1];
    $email = $row2[2];
    $rol = $row2[3];
    $img = $row2[4];

  }
  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../huella.png">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Tipo de letra de Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Mandamos a llamar archivos CSS -->
    <link rel="stylesheet" href="../css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="../css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/vendor/aos.css">
    <link rel="stylesheet" href="../css/vendor/animate.min.css">
    <link rel="stylesheet" href="../css/vendor/bootstrap.css">

    <link rel="stylesheet" href="../css/style.css">
    <!-- El titulo en la parte superior -->
    <title>Inicio</title>
  </head>

  <body>
    <div id="untree_co--overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <nav class="untree_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="untree_co--site-wrap">
      <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
          <div class="logo-wrap">
            <a href="indexUsuario.php" class="untree_co--site-logo">Patitas a la Moda</a>
          </div>
          <div class="site-nav-ul-wrap text-center d-none d-lg-block">
            <ul class="site-nav-ul js-clone-nav">
              <li class="active"><a href="indexUsuario.php">Inicio</a></li>
              <!--<li><a href="#">Donaciones</a></li>-->
              <li class="has-children">
                <a href="adopcionesU.php">Adoptar</a>
                <ul class="dropdown">
                  <li><a href="adopcionesPerrosU.php">Perros</a></li>
                  <li><a href="adopcionesGatosU.php">Gatos</a></li>
                  <li><a href="adopcionesOtrosU.php">Otros</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="quienesSomosU.php">Quienes somos</a>
                <ul class="dropdown">
                  <li><a href="preguntasFrecuentesU.php">Preguntas frecuentes</a></li>
                  <li><a href="donacionesU.php">Donaciones</a></li>
                </ul>
              </li>

              <li class="has-children">

                <a href="perfil.php"><img src="data:image/jpg;base64,<?php echo "" . base64_encode($img) ?>"
                    class="rounded-circle z-depth-0" height="35" /> &nbsp;&nbsp;<?php echo $usuario, " " ?></a>
                <ul class="dropdown">
                  <li><a href="perfil.php"><i class="fas fa-user" aria-hidden="true"></i>&nbsp;Perfil</a></li>
                  <li><a href="notificacionesU.php"><i class="far fa-check-square	"
                        aria-hidden="true"></i>&nbsp;Notificaciones</a></li>
                  <hr>
                  <li><a href="logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>&nbsp;Cerrar sesion </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="icons-wrap text-md-right">

            <ul class="icons-top d-none d-lg-block">
              <li><a href="https://www.facebook.com/PatitasALaModa/?locale=es_LA"><span class="icon-facebook"></span></a>
              </li>
              <li><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
              <li><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
            </ul>
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav>

      <div class="untree_co--site-main">
        <div class="owl-carousel owl-hero">
          <div class="untree_co--site-hero overlay" style="background-image: url('../images/cuatro.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                    <h1 class="hero-heading">Patitas a la moda</h1>
                    <div class="sub-text">
                      <p>Un hogar para cada patita ¡Adopta y cambia una vida!</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="untree_co--site-hero overlay" style="background-image: url('../images/dos.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                    <h1 class="hero-heading">El amor verdadero tiene cuatro patas</h1>
                    <div class="sub-text">
                      <p>No compres, mejor adopta</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="untree_co--site-hero overlay" style="background-image: url('../images/tres.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                    <h1 class="hero-heading">No puedes comprar la felicidad pero puedes adoptar a un animalito</h1>
                    <div class="sub-text">
                      <p>Y eso, es casi lo mismo</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-section">
          <div class="container">
            <div class="container pt-0 pb-5">
              <div class="row justify-content-center text-center">
                <div class="col-lg-6 section-heading" data-aos="fade-up">
                  <h3 class="text-center">¿Qué puedo hacer?</h3>
                </div>
              </div>
            </div>
            <div class="row custom-row-02192 align-items-stretch">
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="../images/icon/gato.png" alt="Image" class="img-fluid">
                  </div>
                  <h3>¡Adopta un animalito!</h3>
                  <p>La adopción es una alternativa que a la hora de adquirir un animal de compañía beneficia a todos: a
                    la familia,
                    al refugio y, por supuesto, al propio perro o gato.</p>
                  <p>
                  <p><a href="adopcionesU.php" class="readmore reverse">QUIERO ADOPTAR</a></p>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="../images/icon/corazon.png" alt="Image" class="img-fluid">
                  </div>
                  <h3>Dona para que el refugio se mantenga</h3>
                  <p>Donar es otra forma de ayudar, con esto los refugios obtienen una ayuda extra con los recursos que
                    necesitan, para ofrecerle a los animalitos que albergan, los cuidados que requieren..</p>
                  <p>
                  <p><a href="donacionesU.php" class="readmore reverse">QUIERO DONAR</a></p>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="../images/icon/pregunta.png" alt="Image" class="img-fluid">
                  </div>
                  <h3>Tengo dudas del proceso</h3>
                  <p>Si tienes cualquier duda sobre como realizar el proceso de adoptar a algun animalito, aqui puedes
                    encontrar tutoriales y explicaciones detalladas
                    sobre como realizar cada paso y como contactarnos. </p>
                  <p>
                  <p><a href="preguntasFrecuentesU.php" class="readmore reverse">TENGO DUDAS</a></p>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="../images/icon/excelencia.png" alt="Image" class="img-fluid">
                  </div>
                  <h3>Quiero conocer más sobre esta veterinaria </h3>
                  <p>Para saber más sobre la labor que hace esta veterianaria sigue leyendo ... </p>
                  <p>
                  <p><a href="quienesSomosU.php" class="readmore reverse">CONOCER MÁS</a></p>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="../images/icon/conversacion.png" alt="Image" class="img-fluid">
                  </div>
                  <h3>Preguntas frecuentes</h3>
                  <p>Si tienes dudas sobre el sitio web, su funcionamiento o sobre las adopciones, aqui puedes encontrar
                    preguntas.</p>
                  <p>
                  <p><a href="preguntasFrecuentesU.php" class="readmore reverse">CONOCER MÁS</a></p>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="../images/icon/contacto.png" alt="Image" class="img-fluid">
                  </div>
                  <h3>Donde nos ubicamos</h3>
                  <p>Si quieres visitarnos, aqui puedes encontrar nuestra ubicación</p>
                  <p>
                  <p><a href="quienesSomosU.html" class="readmore reverse">QUIERO SABER</a></p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-section">
          <div class="container">
            <div class="row">
              <div class="col-md-4 section-heading" data-aos="fade-up">
                <h3 class="text-left">¡Adopta!</h3>
                <div class="w-75">
                  <p>Adoptarlos significa darle una segunda oportunidad a un animal que ha sufrido un proceso de abandono,
                    y en ocasiones maltrato. Acogerlo en tu casa de por vida y darle la estabilidad, los cuidados y el
                    cariño que necesita es escencial.</p>
                </div>
                <p><a href="adopcionesU.php" class="readmore">QUIERO ADOPTAR</a></p>
              </div>
              <div class="col-md-4">
                <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                  <a href="#" class="thumb"><img src="../images/gato_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-entry-contents">
                    <h3><a href="adopcionesU.php">Salem</a></h3>
                    <p>Vacunada, desparasitada, esterilizada (Entrego carnet). Sabe usar arenero.
                      Es muy cariñosa, dormilona.</p>
                    <p><a href="adopcionesGatosU.php" class="readmore">Ver más</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
                  <a href="#" class="thumb"><img src="../images/perro_1.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-entry-contents">
                    <h3><a href="adopcionesU.php">Thanos</a></h3>
                    <p>Macho. Talla chica. Aproximadamente 1 año. Super dócil. Castrado. Desparasitado. Vacunado. Super
                      guapo.</p>
                    <p><a href="adopcionesPerrosU.php" class="readmore">ver más</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-section float-left pb-0 featured-rooms">
          <div class="container pt-0 pb-5">
            <div class="row justify-content-center text-center">
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Sobre nosotros</h3>
              </div>
            </div>
          </div>

          <div class="container-fluid pt-5">
            <div class="suite-wrap overlap-image-1">
              <div class="suite">
                <div class="image-stack">
                  <div class="image-stack-item image-stack-item-top" data-jarallax-element="-50">
                    <div class="overlay"></div>
                    <img src="../images/uno.jpg" alt="Image" class="img-fluid pic1">
                  </div>
                  <div class="image-stack-item image-stack-item-bottom">
                    <div class="overlay"></div>
                    <img src="../images/ocho.jpg" alt="Image" class="img-fluid pic2">
                  </div>
                </div>
              </div>

              <div class="suite-contents" data-jarallax-element="50">
                <h2 class="suite-title">Adopta y salva una vida</h2>
                <div class="suite-excerpt">
                  <p>Afortunadamente, cada día cobra más importancia la adopción animal responsable, esto hace que sean
                    cada vez más las personas que piensen primeramente en la adopción animal como primera opción cuando
                    buscan tener
                    una nueva mascota en casa; esto es muy bueno, porque al adoptar activamente se contribuye a disminuir
                    la gran
                    problemática que viven los perros en situación de calle y también se ayuda a que los refugios como
                    "Patitas a la
                    Moda". Pero, hay que saber que todavía no es suficiente la ayuda que reciben los Refugios o las
                    adopciones que se logran en el
                    día a día; en la actualidad todavía falta mucho más para ayudar a los perros que viven en situación de
                    calle.</p>
                  <p><a href="quienesSomosU.php" class="readmore">Ver más</a></p>
                </div>
              </div>
            </div>

            <div class="suite-wrap overlap-image-2">
              <div class="suite">
                <div class="image-stack">
                  <div class="image-stack-item image-stack-item-top">
                    <div class="overlay"></div>
                    <img src="../images/dog_2.jpg" alt="Image" class="img-fluid pic1">
                  </div>
                  <div class="image-stack-item image-stack-item-bottom" data-jarallax-element="-50">
                    <div class="overlay"></div>
                    <img src="../images/dog_1.jpg" alt="Image" class="img-fluid pic2">
                  </div>
                </div>
              </div>

              <div class="suite-contents" data-jarallax-element="50">
                <h2 class="suite-title">¿Cómo puedo ayudar?</h2>
                <div class="suite-excerpt pr-5">
                  <p>A lo largo de la existencia de este refugio han existido muchos casos de exito, en donde una persona
                    le ha podido dar una segunda oportunidad al animalito que adopto, sin embargo tambien puedes ayudarnos
                    donando. </p>
                  <p><a href="donacionesU.php" class="readmore">CONOCER MÁS</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-section py-5 bg-body-darker cta">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3 class="m-0 p-0">Duele ver a ángeles siendo ignorados y sufriendo <a href="adopcionesU.php">ADOPTA -
                    AYUDA</a></h3>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div>
        <footer class="untree_co--site-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-4 pr-md-5">
                <h3>Patitas a la Moda</h3>
                <p>Es un refugio que sirve como espacio de acogida a animales sin hogar, perdidos o abandonados,
                  en su mayoría, perros y gatos. Sin embargo, se encuentran también otros tipos de animales.</p>
                <p><a href="quienesSomosU.php" class="readmore">QUIERO SABER MÁS</a></p>
              </div>
              <div class="col-md-8 ml-auto">
                <div class="row">
                  <div class="col-md-3">
                    <h3>Menu</h3>
                    <ul class="list-unstyled">
                      <li><a href="indexUsuario.php">Inicio</a></li>
                      <li><a href="donacionesU.php">Donaciones</a></li>
                      <li><a href="adopcionesU.php">Adoptar</a></li>
                      <li><a href="quienesSomosU.php">Quienes somos</a></li>
                    </ul>
                  </div>
                  <div class="col-md-9 ml-auto">
                    <div class="row mb-3">
                      <div class="col-md-6">
                        <h3>Domicilio</h3>
                        <address>62883 colonia, calle y # <br> Tlatizapan, Morelos</address>
                      </div>
                      <div class="col-md-6">
                        <h3>Celular</h3>
                        <p><a href="#">734 128 3749</a> <br> <a href="#">734 150 6275</a> </p>
                      </div>
                    </div>
                    <h3 class="mb-0">Información de contacto</h3>
                    <p>Correo electronico : patitasModa@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-5 pt-5 align-items-center">
              <div class="col-md-6 text-md-left">
                <p> Patitas a la moda (dispensario, pension y estetica para todo tipo de mascotas.) </p>
              </div>
              <div class="col-md-6 text-md-right">
                <ul class="icons-top icons-dark">
                  <li><a href="https://www.facebook.com/PatitasALaModa/?locale=es_LA"><span
                        class="icon-facebook"></span></a></li>
                  <li><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                  <li><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>

          </div>
        </footer>
      </div>
    </div>

    <script src="../js/vendor/jquery-3.3.1.min.js"></script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/vendor/owl.carousel.min.js"></script>
    <script src="../js/vendor/jarallax.min.js"></script>
    <script src="../js/vendor/jarallax-element.min.js"></script>
    <script sr c="../js/vendor/ofi.min.js"></script>
    <script src="../js/vendor/aos.js"></script>
    <script src="../js/vendor/jquery.lettering.js"></script>
    <script src="../js/vendor/jquery.sticky.js"></script>
    <script src="../js/vendor/TweenMax.min.js"></script>
    <script src="../js/vendor/ScrollMagic.min.js"></script>
    <script src="../js/vendor/scrollmagic.animation.gsap.min.js"></script>
    <script src="../js/vendor/debug.addIndicators.min.js"></script>
    <script src="../js/main.js"></script>

  </body>

  </html>

  <?php

} else {
  header('location: errorSesion.html');

}

?>