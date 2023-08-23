<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

if (isset($_POST['enviar'])) {
    $usuario = $_POST['user'];

    $tipoArchivo = $_FILES['foto']['type'];
    $nombreArchivo = $_FILES['foto']['name'];
    $tamanoArchivo = $_FILES['foto']['size'];
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);

    $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);

    $query = 'UPDATE prueba SET
    img="' . $binariosImagen . '"
    WHERE usuario="' . $usuario . '" ';
    $resultado = mysqli_query($conexion, $query);
    header('location: perfil.php');
}

?>