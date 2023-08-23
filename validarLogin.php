<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['password'] = $password;

$consulta = "SELECT*FROM prueba where usuario='$usuario' and pass ='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado); 
if ($filas) {

    $row = mysqli_fetch_row($resultado); 
    $rol =  $row[3];   
    $_SESSION['rol'] = $rol;

    echo 'this: ' . $rol;
    if ($rol == "Usuario") {
        header('location: usuario/indexUsuario.php');
    }
    echo 'this: ' . $rol;
    if ($rol == "Administrador") {
        header('location: administrador/indexAdministrador.php');
    }
     } else {

header('location: errorSesion.html');
}


mysqli_free_result($resultado);
mysqli_close($conexion);

?>