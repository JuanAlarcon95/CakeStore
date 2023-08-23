<?php

if (strlen(session_id()) < 1)
    session_start();
if ($_SESSION['usuario']) { ?>

    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base");

    $consulta = "SELECT * from otro ";
    $all_product = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($all_product);
    $id = '';
    $nombre = '';
    $raza = '';
    $sexo = '';
    $tam = '';
    $edad = '';
    $datos = '';
    $img = '';
    $tipo = '';

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
        <link rel="stylesheet" href="../sty.css">
        <title>Editar usuarios</title>
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
                            <li class="has-children">
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
                            <li class="has-children active">
                                <a href="perfil.php"><img src="data:image/jpg;base64,<?php echo "" . base64_encode($img) ?>"
                                        class="rounded-circle z-depth-0" height="35" />&nbsp;&nbsp;<?php echo $usuario ?></a>
                                <ul class="dropdown">
                                    <li><a href="perfil.php"><i class="fas fa-id-card"
                                                aria-hidden="true"></i>&nbsp;Perfil</a></li>
                                    <li><a href="menuM.php"><i class="fas fa-cat" aria-hidden="true"></i>&nbsp;Menu de
                                            mascotas</a></li>
                                    <li><a href="menuN.php"><i class="fas fa-check-circle" aria-hidden="true"></i>&nbsp;Menu
                                            de
                                            formularios enviados</a></li>
                                    <li><a href="menuU.php"><i class="fas fa-child" aria-hidden="true"></i>&nbsp;Menu de
                                            usuarios</a></li>
                                    <li><a href="Form.php"><i class="fas fa-circle-notch"
                                                aria-hidden="true"></i>&nbsp;Estado de
                                            notificaciones</a></li>
                                    <hr>
                                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"
                                                aria-hidden="true"></i>&nbsp;Cerrar sesion</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="icons-wrap text-md-right">

                        <ul class="icons-top d-none d-lg-block">
                            <li><a href="https://www.facebook.com/PatitasALaModa/?locale=es_LA"><span
                                        class="icon-facebook"></span></a>
                            </li>
                            <li><a href="https://twitter.com/"><span class="icon-twitter"></span></a></li>
                            <li><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse"
                            data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </nav>

            <div class="jumbotron jumbotron-fluid bg-image"
                style="background-image: url('../images/pexels-urtimud-10182295.jpg'); height: 30vh;">
                <div class="container">
                    <br><br>
                </div>
            </div>


            <div class="container">
                <div class="row justify-content-center text-center pt-5 pb-5">
                    <div class="col-lg-8 section-heading" data-aos="fade-up">
                        <h3 class="text-center">Editar datos de los usuarios</h3>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_POST['editar'])) {
                $usuarioU2 = $_POST['usuarioU2'];
                $emailU2 = $_POST['emailU2'];
                $selet = "SELECT * from prueba where usuario='" . $usuarioU2 . "' and email='" . $emailU2 . "'";

                $result = mysqli_query($conexion, $selet);
                $fil = mysqli_num_rows($result);
                if ($fil) {
                    $rw = mysqli_fetch_row($result);
                    $usuarioU2 = $rw[0];
                    $passU2 = $rw[1];
                    $emailU2 = $rw[2];
                    $imgU2 = $rw[4];
                }

            }
            ?>

            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mx-auto my-auto">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Campos</th>
                                        <th>Datos de los usuarios </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="editarU.php" method="post" enctype="multipart/form-data">
                                        <tr>
                                            <th scope="row">Usuario</th>
                                            <td><input type="text" class="form-control" name="usuarioU" id="usuarioU"
                                                    value="<?php echo $usuarioU2; ?>" readonly /> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Password</th>
                                            <td><input type="text" class="form-control" name="passU" id="passU"
                                                    value="<?php echo $passU2; ?>" /></td>
                                        </tr>


                                        <tr>
                                            <th scope="row">Email</th>
                                            <td><input type="text" name="emailU" id="emailU" class="form-control"
                                                    value="<?php echo $emailU2; ?>" /></td>
                                        </tr>

                                        <tr>
                                            <th>Imagen de perfil</th>
                                            <td>
                                                <img src="data:image/jpg;base64,<?php echo "" . base64_encode($imgU2) ?>"
                                                    height="330" /> <br><br>&nbsp;<br>
                                                <div class="form-group">
                                                    <input type="file" name="foto" id="foto">
                                                </div>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr class="text-center">
                                            <th scope="row" colspan="1"><input type="submit" value="    Editar    "
                                                    name="editar" id="editar" class="btn btn-secondary" /></th>

                                    </form>
                                    <th scope="row" colspan="2"><a href="menuU.php"><input type="button"
                                                value="    Regresar    " name="regresar" class="btn btn-success" /></a></th>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div>
                            <img src="../images/icon/mascotas.png" width="300" height="270">
                        </div>
                    </div>
                </div>

            </main>

            <br>&nbsp;
            <br>&nbsp;
            <br>&nbsp;
            <div class="untree_co--site-section py-5 bg-body-darker cta">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3 class="m-0 p-0">Donando también puedes <a href="donacionesA.php"> AYUDAR</a></h3>
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
                                en su mayoría, perros y gatos. Sin embargo, se encuentran también otros tipos de animales.
                            </p>
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