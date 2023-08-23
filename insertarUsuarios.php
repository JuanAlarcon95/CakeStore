<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$imagen = '';
$rol="Usuario";

$consulta = "INSERT INTO prueba (usuario, pass, email, rol,img) VALUES ('$usuario','$password','$email','$rol','$imagen')";
$resultado = mysqli_query($conexion, $consulta);
header('location: inicioSesion.html');

?>