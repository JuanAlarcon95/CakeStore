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
    <link rel="shortcut icon" href="huella.png">

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

    <title>Preguntas frecuentes</title>
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
              <li class="has-children active">
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


        <div class="untree_co--site-hero inner-page bg-primary" style="background-color: #fff;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="site-hero-contents" data-aos="fade-up">
                  <h1 class="hero-heading">Preguntas frecuentes</h1>
                  <div class="sub-text w-75">
                    <p>Si tienes dudas sobre el sitio web, su funcionamiento o sobre las adopciones, aqui puedes encontrar
                      preguntas.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="untree_co--site-section">

          <div class="container px-md-0">

            <div class="row justify-content-center text-center pt-0 pb-5">
              <div class="col-lg-8 section-heading" data-aos="fade-up">
                <h3 class="text-center">Preguntas que quizas te hagas</h3>
              </div>
            </div>

            <div class="row no-gutters">
              <div class="col-md-12 ml-5 mr-5" data-aos="fade-up">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse"
                          data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <h4>Pregunta #1: ¿Cómo puedo adoptar una mascota a través de esta página web?
                          </h4>
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                      data-parent="#accordionExample">
                      <div class="card-body">
                        <ul>
                          <li>Primero, debes registrarte en nuestro sitio web para poder acceder a las listas de mascotas
                            disponibles para adopción. </li>
                          <li>Luego, puedes navegar por el catalogo de fotos donde podras ver descripciones de las
                            mascotas disponibles para encontrar la que más te guste. </li>
                          <li>Si encuentras una mascota que te interesa, clickear en el boton que aparece en la parte
                            inferior de la foto para adoptar. </li>
                          <li>El centro de adopción asociado se pondra en contacto contigo a través de e-mail para
                            brindarte más información sobre el proceso de adopción.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark collapsed" type="button"
                          data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                          aria-controls="collapseTwo">
                          <h4>Pregunta #2: ¿Cómo puedo realizar una donación al centro de adopción asociado a la página
                            web?</h4>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>R: En nuestra página web, encontrarás un apartado de donación en la sección de "Quienes Somos".
                          Al hacer clic en el botón, serás dirigido a la página de donaciones (Paypal,Ko-fi, Patreon,
                          etc.), donde podrás elegir la cantidad
                          que deseas donar y proporcionar los detalles necesarios para realizar la transacción. Así como
                          tambien contar con la direccion del establecimiento asociado
                          por si se desea ayudar de forma presencial.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark collapsed" type="button"
                          data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                          aria-controls="collapseThree">
                          <h4>Pregunta #3: ¿Cómo puedo asegurarme de que estoy adoptando una mascota saludable?</h4>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                      data-parent="#accordionExample">
                      <div class="card-body">
                        <p>R: El centro de adopción asociado se asegura de que todas las mascotas estén en buenas
                          condiciones
                          de salud antes de ponerlas en adopción. Además, siempre es recomendable llevar a la mascota a
                          una
                          revisión veterinaria después de la adopción para asegurarse de que está en buen estado de salud.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark collapsed" type="button"
                          data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                          aria-controls="collapseFour">
                          <h4>Pregunta #4: ¿Puedo adoptar una mascota si no tengo experiencia previa en cuidado de
                            animales?
                          </h4>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>R: Sí, siempre y cuando estés dispuesto a aprender y comprometerte a cuidar
                          adecuadamente a la mascota. El centro de adopción asociado también puede
                          proporcionar recursos y consejos para ayudarte a cuidar a tu nueva mascota.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark collapsed" type="button"
                          data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                          aria-controls="collapseFour">
                          <h4>Pregunta #5: ¿Cómo puedo asegurarme de que la mascota se adapte bien a mi hogar y estilo de
                            vida?
                          </h4>
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <p>R: Es importante investigar y aprender sobre la raza o tipo de mascota que deseas adoptar para
                          asegurarte de que se adapte bien a tu hogar y estilo de vida. También puedes hablar con el
                          centro
                          de adopción asociado sobre la personalidad y los requisitos de cuidado de la mascota para
                          determinar
                          si es adecuada para ti.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="untree_co--site-section py-5 bg-body-darker cta">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3 class="m-0 p-0">Para que comprar si hay tantos que necesitan un hogar <a href="adopcionesU.php">
                    ADOPTA - AYUDA</a>
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