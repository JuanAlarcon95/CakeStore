<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "base");

$usuario = $_SESSION['usuario'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$fechaN = $_POST['fechaN'];
$domicilio = $_POST['domicilio'];
$fechaN = $_POST['fechaN'];
$adopcion = $_POST['adopcion'];
$nom = $_POST['nom'];
$raza = $_POST['raza'];

$rol = "Usuario";
$notificacion = "Su solicitud esta en revisión";
$color = "alert-warning";
$men1 = "Su formulario se ha enviado correctamente, por lo que solo debe esperar a que se comuniquen con usted de acuerdo a los datos que proporciono en el formulario.";

$consulta = "INSERT INTO formulario (usuario, nombre, telefono, fechaN, domicilio, adopcion,notificacion,color,men1,nom,raza) VALUES ('$usuario','$nombre','$telefono','$fechaN','$domicilio','$adopcion','$notificacion','$color','$men1','$nom','$raza')";

$resultado = mysqli_query($conexion, $consulta);
header('location: notificacionesU.php');
/*      Su solicitud se envio con exito!
         Su solicitud esta en revisión */
?>