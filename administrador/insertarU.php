<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

$email = $_POST['emailU2'];
$usuario = $_POST['usuarioU2'];
$password = $_POST['passwordU2'];
$imagen = '';

$rol = "Usuario";


$consulta = "INSERT INTO prueba (usuario, pass, email, rol,img) VALUES ('$usuario','$password','$email','$rol','$imagen')";

$resultado = mysqli_query($conexion, $consulta);
header('location: menuU.php');

?>