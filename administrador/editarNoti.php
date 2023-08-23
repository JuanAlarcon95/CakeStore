<?php
$conn = mysqli_connect("localhost", "root", "", "base");

if (isset($_POST['aceptar'])) {
    // Recuperación de datos del formulario
    $usuarios = $_POST['usuarios'];
    $adopciones = $_POST['adopciones'];
    $nom = $_POST['nom'];
    $raza = $_POST['raza'];

    $color = 'alert-success';
    $notificacion = 'Su solitud ha sido aprovada';
    $men1 = 'Usted ha adoptado a un angelito';

    $delete = 'DELETE FROM otro WHERE nombre="'.$nom.'" and raza="'.$raza.'" ';
    $resultado3 = mysqli_query($conn, $delete);

    if ($resultado3 === TRUE) {
        $update = 'UPDATE formulario SET
        notificacion="' . $notificacion . '",
        color="' . $color . '",
        men1="' . $men1 . '"
        WHERE usuario="' . $usuarios . '" and adopcion="' . $adopciones . '"';
        $resultado = mysqli_query($conn, $update);
        header('location: Form.php');

    } else {

        echo "ERROR REVISAR SI FALTAN DATOS";
    }


}




if (isset($_POST['rechazar'])) {
    // Recuperación de datos del formulario
    $usuarios1 = $_POST['usuarios1'];
    $adopciones1 = $_POST['adopciones1'];
    $color1 = 'alert-danger';
    $notificacion1 = 'Su solitud ha sido rechazada';
    $men11 = 'Su formulario no ha sido aceptado por el administrador.';

    $update1 = 'UPDATE formulario SET

notificacion="' . $notificacion1 . '",

color="' . $color1 . '",
      
men1="' . $men11 . '"
      
WHERE usuario="' . $usuarios1 . '" and adopcion="' . $adopciones1 . '" ';

    $resultado1 = mysqli_query($conn, $update1);

    if ($resultado1 === TRUE) {
        header('location: Form.php');

    } else {

        echo "ERROR REVISAR SI FALTAN DATOS";
    }


}




?>