<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

if(isset($_POST['btn'])){
    
    $nombreM = $_POST['nombreM'];
    $razaM = $_POST['razaM'];
    $sexoM = $_POST['sexoM'];
    $tamañoM = $_POST['tamañoM'];
    $edadM = $_POST['edadM'];
    $datosM = $_POST['datosM'];
    $tipoM = $_POST['tipoM'];

    $tipoArchivo = $_FILES['foto']['type'];
    $nombreArchivo = $_FILES['foto']['name'];
    $tamanoArchivo = $_FILES['foto']['size'];
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida,$tamanoArchivo);

    $binariosImagen = mysqli_escape_string($conexion,$binariosImagen);

$query = "INSERT INTO otro (id,nombre, raza,sexo,tam,edad,datos,img,TIPO,imagen2) values 
('', '".$nombreM."','".$razaM."','".$sexoM."','".$tamañoM."','".$edadM."', '".$datosM."','" . $binariosImagen . "','".$tipoM."','')";

$resultado = mysqli_query($conexion, $query);
header('location: menuM.php');
}






?>