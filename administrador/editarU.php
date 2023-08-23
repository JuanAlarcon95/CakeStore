<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

if (isset($_POST['editar'])) {

    $usuarioU = $_POST['usuarioU'];
    $passU = $_POST['passU'];
    $emailU = $_POST['emailU'];


    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $tipoArchivo = $_FILES['foto']['type'];
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);

        $query = 'UPDATE prueba SET
                email="' . $emailU . '",
                img="' . $binariosImagen . '",
                pass="' . $passU . '"
                WHERE usuario="' . $usuarioU . '" ';
        $resultado = mysqli_query($conexion, $query);
        header('location: menuU.php');
    } else {

        $query = 'UPDATE prueba SET
                email="' . $emailU . '",
                pass="' . $passU . '"
                WHERE usuario="' . $usuarioU . '"';
        $resultado = mysqli_query($conexion, $query);
        header('location: menuU.php');
    }
}

?>