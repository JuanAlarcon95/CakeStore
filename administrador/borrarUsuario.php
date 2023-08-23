<?php
$conn = mysqli_connect("localhost", "root", "", "base");
if (isset($_POST['eliminar'])) {
    // Recuperación de datos del formulario
    $usuario2 = $_POST['usuario2'];
    $email2 = $_POST['email2'];

    $delete = 'DELETE FROM prueba     
WHERE usuario="' . $usuario2 . '" and email="' . $email2 . '" ';

    $resultado2 = mysqli_query($conn, $delete);

    if ($resultado2 === TRUE) {
        header('location: menuU.php');

    } else {

        echo "ERROR REVISAR SI FALTAN DATOS";
    }


}

?>