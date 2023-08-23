<?php

if (strlen(session_id()) < 1)
  session_start();
if ($_SESSION['usuario']) { ?>

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
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="../huella.png">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link
      href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap"
      rel="stylesheet">

    <link rel="stylesheet" href="../css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="../css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/vendor/aos.css">
    <link rel="stylesheet" href="../css/vendor/animate.min.css">
    <link rel="stylesheet" href="../css/vendor/bootstrap.css">
    <link rel="stylesheet" href="../css/vendor/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/style.css">

    <title>Quienes somos</title>
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
              <li><a href="indexUsuario.php">Inicio</a></li>
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
                  <li><a href="perfil.php"><i class="fas fa-user" aria-hidden="true"></i>&nbsp;Perfil</a>
                  </li>
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

      <main class="untree_co--site-main">


        <div class="untree_co--site-hero inner-page bg-info" style="background-color: #fff;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-8">
                <div class="site-hero-contents" data-aos="fade-up">
                  <h1 class="hero-heading">¿Quiénes somos?</h1>
                  <div class="sub-text w-75">
                    <p>Patitas a la moda es unu dispensario, pension y estetica para todo tipo de mascotas. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-section">

          <div class="container-fluid px-md-0">

            <div class="row justify-content-center text-center pt-0 pb-5">
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Un poco sobre nosotros</h3>
              </div>
            </div>

            <div class="row no-gutters">
              <div class="col-md-4" data-aos="fade-up">
                <img src="../images/cinco.jpg" alt="Image" class="img-fluid" data-jarallax-element="-140">
              </div>
              <div class="col-md-8">
                <div class="row justify-content-center">
                  <div class="col-md-10">
                    <div class="row">
                      <div class="col-md-6" data-aos="fade-up">
                        <h3 class="mb-4">Nuestra visión</h3>
                        <p class="justificado">En Patitas a la moda, nuestra visión es crear un mundo donde cada animal de
                          la calle pueda encontrar un hogar amoroso y seguro, y donde la comunidad tenga conciencia de la
                          importancia de la adopción de mascotas y la esterilización para controlar la población de fauna
                          feral. Buscamos ser reconocidos como una organización confiable y dedicada a la protección y
                          bienestar de los animales.
                        </p>
                      </div>
                      <div class="col-md-6" data-aos="fade-up">
                        <h3 class="mb-4">Nuestra misión</h3>
                        <p class="justificado">Nuestra misión es rescatar, esterilizar y poner en adopción a perros de la
                          calle, para brindarles la oportunidad de tener una vida digna y feliz en un hogar amoroso. Nos
                          comprometemos a educar a la comunidad sobre la importancia de la adopción responsable, la
                          esterilización y los cuidados necesarios para el bienestar animal. Queremos ser una organización
                          que se preocupa por el bienestar de los animales y que ayuda a crear un mundo donde todos los
                          seres vivos sean tratados con respeto y amor.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

    </div>

    <div class="untree_co--site-section pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <div class="row justify-content-center text-center">
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Nos ubicamos en ...</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <iframe alt="Image"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.2424279283346!2d-99.182767!3d18.653114199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce7f67663d62d7%3A0xfb58e41639257960!2sTecnol%C3%B3gico%2027%2C%20Plan%20de%20Ayala%2C%2062780%20Zacatepec%20de%20Hidalgo%2C%20Mor.!5e0!3m2!1ses-419!2smx!4v1678944004551!5m2!1ses-419!2smx"
              width="1100" height="400" style="border:0;" class="img-fluid"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="untree_co--site-section py-5 bg-body-darker cta">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h3 class="m-0 p-0">Para que comprar si hay tantos que necesitan un hogar <a href="adopcionesU.php"> ADOPTA -
                AYUDA</a>
            </h3>
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
              <ul class="icons-top d-none d-lg-block">
                <li><a href="https://www.facebook.com/PatitasALaModa/?locale=es_LA"><span
                      class="icon-facebook"></span></a>
                </li>
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
    <script src="../js/vendor/ofi.min.js"></script>

    <script src="../js/vendor/aos.js"></script>

    <script src="../js/vendor/jquery.lettering.js"></script>
    <script src="../js/vendor/jquery.sticky.js"></script>

    <script src="../js/vendor/jquery.fancybox.min.js"></script>

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