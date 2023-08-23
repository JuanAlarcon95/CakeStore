<?php
$conn = mysqli_connect("localhost", "root", "", "base");
if (isset($_POST['eliminar'])) {
    // Recuperación de datos del formulario
    $nombreM2 = $_POST['nombreM2'];
    $razaM2 = $_POST['razaM2'];

    $delete = 'DELETE FROM otro     
WHERE nombre="' . $nombreM2 . '" and raza="' . $razaM2 . '" ';

    $resultado2 = mysqli_query($conn, $delete);

    if ($resultado2 === TRUE) {
        header('location: menuM.php');

    } else {

        echo "ERROR REVISAR SI FALTAN DATOS";
    }


}

?>