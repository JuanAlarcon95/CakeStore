<?php
$conn = mysqli_connect("localhost", "root", "", "base");
if (isset($_POST['eliminar'])) {
    // Recuperación de datos del formulario
    $usuarios2 = $_POST['usuarios2'];
    $adopciones2 = $_POST['adopciones2'];

    $delete = 'DELETE FROM formulario     
WHERE usuario="' . $usuarios2 . '" and adopcion="' . $adopciones2 . '" ';

    $resultado2 = mysqli_query($conn, $delete);

    if ($resultado2 === TRUE) {
        header('location: Form.php');

    } else {

        echo "ERROR REVISAR SI FALTAN DATOS";
    }


}

?>