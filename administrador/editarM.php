<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

if (isset($_POST['edit'])) {

    $nombreM = $_POST['nombreM'];
    $razaM = $_POST['razaM'];
    $sexoM = $_POST['sexoM'];
    $tamañoM = $_POST['tamañoM'];
    $edadM = $_POST['edadM'];
    $datosM = $_POST['datosM'];
    $tipoM = $_POST['tipoM'];


    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $tipoArchivo = $_FILES['foto']['type'];
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);

        $query = 'UPDATE otro SET
        nombre="' . $nombreM . '",
        raza="' . $razaM . '",
        sexo="' . $sexoM . '",
        tam="' . $tamañoM . '",
        edad="' . $edadM . '",
        datos="' . $datosM . '",
        img="' . $binariosImagen . '",
        tipo="' . $tipoM . '"
        WHERE nombre="' . $nombreM . '" and raza="' . $razaM . '" ';
        $resultado = mysqli_query($conexion, $query);
        header('location: menuM.php');
    } else {

        $query = 'UPDATE otro SET
        nombre="' . $nombreM . '",
        raza="' . $razaM . '",
        sexo="' . $sexoM . '",
        tam="' . $tamañoM . '",
        edad="' . $edadM . '",
        datos="' . $datosM . '",
        tipo="' . $tipoM . '"
        WHERE nombre="' . $nombreM . '" and raza="' . $razaM . '" ';
        $resultado = mysqli_query($conexion, $query);
        header('location: menuM.php');
    }

}

?>