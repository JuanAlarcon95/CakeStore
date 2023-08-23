<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

if (isset($_POST['insertar'])) {
    $usuarioN = $_POST['usuarioN'];
    $nombreN = $_POST['nombreN'];
    $telefonoN = $_POST['telefonoN'];
    $fechaN = $_POST['fechaN'];
    $domicilioN = $_POST['domicilioN'];
    $nom=$_POST['nomN'];
    $raza=$_POST['razaN'];
    $adopcionN = "$nom - $raza";
    $notificacionN = "Su solicitud esta en revisión";
    $colorN = "alert-warning";
    $men1N = "Su formulario se ha enviado correctamente, por lo que solo debe esperar a que se comuniquen con usted de acuerdo a los datos que proporciono en el formulario.";

    //$query = "INSERT INTO formulario (usuario,nombre,'telefono','fechaN','domicilio','adopcion','notificacion','color','men1') 
//          values ('$usuarioN', '$nombreN','$telefonoN','$fechaN','$domicilioN','$adopcionN', '$notificacionN','$colorN','$men1N')";

$consulta = "INSERT INTO formulario (usuario, nombre, telefono, fechaN, domicilio, adopcion,notificacion,color,men1,nom,raza) VALUES ('$usuarioN','$nombreN','$telefonoN','$fechaN','$domicilioN','$adopcionN','$notificacionN','$colorN','$men1N','$nom','$raza')";

    $resultado = mysqli_query($conexion, $consulta);
    header('location: Form.php');
}






?>