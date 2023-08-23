<?php

if (strlen(session_id()) < 1)
  session_start();
if ($_SESSION['usuario']) { ?>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base");

  $usuario = $_SESSION['usuario'];
  $password = $_SESSION['password'];
  $rol = $_SESSION['rol'];
  $consulta2 = "SELECT*FROM prueba where usuario='" . $usuario . "' and pass ='" . $password . "'";
  $resultado2 = mysqli_query($conexion, $consulta2);
  $filas2 = mysqli_num_rows($resultado2);
  if ($filas2) {
    $row2 = mysqli_fetch_row($resultado2);
    $usuario = $row2[0];
    $pass = $row2[1];
    $email = $row2[2];
    $rol = $row2[3];
    $img3 = $row2[4];
  }


  if (isset($_POST['Adoptar'])) {
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];

    $consulta = "SELECT*FROM otro where nombre='" . $nombre . "' and raza ='" . $raza . "'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);
    if ($filas) {
      $row = mysqli_fetch_row($resultado);
      $sexo = $row[3];
      $tam = $row[4];
      $edad = $row[5];
      $datos = $row[6];
      $img = $row[7];
      $img2 = $row[9];
    }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Formulario de adopcion</title>
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
            <a href="indexAdministrador.php" class="untree_co--site-logo">Patitas a la Moda</a>
          </div>
          <div class="site-nav-ul-wrap text-center d-none d-lg-block">
            <ul class="site-nav-ul js-clone-nav">
              <li><a href="indexAdministrador.php">Inicio</a></li>
              <!--<li><a href="#">Donaciones</a></li>-->
              <li class="has-children active">
                <a href="adopcionesA.php">Adoptar</a>
                <ul class="dropdown">
                  <li><a href="AdopcionesPerrosA.php">Perros</a></li>
                  <li><a href="AdopcionesGatosA.php">Gatos</a></li>
                  <li><a href="AdopcionesOtrosA.php">Otros</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="quienesSomosA.php">Quienes somos</a>
                <ul class="dropdown">
                  <li><a href="preguntasFrecuentesA.php">Preguntas frecuentes</a></li>
                  <li><a href="donacionesA.php">Donaciones</a></li>
                  <!--<li><a href="#">Historias de exito</a></li>-->
                </ul>
              </li>

              <li class="has-children">
                <a href="perfil.php"><img src="data:image/jpg;base64,<?php echo "" . base64_encode($img3) ?>"
                    class="rounded-circle z-depth-0" height="35" />&nbsp;&nbsp;<?php echo $usuario ?></a>
                <ul class="dropdown">
                  <li><a href="perfil.php"><i class="fas fa-id-card" aria-hidden="true"></i>&nbsp;Perfil</a></li>
                  <li><a href="menuM.php"><i class="fas fa-cat" aria-hidden="true"></i>&nbsp;Menu de
                      mascotas</a></li>
                  <li><a href="menuN.php"><i class="fas fa-check-circle" aria-hidden="true"></i>&nbsp;Menu
                      de
                      formularios enviados</a></li>
                  <li><a href="menuU.php"><i class="fas fa-child" aria-hidden="true"></i>&nbsp;Menu de
                      usuarios</a></li>
                  <li><a href="Form.php"><i class="fas fa-circle-notch" aria-hidden="true"></i>&nbsp;Estado de
                      notificaciones</a></li>
                  <hr>
                  <li><a href="logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i>&nbsp;Cerrar sesion</a>
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


        <div class="untree_co--site-hero inner-page bg-dark" style="background-color: #fff;"><br><br><br>
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-11">
                <div class="card card0 rounded-0">
                  <div class="row">
                    <div class="col-md-5 d-md-block d-none p-0 box">
                      <div class="card rounded-0 border-0 card1 bg-dark" id="bill">
                        <h3 id="heading1" class="text-center">¡Has escogido darle un hogar a <b>
                            <?php echo $nombre ?>
                          </b>! </h3>
                        <div class="row">
                          <div class="col-lg-9 col-12 mt-4 ">
                            <img class="card-img-top" src="data:image/jpg;base64,<?php echo "" . base64_encode($img) ?>"
                              alt="Animales" style="height: 210px; width:310px ; margin-bottom: 10px;">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 bg-secondary">
                            &nbsp
                            <p class="bill-date ml-4" id="total-label">DESCRIPCIÓN</p>&nbsp
                            <p class="bill-date col-11 ml-4" style="text-align: justify;" id="total-label">
                              <?php echo $datos ?>
                            </p><br>
                            <small class="bill-date ml-4" id="total-label">RAZA :
                              <?php echo $raza ?>
                            </small><br>
                            <small class="bill-date ml-4" id="total-label">SEXO :
                              <?php echo $sexo ?>
                            </small><br>
                            <small class="bill-date ml-4" id="total-label">EDAD :
                              <?php echo $edad ?> AÑOS
                            </small><br>
                            <small class="bill-date ml-4" id="total-label">TAMAÑO :
                              <?php echo $tam ?>
                            </small><br>&nbsp<br>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-7 col-sm-12 p-0 box">
                      <div class="card rounded-0 border-0 card2" id="paypage">
                        <form method="post" action="insertarAdopciones.php">
                          <div class="form-card">
                            <h2 id="heading2" class="text-danger">Formulario de adopción</h2>
                            <label class="pay">Nombre completo</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Juan Flores">
                            <div class="row">
                              <div class="col-8 col-md-6">
                                <label class="pay">Telefono</label>
                                <input type="text" name="telefono" id="telefono" placeholder="000-000-0000">
                              </div>
                              <div class="col-4 col-md-6">
                                <label class="pay">Fecha de nacimiento </label>
                                <input type="date" name="fechaN" id="fechaN" placeholder="&#9679;&#9679;&#9679;"
                                  class="placeicon">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <label class="pay">Domicilio </label>
                              </div>
                              <div class="col-md-12">
                                <input type="text" name="domicilio" id="domicilio" placeholder="Mexico, Morelos, Jojutla">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <label class="pay">¿A quien quieres adoptar? </label>
                              </div>
                              <div class="col-md-12">
                                <input type="text" name="adopcions" id="adopcions"
                                  value="<?php echo $nombre ?> - <?php echo $raza ?>" readonly>
                                <input type="hidden" name="adopcion" id="adopcion"
                                  value="<?php echo $nombre ?> - <?php echo $raza ?>">
                                  <input type="hidden" name="nom" id="nom" value="<?php echo $nombre ?>">
                                  <input type="hidden" name="raza" id="raza" value="<?php echo $raza ?>">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <input type="submit" value="ENVIAR FORMULARIO DE ADOPCIÓN &nbsp;"
                                  class="btn btn-info placeicon">
                              </div>
                            </div>
                        </form>
                      </div>
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
            <h3 class="m-0 p-0">Para que comprar si hay tantos que necesitan un hogar <a href="adopcionesA.php"> ADOPTA -
                AYUDA</a>
            </h3>
          </div>
        </div>
      </div>
    </div>

    </div>

    <div style="background-color: #fff;">
      <footer class="untree_co--site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 pr-md-5">
              <h3>Patitas a la Moda</h3>
              <p>Es un refugio que sirve como espacio de acogida a animales sin hogar, perdidos o abandonados,
                en su mayoría, perros y gatos. Sin embargo, se encuentran también otros tipos de animales.</p>
              <p><a href="quienesSomosA.php" class="readmore">QUIERO SABER MÁS</a></p>
            </div>
            <div class="col-md-8 ml-auto">
              <div class="row">
                <div class="col-md-3">
                  <h3>Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="indexAdministrador.php">Inicio</a></li>
                    <li><a href="donacionesA.php">Donaciones</a></li>
                    <li><a href="adopcionesA.php">Adoptar</a></li>
                    <li><a href="quienesSomosA.php">Quienes somos</a></li>
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